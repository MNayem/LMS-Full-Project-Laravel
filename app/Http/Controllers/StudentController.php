<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Inquiry;
use App\Models\Abroad;
use App\Models\User;
use App\Models\Admission;
use App\Models\Training;
use App\Models\AcademicForm;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function studentregistration()
    {
        $student = Student::select('*')
                        ->where('category', 'student' )
                      ->  get();


     return view('common.student',compact('student'));
    }
    public function studentregistrationprocess(Request $request)
    {
        $user_email = Auth::user()->email;
        $student=new Student;
        $student->name= $request->name;
        $student->email= $request->email;
        $student->number= $request->number;
        $student->address= $request->address;
        $student->purpose= $request->purpose;
        $student->institution= $request->institution;
        $student->category= "Student" ;
        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();

        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('images/',$name);
            $request->image->move(public_path('images'), $name);
      
        // $path = $file->storeAs('public/', $originalname);


    }
     $student->image="images/".$name;
    echo    $student->save()?"insert success":"insert fail";
}
public function allstudent()
    {
            
        
      $student= Student::get();
      return view('student.allstudent',compact('student'));
    }
public function studentedit($id)
    {
        $data=Student::find($id);
        return view('student.editstudent', compact('data'));
    }
    public function studenteditprocess(Request $request, $id)
    {
        $data=Student::find($id);
        $data->name= $request->name;
        $data->email= $request->email;
        $data->number= $request->number;
        $data->address= $request->address;
        $data->purpose= $request->purpose;
        $data->institution= $request->institution;
        $data->selection= $request->selection;
        
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
        
        echo    $data->save()?"update success":"update fail";
        
    
    }
    
