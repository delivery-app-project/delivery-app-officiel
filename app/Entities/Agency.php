<?php

namespace App\Entities;

use App\Validators\AgencyValidator;
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
        'name',
        'address_id',
        'employee_id',
        'stock_id',
        'phone',
        'email'
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

    
    // stocks 
    public function stocks(){
        return $this->belongsToMany(Stock::class,'agency_stock');
    }

    
    public function address(){
        return $this->morphOne(Address::class,'model');
    }


    public function type(){
        return $this->morphTo();
    }


    public function transactions_source(){
        return $this->morphMany(Transaction::class,'source');
    }
    public function transactions_destination(){
        return $this->morphMany(Transaction::class,'destination');
    }

     /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return AgencyValidator::class;
    }


    


}
