<?php

namespace App\Repositories;

use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
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
    protected $address_repository;
    protected $type_morph_repository;
    protected $employee_repository;

    public function __construct(Application $app,EmployeeRepository $employee_repository,AddressRepository $address_repository, TypeMorphRepository $type_morph_repository)
    {

        parent::__construct($app);
        $this->address_repository = $address_repository;
        $this->type_morph_repository = $type_morph_repository;
        $this->employee_repository = $employee_repository;
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
    }


    public function store($data){
            // hash the password 

            $data['password'] = Hash::make($data['password']);
            
            $user = $this->create($data);
            
            // attach address
            $this->address_repository->create(array_merge(
                ['model_type' => User::class, 'model_id' => $user->id],
                $data
            ));
            // assign to role 
            $role = Role::findByName($data['role'],'api');
            // attach the role
            $user->assignRole($role->name);

            // if employee
            $isEmployee = key_exists('isEmployee', $data)? $data['isEmployee'] : null;
            
            if($isEmployee){
                // create the employee
                $employee = $this->employee_repository->store(array_merge($data,[
                    'user_id' => $user->id
                ]));

            }

            return $user;
    }

    
}
