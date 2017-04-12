<?php

use Illuminate\Database\Seeder;

class BreadsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('breads')->delete();

        $breads = array(
            ['id' => 1, 'name' => 'bruin brood', 'description' => 'brood dat bruin is', 'price' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'wit brood', 'description' => 'brood dat wit is', 'price' => 2.5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'gespikkeld brood', 'description' => 'brood dat een beetje raar is', 'price' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('breads')->insert($breads);
    }

}
