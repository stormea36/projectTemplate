<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{


			$table->tinyInteger('userType')->default(0);
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->boolean('admin')->default(0);
			$table->string('phone')->nullable();
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('registered');
			$table->dropColumn('phone');
			$table->dropColumn('city');
			$table->dropColumn('state');
			$table->dropColumn('admin');
		});
	}

}

