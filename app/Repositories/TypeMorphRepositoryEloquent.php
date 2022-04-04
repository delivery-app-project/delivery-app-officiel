<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TypeMorphRepository;
use App\Entities\TypeMorph;
use App\Validators\TypeMorphValidator;

/**
 * Class TypeMorphRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TypeMorphRepositoryEloquent extends BaseRepository implements TypeMorphRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeMorph::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TypeMorphValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }



    public function index($data){

        $type = key_exists('type',$data) ? $data['type'] : null;
        if($type) return $this->where('type',$type)->get();
        

        return $this->all();
    }
    
}
