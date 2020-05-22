<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

	public function up()
	{
		Schema::create('roles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle', 50);
			$table->string('permissions', 20)->default('0');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}