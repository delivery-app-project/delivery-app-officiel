<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmployeeRepository;
use App\Entities\Employee;
use App\Traits\BaseRepositoryTrait;
use App\Validators\EmployeeValidator;
use App\Criteria\EmployeeRepositoryCriteria;
/**
 * Class EmployeeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmployeeRepositoryEloquent extends BaseRepository implements EmployeeRepository
{
    use BaseRepositoryTrait;

    protected $relations = [
        'transactions','agencies','user','stocks','user.roles'
    ];

    protected $fieldSearchable = [
        'user.first_name' => 'like',
        'user.last_name' => 'like',

    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Employee::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EmployeeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->pushCriteria(app(EmployeeRepositoryCriteria::class));
    }


    public function index($data){
        
        $role_ids = key_exists('role_ids',$data) ? $data['role_ids'] : null;
        $role_ids = is_string($role_ids) ? json_decode($role_ids) : $role_ids;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : null;


        $model = $this;

        if($perPage)    return $model->paginate($perPage);
        
        

        if($role_ids)
        return $this->whereHas('user',function ($q) use ($role_ids){
            // $q->whereIn('roles.id',$role_ids);
            $q->whereHas('roles',function ($q) use ($role_ids){
                $q->whereIn('roles.id',$role_ids);
            });

        })->get();


        return $this->all();

    }


    public function show($id){
        return $this->findOrFail($id);
    }

}
