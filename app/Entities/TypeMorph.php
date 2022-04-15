<?php

namespace App\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class TypeMorph.
 *
 * @package namespace App\Entities;
 */
class TypeMorph extends Model implements Transformable
{
    use TransformableTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'type'
    ];


    public function agencies(){
        return $this->morphMany(Agency::class,'type');
    }

    public function users(){
        return $this->morphMany(User::class,'status');
    }

    public function marchents(){
        return $this->morphMany(User::class,'trade_type');
    }
    
    public function order_receiver_types(){
        // dd('check');
        return $this->morphMany(Order::class,'receiver_type');
    }
    public function order_etats(){
        return $this->morphMany(Order::class,'etat');
    }


}
