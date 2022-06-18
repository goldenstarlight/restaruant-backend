<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'name' => 'Alchimia Chair',
            'excerpt' => 'This is the excerpt for Alchimia Chair',
            'description' => 'This is the description for Alchimia Chair',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'picture' => '/home-decor-1.jpg'
        ]);

        DB::table('items')->insert([
            'id' => 2,
            'name' => 'Master Bed',
            'excerpt' => 'This is the excerpt for Master Bed',
            'description' => 'This is the description for Master Bed',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'picture' => '/home-decor-2.jpg'
        ]);

        DB::table('items')->insert([
            'id' => 3,
            'name' => 'Fancy T-Shirt',
            'excerpt' => 'This is the excerpt for Fancy T-Shirt',
            'description' => 'This is the description for Fancy T-Shirt',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'picture' => '/jordan.jpg'
        ]);

        DB::table('item_tag')->insert([
            'item_id' => 1,
            'tag_id' => 1
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 1,
            'tag_id' => 2
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 2,
            'tag_id' => 3
        ]);

        DB::table('item_tag')->insert([
            'item_id' => 3,
            'tag_id' => 1
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 3,
            'tag_id' => 2
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 3,
            'tag_id' => 3
        ]);
    }
}
