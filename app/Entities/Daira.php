<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Daira.
 *
 * @package namespace App\Entities;
 */
class Daira extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */
    protected $fillable = [
        'name',
        'wilaya_id',
        'active'
    ];


    public function wilaya(){
        return $this->belongsTo(Wilaya::class);
    }

    public function cities(){
        return $this->hasMany(City::class);
    }
    
}
