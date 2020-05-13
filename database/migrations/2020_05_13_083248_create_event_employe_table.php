<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventEmployeTable extends Migration {

	public function up()
	{
		Schema::create('event_employe', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('event_id')->unsigned();
			$table->integer('employe_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('event_employe');
	}
}