<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	public function up()
	{
		Schema::create('jobs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nature', 50)->nullable();
			$table->string('tags', 50)->nullable();
			$table->integer('package_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('jobs');
	}
}