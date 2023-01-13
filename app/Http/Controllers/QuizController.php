<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\quiz;

use App\Models\question;

use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function showQuizzes()
    {
        $user = Auth::user();
        $quizzes = quiz::select()->orderby('created_at')->get();
        $questions = question::where('quizzid', '=', 1)->count();
        return view('welcome', ['quizzes'=> $quizzes, 'questions' => $questions]);
    }

    public function takeQuizz(Quiz $quiz, Request $request)

    {   
        $r = $request->quiz;      
        $questions = question::where('quizzid', '=', $quiz->userid)->get();
        return view('takequizz', ['quiz'=> $quiz, 'questions'=> $questions, 'r'=>$r]);
    }
    
    public function deletequizz(Request $request){
        if ($request->input('delete') != ""){
            quiz::where('quizname', '=', $request->input('delete'))->delete();
        } 
        return $this->showQuizzes();
   }

}

