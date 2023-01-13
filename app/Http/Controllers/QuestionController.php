<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\question;

    use Illuminate\Support\Facades\Auth;

use App\Models\quiz;

class QuestionController extends Controller
{
    
    public function addquestion(Request $request)
    {
        $user = Auth::user();

        if ($request->has('form2')) {
            question::create([
                "question" => $request->input('question'),
                "questionimage" => $request->input('questionimage'),
                'answer1' => $request->input('answer1'),
                'answer2' => $request->input('answer2'),
                'answer3' => $request->input('answer3'),
                'answer4' => $request->input('answer4'),
                'correct' => $request->input('correct'),
                'position' => $request->input('position'),
                'author' => $user->name,
                'quizzid' => $user->id,
                'quizzname'=> $request->input('quizzname')
            ]);
        }
        else {
            quiz::create([
                'quizname' => $request->input('quizname'),
                'author' => $user->name,
                'userid' => 1,
                'image' => $request->input('image'),
                'description' => $request->input('description')            
            ]);
        }
        
        return redirect()->route('afteradd');
    }
    public function showatuser()
    {
        if ( Auth::user()->id != 1) {
            $user = Auth::user();
            $quizzes = quiz::where('author', '=', $user->name)->get();
            
        }
        else {
            $quizzes = quiz::select()->get();        
        }
        return view('dashboard', ['quizzes'=> $quizzes]);
    }
    public function showadd(){
        return view('addquiz');
    }
    public function started(Quiz $quiz) 
    {
        $questions = question::where('quizzname', '=', $quiz->quizname)->get();
        return response()->json([
            "questions" => $questions
        ]);
    }
    public function showChange(){
        return view('changequest');
    }
    public function change(Request $request){
        $which = $request->input('which');
        $new_question = $request->input('question');
        $questionimage = $request->input('questionimage');
        $answer1 = $request->input('answer1');
        $answer2 = $request->input('answer2');
        $answer3 = $request->input('answer3');
        $answer4 = $request->input('answer4');
        $correct = $request->input('correct');
        $postition = $request->input('postition');
        $quizzname = $request->input('quizzname');
        
        $change = question::where('');
        quiestion::where('id', '=', $which)->update(['question' => $new_question]);
        quiestion::where('id', '=', $which)->update(['questionimage' => $questionimage]);
        quiestion::where('id', '=', $which)->update(['answer1' => $answer1]);
        quiestion::where('id', '=', $which)->update(['answer2' => $answer2]);
        quiestion::where('id', '=', $which)->update(['answer3' => $answer3]);
        quiestion::where('id', '=', $which)->update(['answer4' => $answer4]);
        quiestion::where('id', '=', $which)->update(['correct' => $correct]);
        quiestion::where('id', '=', $which)->update(['postition' => $postition]);
        quiestion::where('id', '=', $which)->update(['quizzname' => $quizzname]);
        return $this->showatuser();
    }
    
}
