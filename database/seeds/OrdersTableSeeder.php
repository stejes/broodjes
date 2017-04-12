<?php

use Illuminate\Database\Seeder;
 
class OrdersTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('orders')->delete();
 
        $orders = array(
            ['id' => 1, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('orders')->insert($orders);
    }
 
}

