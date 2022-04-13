<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MarchentRepository;
use App\Entities\Marchent;
use App\Validators\MarchentValidator;
use App\Providers\RouteServiceProvider;
use App\Criteria\MarchentRepositoryCriteria;
use App\Entities\TypeMorph;
use App\Traits\BaseRepositoryTrait;

/**
 * Class MarchentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MarchentRepositoryEloquent extends BaseRepository implements MarchentRepository
{
    use BaseRepositoryTrait;

    protected $relations = [
        'packages','orders','user.address.city.daira.wilaya','user.status'
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
        return Marchent::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return MarchentValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->pushCriteria(app(MarchentRepositoryCriteria::class));
    }


    public function index($data){


        $id = key_exists('id', $data) ? $data['id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;

        $status = key_exists('status',$data) ? $data['status'] : null;
        

        $model = $this;

        if($status) {
            // dd($status);
            $model = $model->whereHas('user',function ($q) use ($status) {
                
                $q->whereHasMorph('status',[TypeMorph::class],function ($quiry) use ($status){
                    $quiry->where('name',$status);
                });
            });
        }


        if ($id) $model =  $this->where('id',$id);


        return $model->paginate($perPage);



    }


    public function show($id){
        return $this->findOrFail($id);
    }


     public function store($data)
    {
        $model = $this->create($data);

        return $model;
    }
}
