<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePayslipsTable extends Migration {

	public function up()
	{
		Schema::create('payslips', function(Blueprint $table) {
			$table->increments('id');
			$table->string('jobcode_name', 50)->nullable();
			$table->boolean('statut')->default(0);
			$table->date('date');
			$table->decimal('sum_value')->default('0');
			$table->decimal('currency', 8, 2)->nullable()->default('0');
			$table->integer('employe_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('payslips');
	}
}