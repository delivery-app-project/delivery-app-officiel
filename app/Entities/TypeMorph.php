<?php

namespace App\Entities;

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


}
