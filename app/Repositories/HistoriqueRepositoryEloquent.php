<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\HistoriqueRepository;
use App\Entities\Historique;
use App\Validators\HistoriqueValidator;

/**
 * Class HistoriqueRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class HistoriqueRepositoryEloquent extends BaseRepository implements HistoriqueRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Historique::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return HistoriqueValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
