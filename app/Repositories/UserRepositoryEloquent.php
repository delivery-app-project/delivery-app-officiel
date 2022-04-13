<?php

namespace App\Repositories;

use App\Criteria\UserRepositoryCriteria;
use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
use App\Traits\BaseRepositoryTrait;
use App\Traits\repositoriesCrud;
use App\Validators\UserValidator;


use Illuminate\Container\Container as Application;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    use BaseRepositoryTrait;

    protected $address_repository;
    protected $type_morph_repository;
    protected $employee_repository;
    protected $marchent_repository;

    protected $relations = [];



    public function __construct(Application $app, EmployeeRepository $employee_repository, AddressRepository $address_repository, TypeMorphRepository $type_morph_repository,MarchentRepository $marchent_repository)
    {

        parent::__construct($app);
        $this->address_repository = $address_repository;
        $this->type_morph_repository = $type_morph_repository;
        $this->employee_repository = $employee_repository;
        $this->marchent_repository = $marchent_repository;
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return UserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->pushCriteria(app(UserRepositoryCriteria::class));
    }


    public function store($data)
    {
        // hash the password 

        $data['password'] = Hash::make($data['password']);

        $status_id  = key_exists('status_id', $data) ? $data['status_id'] : null;

        $user = $this->create($data);

        // attach address
        $this->address_repository->create(array_merge(
            ['model_type' => User::class, 'model_id' => $user->id],
            $data
        ));

        if ($status_id)
            $status = $this->type_morph_repository->find($status_id);
        else $status = $this->type_morph_repository->findWhere(['name' => 'active', 'type' => 'UserStatus'])->get()->first();

        // attah type 
        $status->users()->save($user);

        
        // assign to role 
        $role = Role::findByName(key_exists('role',$data) ? $data['role'] : 'marchent', 'api');
        // attach the role
        $user->assignRole($role->name);

        // if employee
        $isEmployee = key_exists('isEmployee', $data) ? $data['isEmployee'] : null;
        $isMarchent = key_exists('isMarchent', $data) ? $data['isMarchent'] : null;

        if ($isEmployee) {
            // create the employee
            $employee = $this->employee_repository->store(array_merge($data, [
                'user_id' => $user->id
            ]));
        }
        else if($isMarchent){                
            // create the marchent 
            $marchent = $this->marchent_repository->store(array_merge($data, [
                'user_id' => $user->id
            ]));
        }

        return $user;
    }


    public function edit($data, $id)
    {

        $password = key_exists('password', $data) ? $data['password'] : null;
        $forLang = key_exists('lang',$data) ;

        if ($password)
            $data['password'] = Hash::make($password);

        // if $data contain lang 
        $model = $this->update($data, $id);
        
        if($forLang) return $model;

        $status_id  = key_exists('status_id', $data) ? $data['status_id'] : null;

        if ($status_id)
            $status = $this->type_morph_repository->find($status_id);
        else $status = $this->type_morph_repository->findWhere(['name' => 'active', 'type' => 'UserStatus'])->get()->first();

        // attah status
        $status->users()->save($model);
        
        $address = key_exists('address_id', $data) ? ($data['address_id'] ? $this->address_repository->find($data['address_id']) : null) : null;
        

        if (!$address)
            $this->address_repository->create(array_merge(
                ['model_type' => User::class, 'model_id' => $model->id],
                $data
            ));
        else
            $this->address_repository->update($data, $address->id);

            // if employee
            $isEmployee = key_exists('isEmployee', $data) ? $data['isEmployee'] : null;
            $isMarchent = key_exists('isMarchent', $data) ? $data['isMarchent'] : null;

            if ($isEmployee) {
                // update the employee
                $this->employee_repository->update(array_merge($data, [
                    'user_id' => $model->id
                ]),$model->employee->id);
            } else if($isMarchent){
                
                // update the marchent
               $marchent =  $this->marchent_repository->update(array_merge($data, [
                    'user_id' => $model->id
                ]),$model->marchent->id);
            }

            
    
        
         return $model;

    }
}
