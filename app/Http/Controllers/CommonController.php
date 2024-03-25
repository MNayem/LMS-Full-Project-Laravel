<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CommonController extends Controller
{
     public function index(){
       $course = Course::select('*')
                        ->where('category', 'Course' )
                      ->  get();
     $trainer = Course::select('*')
                        ->where('category', 'Trainer' )
                      ->  get();
     return view('welcome', compact('course','trainer'));
     }

     public function contact(){


     return view('common.contact' );
     }

     public function about(){


     return view('common.about' );
     }
     
     public function trainerRegistration(){
     return view('common.trainerRegistration' );
     }
     public function trainerTeacher(){
     return view('common.trainerTeacher' );
     }
     public function english(){
     return view('common.english' );
     }
     public function fillGap(){
     return view('common.fillGap' );
     }
     public function peopleAndRelationship(){
     return view('common.peopleAndRelationship' );
     }
     public function englishPractice(){
     return view('common.englishPractice' );
     }
     public function addmission(){
     return view('common.addmission' );
     }
     public function hsc(){
     return view('common.hsc' );
     }
     public function freelancing(){
     return view('common.freelancing' );
     }
     public function freelancingRegistration(){
     return view('common.freelancingRegistration' );
     }
     public function details(){
     return view('common.details' );
     }

     public function trainers(){
         $trainer = Course::select('*')
                        ->where('category', 'Trainer' )
                      ->  get();

     return view('common.trainers',compact('trainer'));
     }

     public function courses(){
       $course = Course::select('*')
                        ->where('category', 'course' )
                      ->  get();


     return view('common.courses',compact('course'));
     }
     


}
