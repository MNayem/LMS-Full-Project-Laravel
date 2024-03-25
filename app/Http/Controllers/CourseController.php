<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Courseorder;
use App\Models\Content;
use App\Models\Chapter;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$course = Course::all();
      $user_email = Auth::user()->email;
        $course = Course::select('*')
                         ->where('category', 'Course' )
                         ->orderBy('id', 'DESC')
                         ->get();

      return view('course.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $user_email = Auth::user()->email;
      $course=new Courseorder;
      $course->student_email= $user_email;
      $course->trainer_email= $request->trainer_email;
     $course->course_id= $request->course_id;
       $course->payment_status="pending";

      $course->amount= $request->amount;
      $course->category=  "Course";

      $files=$request->file('image');
      $name=$request->file('image')->getClientOriginalName();

      if($request->hasFile('image')) {
        $name=$request->file('image')->getClientOriginalName();
    $request->file('image')->storeAs('images/',$name);

      // $path = $file->storeAs('public/', $originalname);


  }
   $course->image="images/".$name;

  echo    $course->save()?"insert success":"insert fail";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_email = Auth::user()->email;
        $course=new Course;
        $course->email= $user_email;
        $course->title= $request->title;
        $course->description= $request->description;
        $course->benefit= $request->benefit;
        $course->difficulty= $request->difficulty;
        $course->price= $request->price;
        $course->category= "Course" ;
        $course->ccategory= $request->ccategory ;
        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();

        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('public/images/',$name);
      $request->image->move(public_path('images'), $name);
      
        // $path = $file->storeAs('public/', $originalname);


    }
     $course->image="images/".$name;
     $course->save();
     return redirect()->back()->with('message', 'Course has been added successly!!');


    }
    
    
     public function trainerregistration()
    {
        $trainer = Course::select('*')
                   ->where('category', 'trainer' )
                   ->orderBy('id', 'DESC')
                   ->get();


     return view('common.trainers2',compact('trainer'));
    }
    public function trainerregistrationprocess(Request $request)
    {
        $user_email = Auth::user()->email;
        $trainer=new Course;
        $trainer->email= $user_email;
        $trainer->title= $request->title;
        $trainer->description= $request->description;
        $trainer->benefit= $request->benefit;
        $trainer->difficulty= $request->difficulty;
        $trainer->price= $request->price;
        $trainer->category= "Trainer" ;
        $trainer->ccategory= $request->ccategory ;
        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();

        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('images/',$name);
      $request->image->move(public_path('images'), $name);
      
        // $path = $file->storeAs('public/', $originalname);


    }
     $trainer->image="images/".$name;
     $trainer->save();
     return redirect()->back()->with('message', 'Trainer has been added successly!!');
}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return view('course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course  $course)
    {

      $course = Course::find($course);
      return view('course.edit', compact('course'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2 (Request $request )
    {

      $course=new Content;

      $course->course_id= $request->course_id;
      $course->content_name= $request->content_name;
      $course->chapter=  "chapter 1";
      $course->video=  "abc.mp4";

  echo    $course->save()?"insert success":"insert fail";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function yourcourse()
    {

      //   $users=new User;
      $user_email = Auth::user()->email;
        $course = Course::select('*')
                        ->where('email',$user_email)
                        ->where('category', 'Course' )
                       ->  get();

      return view('course.index', compact('course'));

    }

    public function courseedit($id)
    {
        $data=Course::find($id);
        return view('course.editcourse', compact('data'));
    }
    public function courseeditprocess(Request $request, $id)
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
     return redirect()->to('/course')->with('message1', 'Course Information has been updated successly!!'); 
        
    
    }
    
    /* Course Content Add */
public function addcontent()
    {
        $content = Content::get();


     return view('course.addcontent',compact('content'));
    }
public function addcontentprocess(Request $request)
    {
        $user_email = Auth::user()->email;
        $content=new Content;
        $content->course_id= $request->course_id;
        $content->chapter_id= $request->course_id;
        $content->content_name= $request->content_name;
        $content->description= $request->description;
        $content->chapter= $request->chapter;
        $content->status= $request->status;
        
        $content->save();
        return redirect()->back()->with('message', 'Content has been added successly!!');
}

/* Course Chapter Add */
public function chapteradd()
    {
        $chapter = Chapter::get();


     return view('course.chapteradd',compact('chapter'));
    }
public function chapteraddprocess(Request $request)
    {
        $user_email = Auth::user()->email;
        $chapter=new Chapter;
        $chapter->course_id= $request->course_id;
        $chapter->name= $request->name;
        $chapter->description= $request->description;
        
        $chapter->save();
        return redirect()->back()->with('message', 'Chapter has been added successly!!');
}

/* Content Video Add */
public function addvideo()
    {
         /*$video=Content::find($id)
         ->get();*/
         $chaptername = Chapter::get();

     return view('course.addvideo',compact('chaptername'));
    }
public function addvideoprocess(Request $request)
    {
        
        $user_email = Auth::user()->email;
        $video=new Content;
        $video->video= $request->video;
        $video->content_name= $request->name;
        $video->chapter_id=6;
        
        echo $video->save()?"insert success":"insert fail";
        
}


/* Course Chapter Show */
public function chaptershow()
    {
      $chapter= Chapter::get();
      return view('course.chaptershowall',compact('chapter'));
    }
    
/* Chapter Edit */
public function chapteredit($id)
    {
        $data=Chapter::find($id);
        return view('course.chapteredit', compact('data'));
    }
public function chapteredittprocess(Request $request, $id)
    {
        $data=Chapter::find($id);
        $data->course_id= $request->course_id;
        $data->name= $request->name;
        $data->description= $request->description;
        
        $data->save();
        return redirect()->to('/chaptershow')->with('message1', 'Course Information has been updated successly!!'); 
        
    
    }

/* Course Content Show */
public function allcontent()
    {
      $content= Content::get();
      return view('course.allcontent',compact('content'));
    }
/* Edit Course Content */
public function contentedit($id)
    {
        $data=Content::find($id);
        return view('course.editcontent', compact('data'));
    }
public function contenteditprocess(Request $request, $id)
    {
        $data=Content::find($id);
        $data->content_name= $request->content_name;
        $data->description= $request->description;
        $data->chapter= $request->chapter;
        $data->video= $request->video;
        $data->audio= $request->audio;
        $data->text= $request->text;
        $data->image= $request->image;
        $data->status= $request->status;
        
        $data->save();
        return redirect()->to('/allcontent')->with('message1', 'Course Content Information has been updated successly!!'); 
        
    
    }
    /* All Course Tiltle Show */
public function allcoursetitle()
    {
      $course=Course::select('*')
            ->where('category', 'Course' )
            ->get();
      //$course= Course::get();
      return view('course.allcoursetitle',compact('course'));
    }

/* Course Chapter Show */
 public function coursechapter($id)
    {
        $course=Course::find($id);
        $chapter=Chapter::where ('course_id',$course->id)
          ->get();
        
        return view('course.chaptershow',compact('course','chapter'));  
    }
    
/*All Course Content Show */
public function chaptercontent($id)
    {
        $chapter=Chapter::find($id);
        $content=Content::where ('course_id',$chapter->course_id)
          ->get();
        
        return view('course.chaptercontentshow',compact('chapter','content'));  
    }

/* Chapter Content Resource Add Option */
public function contentresourceadd($id)
    {
        $content=Content::find($id)
        ->get();
        /* $content=Content::where ('course_id',$chapter->id)
          ->get();*/
        
        return view('course.contentresourceadd',compact('content'));  
    }
/* Course Dertails */
    public function coursedetails()
    {
        return view('course.coursedetails');
    }
    
    /* Academic Dertails */
    public function academicsection()
    {
        return view('course.academicdetails');
    }
    
     /* Career Dertails */
    public function careersection()
    {
        return view('course.careerdetails');
    }
    
     /* Abroad study Dertails */
    public function abroadstudysection()
    {
        return view('course.abroadstudydetails');
    }
    
    /* Mathsample Details */
    public function mathsample()
    {
        return view('course.mathsample');
    }
    
     /* Mathsample Test Details */
    public function sampletestmath()
    {
        return view('course.sampletestmath');
    }
    
    /* English sample Dertails */
    public function englishsample()
    {
        return view('course.englishsample');
    }
    
    /* Englishsample Test Details */
    public function sampletestenglish()
    {
        return view('course.sampletestenglish');
    }
    
     /* Analytical sample Details */
    public function analyticalsample()
    {
        return view('course.analyticalsample');
    }
    
    /* Englishsample Test Details */
    public function sampletestanalytical()
    {
        return view('course.sampletestanalytical');
    }
    
    /* Delete Section */
/* Delete Course Content */
    public function deletecontentt($id)
    {
        $data=content::find($id);
        $data->delete();
        return redirect()->back();
    }

     public function deletecourse($id)
    {
        $data=course::find($id);
        $data->delete();
        return redirect()->back();
    }
public function chapterdelete($id)
    {
        $data=chapter::find($id);
        $data->delete();
        return redirect()->back();
    }
}
