<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class City.
 *
 * @package namespace App\Entities;
 */
class City extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'daira_id',
        'active'
    ];


    public function daira(){
        return $this->belongsTo(Daira::class);
    }


}