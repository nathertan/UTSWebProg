<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Grademai',
            'address' => 'Canada',
            'phone' => '9938234',
            'email' => 'grademai_books@gmail.com',
            'image' => 'grademai.png',
        ]);
        DB::table('publishers')->insert([
            'name' => 'Bobo. Inc',
            'address' => 'Germany',
            'phone' => '0184585',
            'email' => 'bobo@gmail.com',
            'image' => 'bobo.png',
        ]);
        DB::table('publishers')->insert([
            'name' => 'YoMoon',
            'address' => 'Japan',
            'phone' => '8581723',
            'email' => 'contact@yomoon.com',
            'image' => 'yomoon.png',
        ]);
        DB::table('publishers')->insert([
            'name' => 'HoloVerse',
            'address' => 'America',
            'phone' => '9810959',
            'email' => 'support@holoverse.com',
            'image' => 'holoverse.png',
        ]);
    }
}
