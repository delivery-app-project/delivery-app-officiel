<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MarchentRepository;
use App\Entities\Marchent;
use App\Validators\MarchentValidator;

/**
 * Class MarchentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MarchentRepositoryEloquent extends BaseRepository implements MarchentRepository
{
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
    }
    

    
}
