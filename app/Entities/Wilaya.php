<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Wilaya.
 *
 * @package namespace App\Entities;
 */
class Wilaya extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code_postal',
        'active'
    ];


    public function dairas(){
        return $this->hasMany(Daira::class);
    }
}
