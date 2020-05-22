<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicejobsTable extends Migration {

	public function up()
	{
		Schema::create('invoicejobs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('invoice_id')->unsigned();
			$table->bigInteger('jobcode_id')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('invoicejobs');
	}
}