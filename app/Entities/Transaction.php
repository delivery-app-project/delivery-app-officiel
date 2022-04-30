<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Transaction.
 *
 * @package namespace App\Entities;
 */
class Transaction extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'send_date',
        'time_send_date',
        'receive_date',
        'time_receive_date',
        'employee_id'
    ];


    public function orders(){
        return $this->belongsToMany(Order::class,'transaction_order');
    }

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }


    public function source(){
        return $this->morphTo('source');
    }

    
    public function destination(){
            return $this->morphTo('destination');
    }






    
}
