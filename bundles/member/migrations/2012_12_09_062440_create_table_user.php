<?php

class Member_Create_Table_User {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
			$table->create();
			$table->int('id', true);
			$table->varchar('username', 60);
			$table->varchar('password', 64);
			$table->varchar('nicename', 50)->nullable();
			$table->varchar('display_name', 50)->nullable();
			$table->varchar('email', 100)->nullable();
			$table->varchar('url', 100)->nullable();
			$table->smallint('role')->nullable();
			$table->varchar('activation_key', 64)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
			$table->drop();
		});
	}

}