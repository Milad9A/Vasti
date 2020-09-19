<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishingHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishing_houses')->insert([
            'name' => 'Penguin Random House',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Hachette Livre',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'HarperCollins',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Macmillan Publishers',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Simon & Schuster',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'McGraw-Hill Education',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Houghton Mifflin Harcourt',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Pearson Education',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Scholastic',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Cengage Learning',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'pringer Nature',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Wiley (John Wiley & Sons)',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Oxford University Press',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Kodansha',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Shueisha',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Grupo Santillana',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Bonnier Books',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Editis',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Klett',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('publishing_houses')->insert([
            'name' => 'Egmont Books',
            'country' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
