<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PackageRepository;
use App\Entities\Package;
use App\Providers\RouteServiceProvider;
use App\Validators\PackageValidator;

/**
 * Class PackageRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PackageRepositoryEloquent extends BaseRepository implements PackageRepository
{

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
        return Package::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return PackageValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    // for package controller index 
    public function index($data)
    {
        // id of the marchent 
        $id = key_exists('id', $data) ? $data['id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;

        $model = $this;
        // filter by type 
        if (key_exists('status', $data) && $data['status'])
            $model = $this->whereHas('package_type', function ($q) use ($data){
                $q->where('package_types.name' , $data['status']);
            });

        if ($id) $model =  $this->whereHas('marchent', function ($q) use ($id) {
            $q->where('id', $id);
        });

        return $model->paginate($perPage);
    }


    public function store($data){
        
            $model =$this->create($data);

            return $model;
    }
}
