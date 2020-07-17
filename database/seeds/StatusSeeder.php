<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
           'name' => 'Just Added',
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
           'name' => 'Currently Reading',
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
           'name' => 'Completed',
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
           'name' => 'Plan to Read',
           'created_at' => now(),
           'updated_at' => now()
        ]);
    }
}
