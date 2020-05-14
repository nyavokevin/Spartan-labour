<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model 
{

    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'events';

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

    protected $fillable = array('job_id', 'name', 'description', 'schedule_event_id', 'jobcode_id', 'date_start', 'date_end', 'client_id', 'duration');
    
    /**
     * The attributes that are mass visible.
     *
     * @var array
     */
    
    protected $visible = array('job_id', 'name', 'description', 'schedule_event_id', 'jobcode_id', 'date_start', 'date_end', 'client_id', 'duration');

    /**
     * A Event has one a job
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */

    public function jobs()
    {
        return $this->hasOne('App\Models\Job');
    }

    /**
     * A Event has one a client
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */

    public function clients()
    {
        return $this->belongsTo('App\Models\Client');
    }

    /**
     * A Event belongs to many to employe
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */

    public function employes()
    {
        return $this->belongsToMany('App\Models\Employe', 'event_employe');
    }

    /**
     * A Event belongs to a eventEmploye
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function eventEmployes()
    {
        return $this->belongsTo('App\Models\EventEmploye');
    }

}