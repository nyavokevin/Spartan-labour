<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	public function up()
	{
		Schema::create('invoices', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->decimal('sum_value', 8, 2)->nullable()->default('0');
			$table->string('statut', 20)->nullable();
			$table->date('date');
			$table->decimal('currency')->default('0');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('invoices');
	}
}