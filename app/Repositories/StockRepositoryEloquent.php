<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\StockRepository;
use App\Entities\Stock;
use App\Validators\StockValidator;
use App\Providers\RouteServiceProvider;
use App\Traits\BaseRepositoryTrait;
use App\Criteria\StockRepositoryCriteria;
use Illuminate\Container\Container as Application;

/**
 * Class StockRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class StockRepositoryEloquent extends BaseRepository implements StockRepository
{

    use BaseRepositoryTrait;
    protected $address_repository;
    protected $type_morph_repository;


    public function __construct(Application $app, AddressRepository $address_repository, TypeMorphRepository $type_morph_repository)
    {

        parent::__construct($app);
        $this->address_repository = $address_repository;
        $this->type_morph_repository = $type_morph_repository;
    }

    protected $relations = [
        'director.user','agencies','main_agency','employees.user','secondary_stocks','address.city.daira.wilaya','type'
    ];
    // shearce filed
    protected $fieldSearchable = [
        // recherche dans la table stock with like in name key
        'name' => 'like'
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Stock::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return StockValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    { //syntax de recherce (request)
       $this->pushCriteria(app(RequestCriteria::class));
        // les relation
       $this->pushCriteria(app(StockRepositoryCriteria::class));
    }


    public function index($data){

        $paginated = key_exists('paginated',$data) ? ($data['paginated'] === "false" ? false : true) : true;

        $status = key_exists('status', $data) ? $data['status'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;

        $model = $this;


        if ($status) $model =  $this->where('type',$status);

        if($paginated)
        return $model->paginate($perPage);

        return $model->get();

    }


    public function show($id){
        return $this->findOrFail($id);
    }


    public function store($data)
    {
        // create the agency
        $model = $this->create($data);
        // get type
        $type = $this->type_morph_repository->find($data['type_id']);
        // use (district and city_id)
        $this->address_repository->create(array_merge(
            ['model_type' => Stock::class, 'model_id' => $model->id],
            $data
        ));
        // attah type 
        $type->agencies()->save($model);


        return $model;
    }


    public function edit($data, $id)
    {

        // attaching employees 
        $employee_ids = key_exists('employee_ids',$data) ? $data['employee_ids'] : null;
        
        if($employee_ids) {
            $agency = $this->find($id);
            $agency->employees()->sync($employee_ids,true);
            $agency->load('employees');
            return $agency;
        }


        $model = $this->update($data,$id);

        $type = $this->type_morph_repository->find($data['type_id']);
        
        $address = key_exists('address_id',$data) ? ($data['address_id'] ? $this->address_repository->find($data['address_id']) : null ): null;   
        // use (district and city_id)
        if(!$address)
        $this->address_repository->create(array_merge(
            ['model_type' => Stock::class, 'model_id' => $model->id],
            $data
        ));
        else
        $this->address_repository->update($data,$address->id); 
        
        // attah type 
        $type->agencies()->save($model);

        return $model;
    }
}
