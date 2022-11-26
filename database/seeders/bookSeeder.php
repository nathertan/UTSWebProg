<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->insert([
            'publisher_id' => '1',
            'title' => 'Romance in Binus',
            'author' => 'Garmedai',
            'year' => '2021',
            'synopsis' => 'A book about romance',
            'image' => 'romance.png',
        ]);
    }
}
