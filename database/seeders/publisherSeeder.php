<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Garmedai',
            'address' => 'Canada',
            'phone' => '99 38234',
            'email' => 'garmedai_books@gmail.com',
            'image' => 'garmedaibooks.png',
        ]);
    }
}
