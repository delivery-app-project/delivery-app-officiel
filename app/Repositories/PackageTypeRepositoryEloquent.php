<?php

namespace App\Repositories;

use App\Criteria\PackageTypeCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PackageTypeRepository;
use App\Entities\PackageType;
use App\Validators\PackageTypeValidator;

/**
 * Class PackageTypeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PackageTypeRepositoryEloquent extends BaseRepository implements PackageTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PackageType::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PackageTypeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->pushCriteria(app(PackageTypeCriteria::class));
    }


    public function index($data){
        return $this->all();
    }

    
}
