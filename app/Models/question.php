<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;

    protected $table = "questions";

    protected $fillable = [
        "question",
        "questionimage",
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'correct',
        'position',
        'author',
        'quizzid',
        'quizzname'
    ];
}
