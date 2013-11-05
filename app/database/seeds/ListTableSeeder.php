<?php

class ListTableSeeder extends Seeder {
 
    public function run()
    {
    	DB::table('lists')->delete();
    	
        $lists = [
            ['name' => 'Amigos', 'user_id' => 1],
            ['name' => 'Compañeros', 'user_id' => 1],
            ['name' => 'Familia', 'user_id' => 1],
        ];
 
        DB::table('lists')->insert($lists);
    }
 
}