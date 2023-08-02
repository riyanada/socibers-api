<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $cat = [
            ['id' => 1, 'name' => 'MAYBELLINE', 'slug' => 'MAYBELLINE', 'image' => 'categories/maybelline.jpg', 'status' => 'PUBLISH', 'created_at' => date("Y-m-d H:i:s")],
            ['id' => 2, 'name' => 'AVOSKIN', 'slug' => 'AVOSKIN', 'image' => 'categories/avoskin.jpg', 'status' => 'PUBLISH', 'created_at' => date("Y-m-d H:i:s")],
            ['id' => 3, 'name' => 'CARASUN', 'slug' => 'CARASUN', 'image' => 'categories/carasun.jpg', 'status' => 'PUBLISH', 'created_at' => date("Y-m-d H:i:s")],
            ['id' => 4, 'name' => 'COSRX', 'slug' => 'COSRX', 'image' => 'categories/cosrx.jpg', 'status' => 'PUBLISH', 'created_at' => date("Y-m-d H:i:s")],
            ['id' => 5, 'name' => 'ESQA', 'slug' => 'ESQA', 'image' => 'categories/esqa.jpg', 'status' => 'PUBLISH', 'created_at' => date("Y-m-d H:i:s")],
            ['id' => 6, 'name' => 'SCARLET', 'slug' => 'SCARLET', 'image' => 'categories/scarlett.jpg', 'status' => 'PUBLISH', 'created_at' => date("Y-m-d H:i:s")]
        ];
        DB::table('categories')->insert($cat);
    }
}