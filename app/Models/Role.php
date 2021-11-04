<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model 
{

    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'roles';

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

    protected $fillable = [
        'libelle', 'permissions'
    ];

    /**
     * The attributes that are mass visible.
     *
     * @var array
     */

    protected $visible = [
        'libelle', 'permissions'
    ];

    /**
     * A Role belongs to an user
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

}