<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\StockRepository;
use App\Entities\Stock;
use App\Validators\StockValidator;
use App\Providers\RouteServiceProvider;
use App\Traits\BaseRepositoryTrait;
use App\Criteria\StockRepositoryCriteria;

/**
 * Class StockRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class StockRepositoryEloquent extends BaseRepository implements StockRepository
{

    use BaseRepositoryTrait;

    protected $relations = [
        'director','agencies','main_agency','employees','secondary_stocks'
    ];
    // shearce filed
    protected $fieldSearchable = [
        // recherche dans la table stock with like in name key
        'name' => 'like'
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Stock::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return StockValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    { //syntax de recherce (request)
       $this->pushCriteria(app(RequestCriteria::class));
        // les relation
       $this->pushCriteria(app(StockRepositoryCriteria::class));
    }


    public function index($data){

        $paginated = key_exists('paginated',$data) ? ($data['paginated'] === "false" ? false : true) : true;

        $status = key_exists('status', $data) ? $data['status'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;

        $model = $this;


        if ($status) $model =  $this->where('type',$status);

        if($paginated)
        return $model->paginate($perPage);

        return $model->get();

    }


    public function show($id){
        return $this->findOrFail($id);
    }

}
