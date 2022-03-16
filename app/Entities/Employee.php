<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use PDO;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Employee.
 *
 * @package namespace App\Entities;
 */
class Employee extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stock_type',
        'user_id'
    ];


    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function agencies(){
        return $this->belongsToMany(Agency::class,'agency_employee');
    }



    public function stocks(){
        return $this->belongsToMany(Stock::class,'stock_employee');
    }

}
