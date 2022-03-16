<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\WilayaRepository;
use App\Entities\Wilaya;
use App\Validators\WilayaValidator;

/**
 * Class WilayaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class WilayaRepositoryEloquent extends BaseRepository implements WilayaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Wilaya::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
