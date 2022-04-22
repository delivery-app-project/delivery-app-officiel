<?php

namespace App\Repositories;

use App\Criteria\BaseCriteria;
use App\Criteria\TransactionRepositoryCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TransactionRepository;
use App\Entities\Transaction;
use App\Providers\RouteServiceProvider;
use App\Traits\BaseRepositoryTrait;
use App\Traits\repositoriesCrud;
use App\Validators\TransactionValidator;
use Illuminate\Container\Container as Application;

/**
 * Class TransactionRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TransactionRepositoryEloquent extends BaseRepository implements TransactionRepository
{
    use repositoriesCrud;
    use BaseRepositoryTrait;
    
    protected $agency_repository;
    protected $stock_repository;

    public function __construct(Application $app, StockRepository $stock_repository, AgencyRepository $agency_repository)
    {

        parent::__construct($app);
        $this->agency_repository = $agency_repository;
        $this->stock_repository = $stock_repository;

    }



    protected $relations = [
            'employee.user','orders','source','destination'
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Transaction::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TransactionValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        
        $this->pushCriteria(app(BaseCriteria::class));
    }
    

    public function index($data){
        
        return $this->handleIndex($data,$this);

    }


    public function show($id){
            return $this->handleShow($id);
    }


    public function store($data)
    {

        $sourceAndDest = $data['sourceAndDest'];
        $source_id = $data['source_id'];
        $destination_id = $data['destination_id'];
        $orders = $data['orders'];

        $model = $this->create($data);

        // stockToAgency
        // agencyToStock
        // agencyToAgency
        // stockToStock

        if($sourceAndDest==="stockToAgency" || $sourceAndDest==="stockToStock"){
            $source = $this->stock_repository->find($source_id);
        }
        if($sourceAndDest==="agencyToStock" || $sourceAndDest==="agencyToAgency"){
            $source = $this->agency_repository->find($source_id);
        }


        if($sourceAndDest==="stockToAgency" || $sourceAndDest==="agencyToAgency"){
            $destination = $this->agency_repository->find($destination_id);
        }
        if($sourceAndDest==="agencyToStock" || $sourceAndDest==="stockToStock"){
            $destination = $this->stock_repository->find($destination_id);
        }

        $source->transactions_source()->save($model);
        $destination->transactions_destination()->save($model);
        // $model->source()->save($source)

        if($orders)   $model->orders()->sync($orders,true);
        

        return $model;
    }
}
