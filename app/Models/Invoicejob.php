<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoicejob extends Model 
{

    /**
     * The Table associated with the models
     * 
     */

    protected $table = 'invoicejobs';

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

    protected $fillable = array('invoice_id', 'jobcode_id');

     /**
     * The attributes that are mass visible.
     *
     * @var array
     */

    protected $visible = array('invoice_id', 'jobcode_id');

    /**
     * A invoicejob belongs to an invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function invoices()
    {
        return $this->belongsTo('App\Models\Invoice');
    }

}