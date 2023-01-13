<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        question::create([
            "question" => 'რამდენი თვი აქვს ადამიანს',
            "questionimage" => 'https://www.shutterstock.com/image-vector/outline-human-head-vector-260nw-1403007752.jpg',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => 'არ აქვს თავი',
            'correct' => '1',
            'position' => '1',
            'author' => 'irakli samushia',
            'quizzid' => 1,
            'quizzname' => 'biology'
        ]);
        question::create([
            "question" => 'რამდენი ხელი',
            "questionimage" => 'https://cdn.mos.cms.futurecdn.net/mhJ2yWNwMtNcmijZqVEDDW.jpg',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => 'არ აქვს თავი',
            'correct' => '1',
            'position' => '2',
            'author' => 'irakli samushia',
            'quizzid' => 1,
            'quizzname' => 'biology'
        ]);
    }
}
