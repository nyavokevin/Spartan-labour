<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('job_id')->unsigned();
			$table->string('name', 50);
			$table->string('description', 50)->nullable();
			$table->bigInteger('schedule_event_id')->unsigned()->nullable();
			$table->bigInteger('jobcode_id')->unsigned()->nullable();
			$table->date('date_start')->nullable();
			$table->date('date_end')->nullable();
			$table->integer('client_id')->unsigned();
			$table->integer('duration');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}