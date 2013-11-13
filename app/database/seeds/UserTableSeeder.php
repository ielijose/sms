<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'id' => 1,
			'email'     => 'ielijose@gmail.com',
			'full_name' => 'Eli Jose Carrasquero',
			'password' => Hash::make('1234'),
		));
		User::create(array(
			'id' => 2,
			'email'     => 'pablo@gmail.com',
			'full_name' => 'Pablo Miguel Huerta',
			'password' => Hash::make('1234'),
		));
	}

}
