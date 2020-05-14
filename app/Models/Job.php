<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model 
{

    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'jobs';

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

    protected $fillable = array('nature', 'tags', 'package_id');

    /**
     * The attributes that are mass visible.
     *
     * @var array
     */

    protected $visible = array('nature', 'tags', 'package_id');

     /**
     * A Job belongs to a event
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function events()
    {
        return $this->belongsTo('App\Models\Event');
    }

    /**
     * A Job belongs to a package
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function packages()
    {
        return $this->hasOne('App\Models\Package');
    }

}