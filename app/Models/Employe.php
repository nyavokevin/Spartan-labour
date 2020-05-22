<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model 
{

    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'employes';

     /**
     * The timestamps that are mass assignable.
     *
     * @var array
     */

    public $timestamps = true;

    /**
     * The attributes that are mass fillable.
     *
     * @var array
     */

    protected $fillable = array('hourly_rate', 'account_number', 'social_security_number', 'description', 'user_id');
    
    /**
     * The attributes that are mass visible.
     *
     * @var array
     */
    
    protected $visible = array('hourly_rate', 'account_number', 'social_security_number', 'description', 'user_id');

    /**
     * A Employe has one a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }

     /**
     * A Employe belongs to many a event
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */

    public function events()
    {
        return $this->belongsToMany('App\Models\Event');
    }

     /**
     * A Employe belongs to eventEmploye
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    
    public function eventEmployes()
    {
        return $this->belongsTo('App\Models\EventEmploye');
    }

     /**
     * A Employe has many payslips
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function payslips()
    {
        return $this->hasMany('App\Models\Payslip');
    }

}