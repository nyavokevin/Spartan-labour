<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payslip extends Model 
{

     /**
     * The Table associated with the models
     * 
     */

    protected $table = 'payslips';

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

    protected $fillable = array('jobcode_name', 'statut', 'date', 'sum_value', 'currency', 'employe_id');
    
    /**
     * The attributes that are mass visible.
     *
     * @var array
     */

    protected $visible = array('jobcode_name', 'statut', 'date', 'sum_value', 'currency', 'employe_id');

    /**
     * A Payslip belongs to an employe
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */


    public function employes()
    {
        return $this->belongsTo('App\Models\Employe');
    }

}