<?php

namespace App\Repositories;

use App\Criteria\BaseCriteria;
use App\Criteria\TransactionRepositoryCriteria;
use App\Entities\Agency;
use App\Entities\Stock;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TransactionRepository;
use App\Entities\Transaction;
use App\Entities\TypeMorph;
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
    protected $type_morph_repository;

    public function __construct(Application $app, StockRepository $stock_repository, AgencyRepository $agency_repository,TypeMorphRepository $type_morph_repository)
    {

        parent::__construct($app);
        $this->agency_repository = $agency_repository;
        $this->stock_repository = $stock_repository;
        $this->type_morph_repository = $type_morph_repository;
    }



    protected $relations = [
        'employee.user', 'orders', 'source', 'destination','etat'
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


    public function index($data)
    {
        $source = key_exists('source', $data) ? $data['source'] : null;
        $destination = key_exists('destination', $data) ? $data['destination'] : null;
        $etat_id = key_exists('etat_id', $data) ? $data['etat_id'] : null;
        
        $for = key_exists('for', $data) ? $data['for'] : 'agency';

        $for = $for==='agency' ? [Agency::class] : [Stock::class];
        
        if ($source)
            $this->whereHasMorph(
                'source',
                $for,
                function ($q) use ($source) {
                    $q->where('id', $source);
                }
            );

        if ($destination)
            $this->whereHasMorph(
                'destination',
                $for,
                function ($q) use ($destination) {
                    $q->where('id', $destination);
                }
            );
            
        if ($etat_id)
            $this->whereHasMorph(
                'etat',
                TypeMorph::class,
                function ($q) use ($etat_id) {
                    $q->where('id', $etat_id);
                }
            );
        

        return $this->handleIndex($data, $this);
    }


    public function show($id)
    {
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

        if ($sourceAndDest === "stockToAgency" || $sourceAndDest === "stockToStock") {
            $source = $this->stock_repository->find($source_id);
        }
        if ($sourceAndDest === "agencyToStock" || $sourceAndDest === "agencyToAgency") {
            $source = $this->agency_repository->find($source_id);
        }


        if ($sourceAndDest === "stockToAgency" || $sourceAndDest === "agencyToAgency") {
            $destination = $this->agency_repository->find($destination_id);
        }
        if ($sourceAndDest === "agencyToStock" || $sourceAndDest === "stockToStock") {
            $destination = $this->stock_repository->find($destination_id);
        }

        $source->transactions_source()->save($model);
        $destination->transactions_destination()->save($model);


        if ($orders)   $model->orders()->sync($orders, true);

        $etat = $this->type_morph_repository->where('default',true)->get()->first();
        // sync the etat
        $etat->transaction_etats()->save($model);


        return $model;
    }


    public function edit($data,$id){

        $etat_id = key_exists('etat_id',$data) ? $data['etat_id'] : null;

        $model = $this->update($data,$id);


        $etat  = $this->type_morph_repository->find($etat_id);
        
        if($etat)
        $etat->transaction_etats()->save($model);
        
        return $model;
    }
}
