<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Stock.
 *
 * @package namespace App\Entities;
 */
class Stock extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'address_id',
        'employee_id',
        'agency_id',
        'phone',
        'email'
    ];

    // main agency for the zone stock
    public function main_agency(){
        return $this->belongsTo(Agency::class,'agency_id');
    }
    // secondary agencies 
    public function agencies(){
        return $this->belongsToMany(Agency::class,'agency_stock');
    }

    public function director(){
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class,'stock_employee');
    }
    // check this later
    // central stocks reltion 
    public function secondary_stocks(){
            return $this->belongsToMany(Stock::class,'stock_central_stock_secondary','stock_id');
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


//   /**
//     * Specify Validator class name
//     *
//     * @return mixed
//     */
//     public function validator()
//     {

//         return StockValidator::class;
//     }


}
