<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('employe_id')->references('id')->on('employes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('clients', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->foreign('package_id')->references('id')->on('packages')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('jobs')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('employes', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('event_employe', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('event_employe', function(Blueprint $table) {
			$table->foreign('employe_id')->references('id')->on('employes')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('invoicejobs', function(Blueprint $table) {
			$table->foreign('invoice_id')->references('id')->on('invoices')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('payslips', function(Blueprint $table) {
			$table->foreign('employe_id')->references('id')->on('employes')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_role_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_client_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_employe_id_foreign');
		});
		Schema::table('clients', function(Blueprint $table) {
			$table->dropForeign('clients_user_id_foreign');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->dropForeign('jobs_package_id_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('events_job_id_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('events_client_id_foreign');
		});
		Schema::table('employes', function(Blueprint $table) {
			$table->dropForeign('employes_user_id_foreign');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->dropForeign('invoices_client_id_foreign');
		});
		Schema::table('event_employe', function(Blueprint $table) {
			$table->dropForeign('event_employe_event_id_foreign');
		});
		Schema::table('event_employe', function(Blueprint $table) {
			$table->dropForeign('event_employe_employe_id_foreign');
		});
		Schema::table('invoicejobs', function(Blueprint $table) {
			$table->dropForeign('invoicejobs_invoice_id_foreign');
		});
		Schema::table('payslips', function(Blueprint $table) {
			$table->dropForeign('payslips_employe_id_foreign');
		});
	}
}