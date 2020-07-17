<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Art',
            'image' => '/img/Categories/Art.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Biographies',
            'image' => '/img/Categories/Biographies.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Children',
            'image' => '/img/Categories/Children.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Cooking',
            'image' => '/img/Categories/Cooking.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Economics',
            'image' => '/img/Categories/Economics.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Fantasy',
            'image' => '/img/Categories/Fantasy.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Health',
            'image' => '/img/Categories/Health.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'History',
            'image' => '/img/Categories/History.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Medicine',
            'image' => '/img/Categories/Medicine.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Music',
            'image' => '/img/Categories/Music.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Religion',
            'image' => '/img/Categories/Religion.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Technology',
            'image' => '/img/Categories/Technology.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
