<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login', 'email', 'password', 'country_subdivision_code', 'city', 'postalCode', 'role_id', 'client_id', 'employe_id', 'address', 'phone'
    ];

    /**
    * The attributes that are mess visible.
    *
    * @var array
    */

    protected $visible = [
        'name', 'login', 'email', 'password', 'country_subdivision_code', 'city', 'postalCode', 'role_id', 'client_id', 'employe_id', 'address', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * A User has one to role
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */

    public function roles()
    {
        return $this->hasOne('App\Models\Role', 'role_id');
    }

    /**
     * A user corresponds to an client
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */

    public function clients()
    {
        return $this->hasOne('App\Models\Client', 'client_id');
    }

    /**
     * A user corresponds to an employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */

    public function employes()
    {
        return $this->hasOne('App\Models\Employe', 'employe_id');
    }
}
