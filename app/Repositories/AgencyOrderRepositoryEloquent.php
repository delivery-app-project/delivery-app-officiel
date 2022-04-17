<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AgencyOrderRepository;
use App\Entities\AgencyOrder;
use App\Validators\AgencyOrderValidator;

/**
 * Class AgencyOrderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AgencyOrderRepositoryEloquent extends BaseRepository implements AgencyOrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AgencyOrder::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
