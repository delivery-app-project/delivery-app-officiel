<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmployeeRepository;
use App\Entities\Employee;
use App\Validators\EmployeeValidator;
use App\Criteria\EmployeeRepositoryCriteria;
use App\Providers\RouteServiceProvider;
use App\Traits\BaseRepositoryTrait;
/**
 * Class EmployeeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmployeeRepositoryEloquent extends BaseRepository implements EmployeeRepository
{
    use BaseRepositoryTrait;

    protected $relations = [
        'transactions','agencies','user','stocks'
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


        $id = key_exists('id', $data) ? $data['id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;


        $model = $this;


        if ($id) $model =  $this->where('id',$id);


        return $model->paginate($perPage);



    }


    public function show($id){
        return $this->findOrFail($id);
    }

}
