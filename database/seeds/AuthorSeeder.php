<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'Zi Sun',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Arthur Conan Doyle',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Jane Austen',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Dale Carnegie',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Frances Hodgson Burnett',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Lewis Carroll',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Andrew Lang',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Jules Verne',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'H. P. Lovecraft',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Mark Twain',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Thomas Malory',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Jeppe Aakjær',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Karl Marx',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Victor Hugo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Sir Malory Thomas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Alexandre Dumas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Sir Richard Francis Burton',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('authors')->insert([
            'name' => 'Tamara Leigh',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
