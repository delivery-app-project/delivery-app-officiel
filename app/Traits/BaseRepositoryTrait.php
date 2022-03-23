<?php
namespace App\Traits;


trait BaseRepositoryTrait {

    
    public function getRelations(){
        return $this->relations;
    }

}