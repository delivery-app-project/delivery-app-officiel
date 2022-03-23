<?php

namespace App\Repositories;

use App\Criteria\AgencyRepositoryCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AgencyRepository;
use App\Entities\Agency;
use App\Providers\RouteServiceProvider;
use App\Traits\BaseRepositoryTrait;
use App\Validators\AgencyValidator;

/**
 * Class AgencyRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AgencyRepositoryEloquent extends BaseRepository implements AgencyRepository
{

    use BaseRepositoryTrait;

    protected $relations = [
        'director.user','address.city.daira.wilaya','main_stock'
    ];
    
    
    protected $fieldSearchable = [
        'name' => 'like'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Agency::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AgencyValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));

        $this->pushCriteria(app(AgencyRepositoryCriteria::class));

    }


    public function index($data){
        
        $id = key_exists('id', $data) ? $data['id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;


        $model = $this;


        if ($id) $model =  $this->where('employee_id',$id);


        return $model->paginate($perPage);
   
    }
    

    public function show($id){
        return $this->findOrFail($id);
    }

    
}
