<?php

namespace App\Repositories;

use App\Criteria\WilayaRepositoryCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\WilayaRepository;
use App\Entities\Wilaya;
use App\Traits\BaseRepositoryTrait;
use App\Validators\WilayaValidator;

/**
 * Class WilayaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class WilayaRepositoryEloquent extends BaseRepository implements WilayaRepository
{
    
    use BaseRepositoryTrait;

    protected $relations = [
        'dairas.cities'
    ];


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
        
        $this->pushCriteria(app(WilayaRepositoryCriteria::class));
    }
    
    public function index($data){
        return $this->all();
    }
}
