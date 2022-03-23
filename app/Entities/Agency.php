<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Agency.
 *
 * @package namespace App\Entities;
 */
class Agency extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'name',
        'address_id',
        'employee_id',
        'stock_id'
    ];

    public function director(){
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function main_stock(){
        return $this->belongsTo(Stock::class,'stock_id');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class,'agency_employee');
    }


    
    public function address(){
        return $this->morphOne(Address::class,'model');
    }
    


}
