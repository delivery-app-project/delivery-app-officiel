<?php

namespace App\Models;

use App\Entities\Address;
use App\Entities\Employee;
use App\Entities\Marchent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    use HasRoles;

    protected $appends = [
        'name'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'first_name',
        'last_name',
        'phone',
        'second_phone',
        'address_id',
        'bank_account_number',
        'commercial_registration_no',
        'insurance_number',
        'birth_certifcate_number',
        'car_type',
        'car_registration_number',
        'joining_date',
        'first_name_father',
        'first_name_mother',
        'last_name_mother',
        'joining_amount',
        'permanent_employee',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // for jwt 

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function abilities(){
        $permissions = $this->getAllPermissions();
        $abilities = $permissions->map(function ($item){
            return [
                'subject' => $item->subject,
                'action' => $item->action
            ];
        });
        // $res = [];
        // foreach($abilities as $ability){
        //     $res = array_merge($res,$ability);
        // };

        return $abilities;
    }


    public function address(){
        return $this->morphOne(Address::class,'model');
    }

    public function marchent(){
        return $this->hasOne(Marchent::class,'user_id','id');
    }

    public function employee(){
        return $this->hasOne(Employee::class,'user_id','id');
    }

    // appends 

    public function getNameAttribute(){
        return $this->first_name . " " . $this->last_name;
    }
}
