<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrderRepository;
use App\Entities\Order;
use App\Providers\RouteServiceProvider;
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
    protected $type_morph_repository;
    protected $package_repository;


    public function __construct(Application $app, PackageRepository $package_repository, TypeMorphRepository $type_morph_repository)
    {

        parent::__construct($app);
        $this->package_repository = $package_repository;
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


        $model = $this;

        // filter by type 
        if (key_exists('status', $data) && $data['status'])
            $model = $this->whereHas('order_statuses', function ($q) use ($data) {
                $q->where('order_statuses.name', $data['status']);
            });

        if ($id) $model =  $this->whereHas('package', function ($q) use ($id) {
            $q->where('marchent_id', $id);
        });


        return $model->with(['package'])->paginate($perPage);
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

        return $order;
    }
}
