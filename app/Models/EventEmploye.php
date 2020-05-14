<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventEmploye extends Model 
{

     /**
     * The Table associated with the models
     * 
     */

    protected $table = 'event_employe';

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
    
    protected $fillable = array('event_id', 'employe_id');

    /**
     * The attributes that are mass visible.
     *
     * @var array
     */

    protected $visible = array('event_id', 'employe_id');

    /**
     * A EventEmploye has many to an event
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }

    /**
     * A EventEmploye has many to employe
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function employes()
    {
        return $this->hasMany('App\Models\Employe');
    }

}