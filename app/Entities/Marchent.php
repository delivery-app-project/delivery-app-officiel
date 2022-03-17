<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Marchent.
 *
 * @package namespace App\Entities;
 */
class Marchent extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name',
        'address_id',
        'tax_identification_number',
        'trade_type',
        'user_id'
    ];

    // // orders of the marchent 
    // public function orders(){
    //     return $this->hasMany(Order::class,'marchent_id','id');
    // }

    public function packages(){
        return $this->hasMany(Package::class,'marchent_id','id');
    }

    // has many through 
    // orders of the marchent 
    public function orders(){
        return $this->hasManyThrough(Order::class,Package::class);
    }


}
