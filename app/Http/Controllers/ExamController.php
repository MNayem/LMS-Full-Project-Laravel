<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examtopic;
use App\Models\Question;
use App\Models\Userdetail;

class ExamController extends Controller
{
  public function index(){

    $examtopics=Examtopic::get();
    return view('exam.index',compact('examtopics'));

   }
    public function questionadd(){

   
    return view('exam.questionadd' );

   }
   /*public function questionstore(Request $request){
     $questions=new Question;
     $exam=new Exam;
     $questions->eid=$request->eid;
     $questions->question=$request->question;
     $questions->answer1=$request->answer1;
     $questions->answer2=$request->answer2;
     $questions->answer3=$request->answer3;
     $questions->answer4=$request->answer4;
     $questions->rightanswer=$request->rightanswer;
     $questions->note=$request->note;
     $questions->hint=$request->hint;
     $question->save();
     return redirect()->back();

   }*/
   public function exam( $id){
     

      return view('exam.exam',compact('id'));
   }
   
public function examquestion()
  {
    
    $exams=Question::get();

      return view('exam.questionadd',compact('exams') );
  }
  public function examquestionprocess(Request $request)
  {
     $questions=new Question;
     //$exam=new Exam;
     $questions->exam_id=$request->exam_id;
     $questions->question=$request->question;
     $questions->option1=$request->option1;
     $questions->option2=$request->option2;
     $questions->option3=$request->option3;
     $questions->option4=$request->option4;
     $questions->answer=$request->answer;
     $questions->note=$request->note;
     $questions->hints=$request->hints;
     $questions->save();
     return redirect()->back()->with('message', 'Question has been added successly!!');
    
  }
  
  public function examquestiontopic()
  {
    
    $examtopics=Examtopic::get();

      return view('exam.examtopics',compact('examtopics') );
  }
  public function examquestiontopicprocess(Request $request)
  {
     
    $examtopics=new Examtopic;
    $examtopics->topics_name=$request->topics_name;
    $examtopics->total_question=$request->total_question;
    $examtopics->total_marks=$request->total_marks;
    $examtopics->save();
    echo "Insert Success!";
    return redirect()->back();
  }
  
  public function userdetails()
  {
    
    $userdetails=Userdetail::get();

      return view('chat.userdetails',compact('userdetails') );
  }
  public function userdetailsprocess(Request $request)
  {
     
    $userdetails=new Userdetail;
    $userdetails->id=$request->id;
    $userdetails->email=$request->email;
    $userdetails->Math_Basic=$request->Math_Basic;
    $userdetails->Math_Intermediate=$request->Math_Intermediate;
    $userdetails->Math_Advance=$request->Math_Advance;
    $userdetails->English_Basic=$request->English_Basic;
    $userdetails->English_Intermediate=$request->English_Intermediate;
    $userdetails->English_Advance=$request->English_Advance;
    $userdetails->Analytical_Basic=$request->Analytical_Basic;
    $userdetails->Analytical_Intermediate=$request->Analytical_Intermediate;
    $userdetails->Analytical_Advance=$request->Analytical_Advance;
    $userdetails->save();
    echo "Insert Success!";
    return redirect()->back();
  }
}
