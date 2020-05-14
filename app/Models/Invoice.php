<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model 
{
    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'invoices';

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

    protected $fillable = array('client_id', 'sum_value', 'statut', 'date', 'currency');
    
     /**
     * The attributes that are mass visible.
     *
     * @var array
     */

    protected $visible = array('client_id', 'sum_value', 'statut', 'date', 'currency');

    /**
     * A Invoice belongs to a client
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function clients()
    {
        return $this->belongsTo('App\Models\Client');
    }

     /**
     * A Invoice belongs to a invoiceJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function invoiceJobs()
    {
        return $this->hasMany('App\Models\Invoicejob');
    }

}