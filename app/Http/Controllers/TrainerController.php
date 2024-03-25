<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Freelancing;
use App\Models\CommonTrainer;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courseorder;
use App\Models\Chat;
use App\Models\Training;
use App\Models\Course;
use App\Models\AcademicForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_email = Auth::user()->email;
        $count=0;

        return view('trainer.trainer',compact('user_email','count') );
    }
   public function courseorder()
   {
     //$course = Course::all();
     $user_email = Auth::user()->email;
       $courses = Courseorder::select('*')
                        ->where('category', 'Course' )
                        ->where('student_email',  $user_email  )
                      ->  get();

     return view('trainer.allchatshow', compact('courses'));
   }
   public function courseorderedit(Courseorder $id)
    {
      $user_email = Auth::user()->email;
      $student_email=$id->student_email;
      $trainer_email=$id->trainer_email;

       $contact = Courseorder::find($id)
       ->where('id',$id->id);

       $messages=Chat::where('student_email', $student_email)
       ->where('teacher_email',$trainer_email)
       ->orderBy('id', 'DESC')
       ->get();

       return view('trainer.chat', compact('contact','messages'));

    //   $data=PrintTable:: find($machining)
      //  ->where('id',$machining->id);
//
    }

    public function chat()
    {
      return view('trainer.chat');
    }
    public function chatProcess(Request $request)
    {
      $user_email = Auth::user()->email;
        $chat=new Chat;
        $chat->message=$request->messsage;
       $chat->student_email=$user_email;
       $chat->sending_email=$user_email;
       $chat->teacher_email=$request->trainer_email;
       $chat->category=$request->category;
        $chat->course_id=$request->course_id;
        $chat->save();
         return redirect()->back();


    }

    public function profile()
    {
      $user_email = Auth::user()->email;
      $profiles=Trainer::  where('email',$user_email)
                           -> get();

                     //->  get();
                     $abc="shamim";
              return view('trainer.profile',compact('profiles','abc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user_email = Auth::user()->email;
        $trainer=new Trainer;
        $trainer->name="shamim reza";
        $trainer->email=$user_email;
      echo  $trainer->save()?"Insert Success":"Insert Fail";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_email = Auth::user()->email;
        $trainer=new Trainer;
        $trainer->name= $request->name;
        $trainer->email=$user_email;
      echo  $trainer->save()?"Insert Success":"Insert Fail";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        //
    }
    public function alltrainer()
    {
      $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
        if($data->is_admin == 1){
            $trainer= Course::select('*')
                     ->where('category','trainer')
                     ->get();
           
         return view('trainer.alltrainer',compact('trainer'));
        }
        else{
            $trainer= Course::select('*')
                        ->where('email', '=', $user_email )
                        ->where('category','trainer')
                        ->get();
         return view('trainer.alltrainer',compact('trainer'));
        }
      
      /*$trainer = Course::select('*')
                ->where('category','trainer')
                ->get();
      return view('trainer.alltrainer',compact('trainer'));*/
    }
    
    /* Common Trainer */
    
    //Add
     public function commontrainerstore(Request $request)
    {

        $ctrainer=new CommonTrainer;
        $ctrainer->name= $request->name;
        $ctrainer->email=$request->email;
        $ctrainer->phone=$request->phone;
        $ctrainer->math=$request->math;
        $ctrainer->english=$request->english;
        $ctrainer->analytical= $request->analytical;
        $ctrainer->coding= $request->coding;
        $ctrainer->educationlevel	= $request->educationlevel;
        $ctrainer->institution= $request->institution;
        $ctrainer->username=$request->username;
        $ctrainer->password=$request->password;
        
        $ctrainer->save();
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'registeras' =>'Trainer',
            'password' => Hash::make($request['password']),
           
        ]);
         return redirect()->back()->with('message', 'Trainer Registration successful!!');


    }
    
    //Freelancing registration
    public function freelancingregistrationstore(Request $request)
    {

        $freelancer=new Freelancing;
        $freelancer->name= $request->name;
        $freelancer->email=$request->email;
        $freelancer->phone=$request->phone;
        $freelancer->webdevlopment=$request->webdevlopment;
        $freelancer->webdesigning=$request->webdesigning;
        $freelancer->graphicsdesigning= $request->graphicsdesigning;
        $freelancer->others= $request->others;
        $freelancer->educationlevel	= $request->educationlevel;
        $freelancer->institution= $request->institution;
        $freelancer->username=$request->username;
        $freelancer->password=$request->password;
        
        $freelancer->save();
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'registeras' =>'Freelancer',
            'password' => Hash::make($request['password']),
           
        ]);
         return redirect()->back()->with('message', 'Frelancer Registration Success!!');


    }
    //Show
    public function allcommontrainer()
    {
        $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      ->get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
        if($data->is_admin == 1){
            $commontrainershow= CommonTrainer::get();
           
         //return view('trainer.allcommontrainer',compact('commontrainershow'));
        }
        else{
            $commontrainershow= CommonTrainer::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('trainer.allcommontrainer',compact('commontrainershow'));
        }
        
        $email = CommonTrainer::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
        
            
         echo $verifyemail;
         return view('trainer.allcommontrainer',compact('verifyemail','commontrainershow'));
        
    }
    
    //Edit and Delete
    public function commontraineredit($id)
    {
        $data=CommonTrainer::find($id);
        return view('trainer.editcommontrainer', compact('data'));
    }
    public function commontrainereditprocess(Request $request, $id)
    {
        $data=CommonTrainer::find($id);
        $data->name= $request->name;
        $data->email= $request->email;
        $data->mobile= $request->mobile;
        $data->math= $request->math;
        $data->english= $request->english;
        $data->analytical= $request->analytical;
        $data->coding= $request->coding;
        
        $data->educationlevel= $request->educationlevel;
        $data->institution= $request->institution;
        
         $data->save();
         return redirect()->to('/allcommontrainer')->with('message1', 'Common Trainer Information has been updated successly!!'); 
        
    
    }
     public function deletecommontrainer($id)
    {
        $data=CommonTrainer::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    //Career Form
    public function trainingprocess(Request $request)
    {

        $course=new Training;
        $course->career_plan= $request->career_plan;
        $course->mathematics=$request->mathematics;
        $course->english=$request->english;
        $course->analytical=$request->analytical;
        $course->others=$request->others;
        $course->name= $request->name;
        $course->address= $request->address;
        $course->education= $request->education;
        $course->institution= $request->institution;
        $course->mobile= $request->mobile;
        $course->email= $request->email;
        $course->username=$request->username;
        $course->password=$request->password;
        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();

        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('images/',$name);
      $request->image->move(public_path('images'), $name);

        // $path = $file->storeAs('public/', $originalname);


    }
     $course->image="images/".$name;
        $course->save();
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'registeras' =>'Career',
            'password' => Hash::make($request['password']),
           
        ]);
        return redirect()->to('/login')->with('message', 'Thanks for filling our Academic form, We will get back to you soon!');


    }
    
    //Academic Form
    public function academicprocess(Request $request)
    {
        $academic=new AcademicForm;
        $academic->aiminlife= $request->aiminlife;
        $academic->physics=$request->physics;
        $academic->chemistry=$request->chemistry;
        $academic->english=$request->english;
        $academic->biology=$request->biology;
        $academic->mathematics=$request->mathematics;
        $academic->hmathematics=$request->hmathematics;
        $academic->accounting=$request->accounting;
        $academic->finance=$request->finance;
        $academic->name= $request->name;
        $academic->address= $request->address;
        $academic->education= $request->education;
        $academic->institution= $request->institution;
        $academic->mobile= $request->mobile;
        $academic->email= $request->email;
        $academic->username=$request->username;
        $academic->password=$request->password;
        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();

        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('images/',$name);
      $request->image->move(public_path('images'), $name);

        // $path = $file->storeAs('public/', $originalname);


    }
     $academic->image="images/".$name;
        $academic->save();
         return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'registeras' =>'Academic',
            'password' => Hash::make($request['password']),
           
        ]);
        return redirect()->to('/login')->with('message1', 'Thanks for filling our Academic form, We will get back to you soon!');


    }
    
    public function traineredit($id)
    {
        $data=Course::find($id);
        return view('trainer.edittrainer', compact('data'));
    }
    public function trainereditprocess(Request $request, $id)
    {
        $data=Course::find($id);
        $data->title= $request->title;
        $data->description= $request->description;
        $data->benefit= $request->benefit;
        $data->difficulty= $request->difficulty;
        $data->price= $request->price;
        $data->category= $request->category;
        $data->ccategory= $request->ccategory;
        /**$data->category= "Student" ;
        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();

        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('images/',$name);
            $request->image->move(public_path('images'), $name);
      
        // $path = $file->storeAs('public/', $originalname);


    }
     $data->image="images/".$name; */
        
         $data->save();
         return redirect()->to('/alltrainer')->with('message1', 'Trainer Information has been updated successly!!'); 
        
    
    }
     public function deletetrainer($id)
    {
        $data=course::find($id);
        $data->delete();
        return redirect()->back();
    }
}
