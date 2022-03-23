<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Package.
 *
 * @package namespace App\Entities;
 */
class Package extends Model implements Transformable
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
        'type',
        'marchent_id'
    ];

    public function marchent(){
        return $this->belongsTo(Marchent::class,'marchent_id');
    }
    

    public function package_type(){
        return $this->belongsTo(PackageType::class,'package_type_id');
    }
    
}
