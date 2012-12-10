<?php

class Content_Create_Term {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('terms', function($table)
		{
			$table->create();
			$table->int('id', true);
			$table->varchar('name','200')->unique();
			$table->text('description')->nullable();
			$table->varchar('slug')->unique();
			$table->varchar('type','200');
			$table->int('parent')->default('0');
			$table->int('count')->default('0');
			$table->timestamps();
		});

		DB::table('terms')->insert(array(
			'name'		=> 'Uncategorized',
			'slug'		=> 'uncategorized',
			'type'		=> 'category',
			'count'		=> '0',
			'parent'	=> '0',
			'created_at'	=> date('Y-m-d H:i:s'),
			'updated_at'	=> date('Y-m-d H:i:s')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('terms', function($table)
		{
			$table->drop();
		});
	}

}