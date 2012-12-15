<?php

class Content_Create_Table_Post {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('post', function($table)
		{
			$table->create();
			$table->bigint('id', true);
			$table->varchar('title');
			$table->varchar('slug')->unique();
			$table->text('content');
			$table->varchar('status', 20);
			$table->varchar('comment', 20);
			$table->int('user_id');
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post', function($table)
		{
			$table->drop();
		});
	}

}