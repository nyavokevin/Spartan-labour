<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	public function up()
	{
		Schema::create('packages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle', 50)->nullable();
			$table->text('description')->nullable();
			$table->decimal('rate', 8, 2)->default('0');
			$table->integer('employe_required')->default('1');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('packages');
	}
}