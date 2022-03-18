<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrderRepository;
use App\Entities\Order;
use App\Providers\RouteServiceProvider;
use App\Validators\OrderValidator;
use PDO;

/**
 * Class OrderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    
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

        if (key_exists('status', $data) && $data['status'])
            $model = $this->where(
                'etat',
                $data['status']
            );

        if ($id) $model =  $this->whereHas('package', function ($q) use ($id) {
            $q->where('marchent_id', $id);
        });


        return $model->with(['package'])->paginate($perPage);
    }
}
