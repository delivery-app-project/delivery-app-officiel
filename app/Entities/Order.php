<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Order.
 *
 * @package namespace App\Entities;
 */
class Order extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'receiver',
        // 'receiver_type',
        'phone',
        'second_phone',
        'email',
        'weight',
        'height',
        'width',
        'length',
        'send_date',
        'receive_date',
        'time_receive_date',
        'etat',
        'quatity',
        'package_id'
    ];


    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }


    public function order_statuses(){
        return $this->belongsToMany(OrderStatus::class,'order_status_order');
    }

    public function receiver_type(){
        return $this->morphTo();
    }

    public function etat(){
        return $this->morphTo();
    }

    // for address 
    public function address_source(){
        return $this->morphOne(Address::class,'model')->where('type','source');
    }
    public function address_destination(){
        return $this->morphOne(Address::class,'model')->where('type','destination');
    }

    
}
