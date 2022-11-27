<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id' => '1',
            'title' => 'Charlotte',
            'author' => 'Jun Maeda',
            'year' => '2019',
            'synopsis' => 'Charlotte is a Japanese light novel series written by Jun Maeda and illustrated by Kurone Mishima. The series was published by ASCII Media Works under their Dengeki Bunko imprint.',
            'image' => 'charlotte.webp',
        ]);
        DB::table('books')->insert([
            'publisher_id' => '3',
            'title' => 'Naruto',
            'author' => 'Masashi Kishimoto',
            'year' => '2006',
            'synopsis' => 'Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.',
            'image' => 'naruto.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => '2',
            'title' => 'Jujutsu Kaisen',
            'author' => 'Gege Akutami',
            'year' => '2018',
            'synopsis' => 'Jujutsu Kaisen is a Japanese manga series written and illustrated by Gege Akutami. It tells the story of Yuuji Itadori, a high school student who becomes involved in a battle between the Jujutsu Sorcerers and the Curses.',
            'image' => 'jujutsu.webp',
        ]);
        DB::table('books')->insert([
            'publisher_id' => '1',
            'title' => 'The Promised Neverland',
            'author' => 'Kaiu Shirai',
            'year' => '2016',
            'synopsis' => 'The Promised Neverland is a Japanese manga series written and illustrated by Kaiu Shirai and illustrated by Posuka Demizu. It tells the story of Emma, Norman, and Ray, three orphans who live at Grace Field House, a seemingly idyllic orphanage.',
            'image' => 'promised.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => '4',
            'title' => 'One Piece',
            'author' => 'Eiichiro Oda',
            'year' => '1997',
            'synopsis' => 'One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. It has been serialized in Shueisha\'s Weekly Shōnen Jump magazine since July 22, 1997, and has been collected into 99 tankōbon volumes.',
            'image' => 'onepiece.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => '2',
            'title' => 'Nisekoi',
            'author' => 'Naoshi Komi',
            'year' => '2011',
            'synopsis' => 'Nisekoi is a Japanese manga series written and illustrated by Naoshi Komi. It has been serialized in Shueisha\'s Weekly Shōnen Jump magazine since February 4, 2011, and has been collected into 26 tankōbon volumes.',
            'image' => 'nisekoi.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => '1',
            'title' => 'Spy X Family',
            'author' => 'Tatsuya Endo',
            'year' => '2019',
            'synopsis' => 'Spy X Family is a Japanese manga series written and illustrated by Tatsuya Endo. It has been serialized in Shueisha\'s Weekly Shōnen Jump magazine since May 6, 2019, and has been collected into three tankōbon volumes.',
            'image' => 'spy.jpg',
        ]);
    }
}
