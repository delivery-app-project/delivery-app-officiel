<?php

namespace App\Traits;

use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Builder;

trait repositoriesCrud {



    public function handleIndex($data,$model=null){

        if(!$model) $model = $this->model;

        
        $employee_id = key_exists('employee_id', $data) ? $data['employee_id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;

        $paginated = key_exists('paginated',$data) ? ($data['paginated'] === "false" ? false : true ) : null;

        
        // if ($director_id) $model =  $this->where('employee_id', $director_id);
        if($employee_id){

        if(method_exists($model,'employees'))
         $model =  $model->where('employee_id',$employee_id)->orWhereHas('employees', function ($q) use($employee_id){
            $q->where('employees.id',$employee_id);
         });
         else if(method_exists($model,'employee')){
            $model =  $model->whereHas('employee',function ($q) use ($employee_id){
                    $q->where('employees.id',$employee_id);
            });
         }

        }


        if($paginated)
        return $model->paginate($perPage);

        if(get_class($model) === Builder::class)
        return $model->get();

        return $model->all();
    }


    public function handleShow($id){
        return $this->find($id);
    }
}