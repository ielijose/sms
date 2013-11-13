<?php

class ContactTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('contacts')->delete();
		Contact::create(array(
			'name'     => 'Eli Jose Carrasquero',
			'phone' => '04246029989',
			'list_id' => 1,
		));
		Contact::create(array(
			'name' => 'Pablo Miguel Huerta',
			'phone' => '04246029988',
			'list_id' => 1,
		));
	}

}
