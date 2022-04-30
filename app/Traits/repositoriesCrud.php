<?php

namespace App\Traits;

use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Builder;

trait repositoriesCrud
{



    public function handleIndex($data, $model = null)
    {

        if (!$model) $model = $this->model;


        $employee_id = key_exists('employee_id', $data) ? $data['employee_id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;

        $paginated = key_exists('paginated', $data) ? ($data['paginated'] === "false" ? false : true) : null;


        // if ($director_id) $model =  $this->where('employee_id', $director_id);
        if ($employee_id) {

            if (method_exists($model, 'employees'))
                $model =  $model->where('employee_id', $employee_id)->orWhereHas('employees', function ($q) use ($employee_id) {
                    $q->where('employees.id', $employee_id);
                });
            else if (method_exists($model, 'employee')) {
                $model =  $model->whereHas('employee', function ($q) use ($employee_id) {
                    $q->where('employees.id', $employee_id);
                });
            }
        }


        if ($paginated)
            return $model->paginate($perPage);

        if (get_class($model) === Builder::class)
            return $model->get();

        return $model->all();
    }


    public function handleShow($id)
    {
        return $this->find($id);
    }


    public function handleWhereDoesntHave($data, $model)
    {
        $whereDoesntHave = key_exists('whereDoesntHave', $data) ? $data['whereDoesntHave'] : null;
        // where dosent't have relations 
        if ($whereDoesntHave) {

            $data = is_string($whereDoesntHave) ? json_decode($whereDoesntHave, true) : $whereDoesntHave;

            foreach ($data as $value) {
                $relation = $value['relation'];
                $valueC = key_exists('value', $value) ? $value['value'] : null;
                if (!$valueC)
                    $model = $model->whereDoesntHave($relation);
                else if ($valueC) {
                    $model = $model->whereDoesntHave($relation, function ($q) use ($valueC) {
                        $key = key_exists('key', $valueC) ? $valueC['key'] : null;
                        $valueCC = key_exists('value', $valueC) ? $valueC['value'] : null;

                        if ($key && $valueCC)
                            // use where not in instead of where in 
                            $q->whereNotIn($key, $valueCC);
                        else 
                            $q = $this->handleWhereDoesntHaveMorph($valueC, $q);
                        });
                    }
            }
        }
        return $model;
    }


    public function handleWhereDoesntHaveMorph($data, $model)
    {

        $whereDoesntHaveMorph = key_exists('whereDoesntHaveMorph', $data) ? $data['whereDoesntHaveMorph'] : null;
        // where dosent't have relations 
        if ($whereDoesntHaveMorph) {
            
            $data = is_string($whereDoesntHaveMorph) ? json_decode($whereDoesntHaveMorph, true) : $whereDoesntHaveMorph;

            foreach ($data as $value) {
                $relation = $value['relation'];
                $class = $value['class'];
                $class = config('model_classes')[$class];

                $valueC = key_exists('value', $value) ? $value['value'] : null;
                if (!$valueC)
                    $model = $model->whereDoesntHaveMorph($relation, $class);
                else if ($valueC) {
                    $model = $model->whereDoesntHaveMorph($relation, $class, function ($qu) use ($valueC) {
                        $key = key_exists('key', $valueC) ? $valueC['key'] : null;
                        $valueCC = key_exists('value', $valueC) ? $valueC['value'] : null;

                        if ($key && $valueCC)
                            // if you use where dosnet have morph you must use where not in instead of where in 
                            $qu->whereNotIn($key, $valueCC);
                    });
                }

            }
        }
        return $model;
    }
}
