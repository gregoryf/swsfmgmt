<?php

class Add_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'username' => 'mhoppus',
			'email' => 'gregorynfisher@gmail.com',
			'password' => 'mhoppus',
			'is_admin' => '1',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
			));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('username', '=', 'mhoppus')->delete();
	}

}