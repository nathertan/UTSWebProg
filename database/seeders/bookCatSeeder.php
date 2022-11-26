<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->insert([
            'book_id' => '1',
            'category_id' => '1',
        ]);
        
        DB::table('book_category')->insert([
            'book_id' => '1',
            'category_id' => '2',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '1',
            'category_id' => '5',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '1',
            'category_id' => '7',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '2',
            'category_id' => '2',
        ]);

                DB::table('book_category')->insert([
            'book_id' => '2',
            'category_id' => '3',
        ]);
        
        DB::table('book_category')->insert([
            'book_id' => '2',
            'category_id' => '4',
        ]);
        
        DB::table('book_category')->insert([
            'book_id' => '2',
            'category_id' => '5',
        ]);
        
        DB::table('book_category')->insert([
            'book_id' => '3',
            'category_id' => '2',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '3',
            'category_id' => '5',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '3',
            'category_id' => '7',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '4',
            'category_id' => '2',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '4',
            'category_id' => '4',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '4',
            'category_id' => '5',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '4',
            'category_id' => '7',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '5',
            'category_id' => '2',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '5',
            'category_id' => '3',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '5',
            'category_id' => '4',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '6',
            'category_id' => '1',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '6',
            'category_id' => '3',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '7',
            'category_id' => '1',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '7',
            'category_id' => '2',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '7',
            'category_id' => '3',
        ]);

        DB::table('book_category')->insert([
            'book_id' => '7',
            'category_id' => '7',
        ]);
    }
}
