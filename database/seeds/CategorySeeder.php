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
            ['name' => 'MAYBELLINE', 'slug' => 'MAYBELLINE', 'image' => 'categories/maybelline.jpg', 'status' => 'PUBLISH'],
            ['name' => 'AVOSKIN', 'slug' => 'AVOSKIN', 'image' => 'categories/avoskin.jpg', 'status' => 'PUBLISH'],
            ['name' => 'CARASUN', 'slug' => 'CARASUN', 'image' => 'categories/carasun.jpg', 'status' => 'PUBLISH'],
            ['name' => 'COSRX', 'slug' => 'COSRX', 'image' => 'categories/cosrx.jpg', 'status' => 'PUBLISH'],
            ['name' => 'ESQA', 'slug' => 'ESQA', 'image' => 'categories/esqa.jpg', 'status' => 'PUBLISH'],
            ['name' => 'SCARLET', 'slug' => 'SCARLET', 'image' => 'categories/scarlett.jpg', 'status' => 'PUBLISH']
        ];
        DB::table('categories')->insert($cat);
    }
}
