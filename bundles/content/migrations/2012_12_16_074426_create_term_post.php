<?php

class Content_Create_Term_Post {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('terms_post', function($table)
		{
			$table->create();
			$table->int('terms_id');
			$table->bigint('post_id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('terms_post', function($table)
		{
			$table->drop();
		});
	}

}