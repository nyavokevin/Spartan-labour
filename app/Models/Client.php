<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'clients';

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

    protected $fillable = array('nature', 'account_number', 'tax_number', 'contact_person', 'description', 'user_id');
    
    /**
     * The attributes that are mass fillable.
     *
     * @var array
     */
    
    protected $visible = array('nature', 'account_number', 'tax_number', 'contact_person', 'description', 'user_id');

     /**
     * A Client belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }

     /**
     * A Client has many events
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }

     /**
     * A Client has many invoices
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }

}