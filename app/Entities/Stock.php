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
        'agency_id'
    ];

    // main agency for the zone stock
    public function main_agency(){
        return $this->belongsTo(Agency::class,'agency_id');
    }
    // secondary agencies 
    public function agencies(){
        return $this->belongsTo(Agency::class,'agency_stock');
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




}