/* Student Admission Section */
public function studentadmission()
    {
        $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $admission= Admission::get();
           
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        else{
            $admission= Admission::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        $email = Admission::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.studentadmission',compact('verifyemail','admission'));
        
        /*$admission = Admission::get();

        return view('student.studentadmission',compact('admission'));*/
    }
public function studentadmissionprocess(Request $request)
    {
        $user_email = Auth::user()->email;
        $admission=new Admission;
        $admission->fname= $request->fname;
        $admission->lname= $request->lname;
        $admission->email= $request->email;
        $admission->phone= $request->phone;
        $admission->dob= $request->dob;
        $admission->gender= $request->gender;
        $admission->subject= $request->subject;
        $admission->save() ;
        
        return redirect()->to('/studentadmission')->with('message', 'Congratulations! Admitted Successfully..');
}

/* Admitted Student Show */
public function alladmittedstudent()
    {
      $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $admitted= Admission::get();
           
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        else{
            $admitted= Admission::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        $email = Admission::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.alladmittedstudent',compact('verifyemail','admitted'));
    }
    
/* Edit Admitted Student */
 public function admittedstudentedit($id)
    {
        $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $data= Admission::get();
           
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        else{
            $data= Admission::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        $email = Admission::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.admittedstudentedit',compact('verifyemail','data'));
        
        /*$data=Admission::find($id);
        return view('student.admittedstudentedit', compact('data'));*/
    }
    public function admittedstudenteditprocess(Request $request, $id)
    {
        $data=Admission::find($id);
        $data->fname= $request->fname;
        $data->lname= $request->lname;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->dob= $request->dob;
        $data->gender= $request->gender;
        $data->subject= $request->subject;
        
        $data->save() ;
        
        return redirect()->to('/alladmittedstudent')->with('message1', 'Student Information has been updated Successfully!');
    
    }
    
/* Student Inquiry Section*/
    
    public function studentinquiry()
    {
        $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $inquiry= Inquiry::get();
           
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        else{
            $inquiry= Inquiry::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        $email = Inquiry::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.studentinquiry',compact('verifyemail','inquiry'));
        
        /*$inquiry = Inquiry::get();

        return view('student.studentinquiry',compact('inquiry'));*/
    }
    public function studentinquiryprocess(Request $request)
    {
        $user_email = Auth::user()->email;
        $inquiry=new Inquiry;
        $inquiry->name= $request->name;
        $inquiry->email= $request->email;
        $inquiry->number= $request->number;
        $inquiry->address= $request->address;
        $inquiry->purpose= $request->purpose;
        $inquiry->institution= $request->institution;
        $inquiry->selection= $request->selection;
        
        $inquiry->save();
        
       return redirect()->back()->with('message', 'Inquiry Student has been added successly!!');
}
public function allinquirystudent()
    {
      $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $inquiry= Inquiry::get();
           
         //return view('student.allinquirystudent',compact('inquiry'));
        }
        else{
            $inquiry= Inquiry::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.allinquirystudent',compact('inquiry'));
        }
        $email = Inquiry::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.allinquirystudent',compact('verifyemail','inquiry'));
    }
    

    public function inquirystudentedit($id)
    {
        $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $data= Inquiry::get();
           
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        else{
            $data= Inquiry::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        $email = Inquiry::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.inquirystudentedit',compact('verifyemail','data'));
        
        /*$data=Inquiry::find($id);
        return view('student.inquirystudentedit', compact('data'));*/
    }
    public function inquirystudenteditprocess(Request $request, $id)
    {
        $data=Inquiry::find($id);
        $data->name= $request->name;
        $data->email= $request->email;
        $data->number= $request->number;
        $data->address= $request->address;
        $data->purpose= $request->purpose;
        $data->institution= $request->institution;
        $data->selection= $request->selection;
        
        $data->save();
        
        return redirect()->to('/allinquirystudent')->with('message1', 'Inquiry Student Information has been updated Successfully!');
    }
    
    /* Study Abroad Student Section */
    /* Registration */
    public function studyabroadinquiry()
    {
         $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $abroad= Abroad::get();
           
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        else{
            $abroad= Abroad::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        $email = Abroad::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.studyabroadinquiry',compact('verifyemail','abroad'));
         
         /*$abroad = Abroad::get();

         return view('student.studyabroadinquiry',compact('abroad'));*/
    }
    public function studyabroadinquiryprocess(Request $request)
    {
        $user_email = Auth::user()->email;
        $abroad=new Abroad;
        $abroad->name= $request->name;
        $abroad->email= $request->email;
        $abroad->mobile= $request->mobile;
        $abroad->destination= $request->destination;
        $abroad->plan= $request->plan;
        $abroad->location= $request->location;
        $abroad->level= $request->level;
        
        $abroad->save();
        
         return redirect()->back()->with('message', 'Abroad Inquiry Student has been added successly!!');
}
/* Show Study Abroad Inquiry Student */
public function allabroadinquirystudent()
    {
      $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $abroad= Abroad::get();
           
         //return view('student.allabroadinquirystudent',compact('abroad'));
        }
        else{
            $abroad= Abroad::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.allabroadinquirystudent',compact('abroad'));
        }
        $email = Abroad::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.allabroadinquirystudent',compact('verifyemail','abroad'));
    }   
    
     /* Edit Study Abroad Inquiry Student */
public function studyabroadinquirystudentedit($id)
    {
         $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $data= Abroad::get();
           
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        else{
            $data= Abroad::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.alladmittedstudent',compact('admitted'));
        }
        $email = Abroad::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.studyabroadinquirystudentedit',compact('verifyemail','data'));
        
        
        /*$data=Abroad::find($id);
        return view('student.studyabroadinquirystudentedit', compact('data'));*/
    }
public function studyabroadinquirystudenteditprocess(Request $request, $id)
    {
        $data=Abroad::find($id);
        $data->name= $request->name;
        $data->email= $request->email;
        $data->mobile= $request->mobile;
        $data->destination= $request->destination;
        $data->plan= $request->plan;
        $data->location= $request->location;
        $data->level= $request->level;
        
        $data->save();
        
         return redirect()->to('/allabroadinquirystudent')->with('message1', 'Abroad Inquiry Student Information has been updated Successfully!');
    }
    
    /* Show the Students who fill the Career Form */
    public function studentwhofillupcareerform()
    {
        $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $studentwhofillupcareerform= Training::get();
           
         //return view('student.studentwhofillupcareerform',compact('studentwhofillupcareerform'));
        }
        else{
            $studentwhofillupcareerform= Training::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.studentwhofillupcareerform',compact('studentwhofillupcareerform'));
        }
      
       $email = Training::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.studentwhofillupcareerform',compact('verifyemail','studentwhofillupcareerform'));  
        
    }
    
    /* Delete  the Students who fill the Career Form*/
    public function deletestudentwhofillcareerform($id)
    {
        $data=Training::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Student has been deleted successly!!');;
    }
    
     /* Show the Students who fill the Academic Form */
    public function studentwhofillupacademicform()
    {
      $user_email = Auth::user()->email;
        $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
         if($data->is_admin == 1){
            $studentwhofillupacademicform= AcademicForm::get();
           
         //return view('student.studentwhofilltheacademicform',compact('studentwhofillupacademicform'));
        }
        else{
            $studentwhofillupacademicform= AcademicForm::select('*')
                        ->where('email', '=', $user_email )
                        ->  get();
         //return view('student.studentwhofilltheacademicform',compact('studentwhofillupacademicform'));
        }
        $email = AcademicForm::get();
        
        $verifyemail = 0;
            foreach ($email as $data) {
            //echo $data->email . "</br>";
        
            if($data->email == $user_email){
            $verifyemail = 1;
        }
    }
         echo $verifyemail;
         return view('student.studentwhofilltheacademicform',compact('verifyemail','studentwhofillupacademicform'));
    }
    
    /* Delete  the Students who fill the Academic Form*/
    public function deletestudentwhofillacademicform($id)
    {
        $data=AcademicForm::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Student has been deleted successly!!');;
    }
    
    /*Delete Admitted Student */
    public function admittedstudentdelete($id)
    {
        $data=admission::find($id);
        $data->delete();
        return redirect()->back();
    }
     
    /*Delete Student */
    public function deletestudent($id)
    {
        $data=student::find($id);
        $data->delete();
        return redirect()->back();
    }
    
     /*Delete Inquiry Student */
    public function deleteinquirystudent($id)
    {
        $data=Inquiry::find($id);
        $data->delete();
        return redirect()->back();
    }
     /*Delete Study Abroad Inquiry Student */
     public function deletestudyabroadinquirystudent($id)
    {
        $data=Abroad::find($id);
        $data->delete();
        return redirect()->back();
    }
}
