<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployesTable extends Migration {

	public function up()
	{
		Schema::create('employes', function(Blueprint $table) {
			$table->increments('id');
			$table->decimal('hourly_rate', 8, 2)->nullable();
			$table->string('account_number', 50);
			$table->string('social_security_number', 50);
			$table->text('description')->nullable();
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('employes');
	}
}