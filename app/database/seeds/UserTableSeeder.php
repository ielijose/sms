<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'email'     => 'ielijose@gmail.com',
			'full_name' => 'Eli Jose Carrasquero',
			'password' => Hash::make('1234'),
		));
	}

}
