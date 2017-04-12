<?php

use Illuminate\Database\Seeder;
 
class OrderlinesTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('orderlines')->delete();
 
        $orderlines = array(
            ['id' => 1, 'order_id' => 1, 'bread_id' => 1, 'spread_id' => 1, 'amount' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
             ['id' => 2, 'order_id' => 1, 'bread_id' => 2, 'spread_id' => 3, 'amount' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
             ['id' => 3, 'order_id' => 1, 'bread_id' => 2, 'spread_id' => 2, 'amount' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
             ['id' => 4, 'order_id' => 2, 'bread_id' => 3, 'spread_id' => 3, 'amount' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
             ['id' => 5, 'order_id' => 3, 'bread_id' => 3, 'spread_id' => 1, 'amount' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
             ['id' => 6, 'order_id' => 3, 'bread_id' => 2, 'spread_id' => 3, 'amount' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
          
        );
 
        // Uncomment the below to run the seeder
        DB::table('orderlines')->insert($orderlines);
    }
 
}

