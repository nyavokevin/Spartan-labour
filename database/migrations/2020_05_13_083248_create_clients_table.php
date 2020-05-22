<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nature', 30);
			$table->string('account_number', 50);
			$table->string('tax_number', 50)->nullable();
			$table->string('contact_person', 50)->nullable();
			$table->text('description')->nullable();
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}