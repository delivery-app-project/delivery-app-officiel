<?php

namespace App\Repositories;

use App\Criteria\OrderCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrderRepository;
use App\Entities\Order;
use App\Entities\Stock;
use App\Providers\RouteServiceProvider;
use App\Traits\BaseRepositoryTrait;
use App\Traits\repositoriesCrud;
use App\Validators\OrderValidator;
use PDO;
use Illuminate\Container\Container as Application;

/**
 * Class OrderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    use BaseRepositoryTrait;
    use repositoriesCrud;

    protected $type_morph_repository;
    protected $address_repository;
    protected $package_repository;

    public  $relations = [
        'package.marchent', 'receiver_type', 'etat', 'address_destination.city.daira.wilaya', 'address_source.city.daira.wilaya'
    ];


    public function __construct(Application $app, AddressRepository $address_repository, PackageRepository $package_repository, TypeMorphRepository $type_morph_repository)
    {

        parent::__construct($app);
        $this->package_repository = $package_repository;
        $this->address_repository = $address_repository;
        $this->type_morph_repository = $type_morph_repository;
    }


    protected $fieldSearchable = [
        'receiver' => 'like'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return OrderValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->pushCriteria(app(OrderCriteria::class));
    }


    public function index($data)
    {

        // search: 
        // perPage: 10
        // page: 1
        // sortBy: id
        // sortDesc: true
        // id: 1


        $id = key_exists('id', $data) ? $data['id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;
        $agency_id = key_exists('agency_id', $data) ? $data['agency_id'] : null;
        $stock_id = key_exists('stock_id', $data) ? $data['stock_id'] : null;
        $wilaya_id = key_exists('wilaya_id', $data) ? $data['wilaya_id'] : null;
        $daira_id = key_exists('daira_id', $data) ? $data['daira_id'] : null;
        $city_id = key_exists('city_id', $data) ? $data['city_id'] : null;
        $transaction_id = key_exists('transaction_id', $data) ? $data['transaction_id'] : null;
        $paginated = key_exists('paginated', $data) ? ($data['paginated']==="false" ? false : true) : true;
        
        $forStocks = key_exists('for_stocks', $data) ? ($data['for_stocks']==="false" ? false : true) : true;
        
        $key = $forStocks ? "stocks" : "agencies";

        if ($wilaya_id) $model =  $this->whereDoesntHave($key)->whereHas('address_source', function ($q) use ($wilaya_id,$daira_id,$city_id) {
            
            if($city_id)
            $q->where('city_id',$city_id);
            else
            $q->whereHas('city', function ($q) use ($wilaya_id,$daira_id) {
                
                if($daira_id)
                $q->where('cities.daira_id',$daira_id);
                else
                $q->whereHas('daira', function ($q) use ($wilaya_id) {
                        if($wilaya_id)
                        $q->where('dairas.wilaya_id',$wilaya_id);
                        });
            });
        });


        $model = $this;

        // filter by type 
        if (key_exists('status', $data) && $data['status'])
            $model = $this->whereHas('order_statuses', function ($q) use ($data) {
                $q->where('order_statuses.name', $data['status']);
            });

        if ($id) $model =  $this->whereHas('package', function ($q) use ($id) {
            $q->where('marchent_id', $id);
        });

        if ($agency_id) $model =  $model->whereHas('agencies', function ($q) use ($agency_id) {
            $q->where('agencies.id', $agency_id);
        });
        if ($stock_id) $model =  $model->whereHas('stocks', function ($q) use ($stock_id) {
            $q->where('stocks.id', $stock_id);
        });

        if ($transaction_id) $model =  $model->whereHas('transactions', function ($q) use ($transaction_id) {
            $q->where('transactions.id', $transaction_id);
        });

        $model = $this->handleWhereDoesntHave($data,$model);
        
        if($paginated)
        return $model->with(['package'])->paginate($perPage);
    
        return $model->with(['package'])->get();
    }


    public function store($data)
    {
        $packageData = $data['package'];
        $orderData = $data['order'];

        // create the package
        $package = $this->package_repository->store($packageData);
        // dd($order);
        // create the order
        $order = $this->create(array_merge(
            [
                'package_id' => $package->id
            ],
            $orderData
        ));
        // dd($orderData);
        // dd($order['receiver_type']);
        $re_type = $this->type_morph_repository->find($orderData['receiver_type']);

        $etat = $this->type_morph_repository->find($orderData['etat']);

        // attach the receiver type 
        $re_type->order_receiver_types()->save($order);
        // attach the etat 
        $etat->order_etats()->save($order);

        // for address (source)
        $source = $data['source'];
        $this->address_repository->create(array_merge(
            ['model_type' => Order::class, 'model_id' => $order->id, 'type' => 'source'],
            $source
        ));
        // for address destination
        $destination = $data['destination'];
        $this->address_repository->create(array_merge(
            ['model_type' => Order::class, 'model_id' => $order->id, 'type' => 'destination'],
            $destination
        ));

        return $order;
    }

    public function edit($data,$id){

            $model = $this->find($id);

            $agencies_id = key_exists('agencies_id',$data) ? $data['agencies_id'] : null;
            $stocks_id = key_exists('stocks_id',$data) ? $data['stocks_id'] : null;
            
            if($agencies_id || ($agencies_id!==null && count($agencies_id)===0)) {
                $model->agencies()->sync($agencies_id,true);
            }

            if($stocks_id || ($stocks_id!==null && count($stocks_id)===0)) {
                $model->stocks()->sync($stocks_id,true);
            }


            return $model;
    }
}
