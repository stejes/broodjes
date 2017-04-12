<?php

use Illuminate\Database\Seeder;
 
class SpreadsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('spreads')->delete();
 
        $spreads = array(
            ['id' => 1, 'name' => 'kaas', 'description'=>'gele plakken', 'price' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'americain', 'description'=>'voor als de kaas weer uitverkocht is', 'price' => 1.2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'smos', 'description'=>'beke vanalles', 'price' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('spreads')->insert($spreads);
    }
 
}

