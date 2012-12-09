<?php namespace MyDatabase\Schema;

use \Closure;

class Table extends \Laravel\Database\Schema\Table {

	/**
	 * Add an enum column to the table.
	 *
	 * @param  string	$name
	 * @param  array	$options
	 * @return Fluent
	 */
	public function enum($name, $options, $default = null)
	{
		return $this->column(__FUNCTION__, compact('name', 'options', 'default'));
	}

	/**
	 * Add a date column to the table.
	 *
	 * @param  string  $name
	 * @return Fluent
	 */
	public function date($name)
	{
		return $this->column(__FUNCTION__, compact('name'));
	}

	/**
	 * Add a date-time column to the table.
	 *
	 * @param  string  $name
	 * @return Fluent
	 */
	public function datetime($name)
	{
		return $this->column(__FUNCTION__, compact('name'));
	}

	/**
	 * Create date-time columns for creation and update timestamps.
	 *
	 * @return void
	 */
	public function timestamps()
	{
		$this->datetime('created_at');

		$this->datetime('updated_at');
	}

	/**
	 * Add a year column to the table.
	 *
	 * @param  string  $name
	 * @return Fluent
	 */
	public function year($name)
	{
		return $this->column(__FUNCTION__, compact('name'));
	}

	/**
	 * Add an auto-incrementing integer to the table.
	 *
	 * @param  string  $name
	 * @return Fluent
	 */
	public function auto($name, $type)
	{
		if (in_array($type, array('tinyint','smallint','mediumint','int','bigint'))) {
			return $this->{$type}($name, true);
		}
	}

	/**
	 * Add an tiny integer column to the table. Maximum value 255
	 *
	 * @param  string  $name
	 * @param  bool    $increment
	 * @return Fluent
	 */
	public function tinyint($name,  $increment = false, $length = 4 )
	{
		return $this->column(__FUNCTION__, compact('name', 'increment', 'length'));
	}

	/**
	 * Add an small integer column to the table. Maximum value 65.535
	 * 
	 * @param  string  $name
	 * @param  bool    $increment
	 * @return Fluent
	 */
	public function smallint($name, $increment = false,  $length = 6 )
	{
		return $this->column(__FUNCTION__, compact('name', 'increment', 'length'));
	}

	/**
	 * Add an medium integer column to the table. Maximum value 16.777.215
	 *
	 * @param  string  $name
	 * @param  bool    $increment
	 * @return Fluent
	 */
	public function mediumint($name,  $increment = false, $length = 9 )
	{
		return $this->column(__FUNCTION__, compact('name', 'increment', 'length'));
	}

	/**
	 * Add an integer column to the table. Maximum value 4.294.967.295
	 *
	 * @param  string  $name
	 * @param  bool    $increment
	 * @return Fluent
	 */
	public function int($name, $increment = false, $length = 11 )
	{
		return $this->column(__FUNCTION__, compact('name', 'increment', 'length'));
	}

	/**
	 * Add an big integer column to the table. Maximum value 18.446.744.073.709.551.615
	 *
	 * @param  string  $name
	 * @param  bool    $increment
	 * @return Fluent
	 */
	public function bigint($name, $increment = false, $length = 20 )
	{
		return $this->column(__FUNCTION__, compact('name', 'increment', 'length'));
	}

	/**
	 * Add an char column to the table. Maximum value 255
	 *
	 * @param  string  $name
	 * @param  bool    $increment
	 * @return Fluent
	 */
	public function char($name, $length = 255 )
	{
		return $this->column(__FUNCTION__, compact('name', 'length'));
	}

	/**
	 * Add an varchar column to the table. Maximum value 255
	 *
	 * @param  string  $name
	 * @param  bool    $increment
	 * @return Fluent
	 */
	public function varchar($name, $length = 255 )
	{
		return $this->column(__FUNCTION__, compact('name', 'length'));
	}
}