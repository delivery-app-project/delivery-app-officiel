<?php

namespace App\Traits;

use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Builder;

trait repositoriesCrud {



    public function handleIndex($data,$model=null){

        if(!$model) $model = $this->model;

        
        $id = key_exists('id', $data) ? $data['id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;

        $paginated = key_exists('paginated',$data) ? ($data['paginated'] === "false" ? false : true ) : null;

        
        if ($id) $model =  $this->where('employee_id', $id);


        if($paginated)
        return $model->paginate($perPage);

        if(get_class($model) === Builder::class)
        return $model->get();

        return $model->all();
    }
}