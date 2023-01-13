<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        quiz::create([
            'quizname' => 'biology',
            'author' => 'irakli samushia',
            'image' => 'https://quizphoenix.com/wp-content/uploads/2020/10/Biology-thumbnail.png',
            'description' => 'ქვიზი შეეხება თმის ღეროებს',
            'userid' => 1
        ]);
    }
}
