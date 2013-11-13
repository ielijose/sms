<?php

class ListTableSeeder extends Seeder {
 
    public function run()
    {
    	DB::table('lists')->delete();
    	
        $lists = [
            ['id' => 1, 'name' => 'Amigos', 'user_id' => 1],
            ['id' => 2, 'name' => 'Compañeros', 'user_id' => 1],
            ['id' => 3, 'name' => 'Familia', 'user_id' => 1],
        ];
 
        DB::table('lists')->insert($lists);
    }
 
}