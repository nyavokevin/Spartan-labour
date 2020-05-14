<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model 
{

    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'packages';

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

    protected $fillable = array('libelle', 'description', 'rate', 'employe_required');

    /**
     * The attributes that are mass visible.
     *
     * @var array
     */

    protected $visible = array('libelle', 'description', 'rate', 'employe_required');

    /**
     * A Package has one to a job
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

}