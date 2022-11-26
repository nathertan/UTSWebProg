<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Romance',
        ]);

        DB::table('category')->insert([
            'name' => 'Action',
        ]);

        DB::table('category')->insert([
            'name' => 'Comedy',
        ]);

        DB::table('category')->insert([
            'name' => 'Adventure',
        ]);
        
        DB::table('category')->insert([
            'name' => 'Fiction',
        ]);

        DB::table('category')->insert([
            'name' => 'Magic',
        ]);

        DB::table('category')->insert([
            'name' => 'Fantasy',
        ]);
        
    }
}
