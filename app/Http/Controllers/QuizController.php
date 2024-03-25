<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quizes;
use App\Models\Question;
use App\Models\Exam;
use App\Models\Singlemark;
use Illuminate\Support\Facades\Auth;
class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quizes=Quizes::orderBy('id','desc')->paginate(50);
        return view('exam.quiz.create',compact('quizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
        'quiz_name'=>'required|unique:quizes',
       ]);

       $data=$request->all();
       Quizes::create($data);
       
       return redirect()->back()->with('success','Data add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editquestion($id)
    {
        $data=question::find($id);
        return view('exam.editquestion', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editquestionprocess(Request $request, $id)
    {
        $data=question::find($id);
        $data->exam_id=$request->exam_id;
        $data->question=$request->question;
        $data->option1=$request->option1;
        $data->option2=$request->option2;
        $data->option3=$request->option3;
        $data->option4=$request->option4;
        $data->answer=$request->answer;
        
        $data->save();
        
         return redirect()->to('/examquestion')->with('message1', 'Question has been updated Successfully!');
        
        /*$exams=Question::get();

        return view('exam.questionadd',compact('exams') );*/
    }
    
     public function editexamtopic($id)
    {
        $data=Quizes::find($id);
        return view('exam.editexamtopic', compact('data'));
    }
    public function editexamtopicprocess(Request $request, $id)
    {
        $data=quizes::find($id);
        $data->quiz_name=$request->quiz_name;
        $data->description=$request->description;
        $data->quiz_date=$request->quiz_date;
        $data->quiz_time=$request->quiz_time;
        $data->number_of_question=$request->number_of_question;
        
        $data->save();
        return redirect()->to('/showquizes')->with('message1', 'Question has been updated Successfully!');
        
        /**$quizes=Quizes::get();

        return view('exam.quiz.create',compact('quizes') );*/
    }
    public function giveexam($id)
    {
        $data=Quizes::find($id);
        $quizes=Question::where ('exam_id',$data->id)
          ->skip(0)->take(1)->get();
        $exams = new Exam;
        $exams->examtopics_id=$data->id;
        $exams->save();
        //echo $quizes;
        
        return view('exam.giveexam',compact('quizes','exams','data'));  
    }
    public function giveexamprocess(Request $request)
    {
     
     $singlemarks = new Singlemark;
     $singlemarks->question_id=$request->question_id;
     $singlemarks->exam_id=$request->exam_id;
     $singlemarks->exams_id=$request->exams_id;
     $singlemarks->user_id=2;
     $answer=Question::where('id', $singlemarks->question_id)
     ->first() ;
     if($answer->answer==$request->option){
         $singlemarks->marks=1;
     }else{
         $singlemarks->marks=0;
     }
     
     
     $singlemarks->save();
     
     //echo $singlemarks->question_id;
        $quizes1 =$singlemarks->exam_id;
        $exams=$singlemarks->exams_id;
        $data=$singlemarks->question_id;
        $quizes=Question::where ('exam_id',$quizes1)
        ->where('id','>', $data )
          ->skip(0)->take(1)->get();
        
        
        $examtopic = Quizes::select('*')
                    ->where('id', $quizes1)
                    ->get();
        
        $totalques = Question::select('exam_id')
                    ->where('exam_id', $quizes1)
                    ->get();
         /*$total_ques = count($totalques);*/
        
        $rightans = Singlemark::select('marks')
                    ->where('exams_id', $exams)
                    ->where('marks', 1)
                    ->get();
                    
        $wrongans = Singlemark::select('marks')
                    ->where('exams_id', $exams)
                    ->where('marks', 0)
                    ->get();
         
        $result = Singlemark:: selectRaw('sum(marks)')
                         ->where('exams_id', $exams )
                         ->where('marks', 1)
                         ->get();
                        
       return view('exam.continueexam',compact('quizes1','exams','data','quizes','result','totalques','examtopic','rightans','wrongans')); 
    //return view('exam.result');
    
    }

    public function giveexamfromfront()
    {
      $data= Quizes::get();
      return view('exam.giveexamfromfront',compact('data'));
    }   
    /**public function status($id)
    {
        $data=Quizes::find($id);
        if($data->status=="1"){
            $data->status=0;
        }else{
        $data->status=1;
        }
        $data->save();

    }*/
    /* Show all Quizes */
    public function showquizes()
    {
      $data= Quizes::get();
      return view('exam.allquiz',compact('data'));
    }   
    public function AddQuestion($id)
    {
        $quiz=Quizes::all();
        $quizId=Quizes::find($id);
        return view('exam.question.add_question',compact('quiz','quizId'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletequestion($id)
    {
        $data=question::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deleteexamtopic($id)
    {
        $data=quizes::find($id);
        $data->delete();
        return redirect()->back();
    }
}
