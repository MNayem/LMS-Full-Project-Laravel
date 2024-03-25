
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Crudcontroller;
use App\Http\Controllers\TrainerController;






use App\Http\Controllers\ExamController;

use App\Http\Controllers\CommonController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CheckoutsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Chat Routes
Route::get('/mathbasic', [ChatController::class,'mathbasic' ]) ;
Route::get('/mathchat', [ChatController::class,'mathchat' ]) ;
Route::post('/mathbasicprocess', [ChatController::class,'mathbasicprocess' ]) ;


Route::get('/mathadvance', [ChatController::class,'mathadvance' ]) ;
Route::post('/mathadvanceprocess', [ChatController::class,'mathadvanceprocess' ]) ;

Route::get('/englishbasic', [ChatController::class,'englishbasic' ]) ;
Route::post('/englishbasicprocess', [ChatController::class,'englishbasicprocess' ]) ;

Route::get('/analyticalbasic', [ChatController::class,'analyticalbasic' ]) ;
Route::post('/analyticalbasicprocess', [ChatController::class,'analyticalbasicprocess' ]) ;


//Exams Routes
Route::resource('exam', ExamController::class);
Route::get('/examstart/{id}', [ExamController::class, 'exam'])->name('exam.exam');
Route::get('/questionadd', function () {
    return view('exam.questionadd');
});

Route::get('/examquestion', [ExamController::class,'examquestion' ]) ;
Route::post('/examquestionprocess', [ExamController::class,'examquestionprocess' ]) ;

Route::get('/examquestiontopic', [ExamController::class,'examquestiontopic' ]) ;
Route::post('/examquestiontopicprocess', [ExamController::class,'examquestiontopicprocess' ]) ;

//User Details Route
Route::get('/userdetails', [ExamController::class,'userdetails' ]) ;
Route::post('/userdetailsprocess', [ExamController::class,'userdetailsprocess' ]) ;



//Quiz Section Route
//Route::resource('quizes','QuizController');
Route::resource('quizes', QuizController::class);

Route::get('/quiz_status/{id}','QuizController@status');

Route::get('/quize/addquestion/{id}','QuizController@AddQuestion');

Route::resource('questions','QuestionController');



//Edit and delete student
Route::get('/studentedit/{id}', [StudentController::class,'studentedit' ]) ;
Route::post('/studenteditprocess/{id}', [StudentController::class,'studenteditprocess' ]) ;
Route::get('/deletestudent/{id}', [StudentController::class,'deletestudent' ]) ;

//Edit and delete trainer
Route::get('/traineredit/{id}', [TrainerController::class,'traineredit' ]) ;
Route::post('/trainereditprocess/{id}', [TrainerController::class,'trainereditprocess' ]) ;
Route::get('/deletetrainer/{id}', [TrainerController::class,'deletetrainer' ]) ;

//Edit and delete common trainer
Route::get('/commontraineredit/{id}', [TrainerController::class,'commontraineredit' ]) ;
Route::post('/commontrainereditprocess/{id}', [TrainerController::class,'commontrainereditprocess' ]) ;
Route::get('/deletecommontrainer/{id}', [TrainerController::class,'deletecommontrainer' ]) ;

//Edit and delete course
Route::get('/courseedit/{id}', [CourseController::class,'courseedit' ]) ;
Route::post('/courseeditprocess/{id}', [CourseController::class,'courseeditprocess' ]) ;
Route::get('/deletecourse/{id}', [CourseController::class,'deletecourse' ]) ;

//Edit and Delete Exam Topic Routes
Route::get('/editexamtopic/{id}', [QuizController::class,'editexamtopic' ]) ;
Route::post('/editexamtopicprocess/{id}', [QuizController::class,'editexamtopicprocess' ]) ;
Route::get('/deleteexamtopic/{id}', [QuizController::class,'deleteexamtopic' ]) ;

//Edit and Delete Question Routes
Route::get('/editquestion/{id}', [QuizController::class,'editquestion' ]) ;
Route::post('/editquestionprocess/{id}', [QuizController::class,'editquestionprocess' ]) ;

Route::get('/deletequestion/{id}', [QuizController::class,'deletequestion' ]) ;
//Route::get('/quiz','Frontend\QuizController@index');

//Give Exam Routes
Route::get('/giveexam/{id}', [QuizController::class,'giveexam' ]) ;
Route::post('/giveexamprocess', [QuizController::class,'giveexamprocess' ]) ;

//Continue Exam Routes
Route::post('/continueexamprocess', [QuizController::class,'giveexamprocess' ]) ;

//Give Exam Front
Route::get('/giveexamfront', [QuizController::class, 'giveexamfromfront']);

//Course Routes
Route::get('/yourcourse', [CourseController::class, 'yourcourse']);
Route::get('/update2', [CourseController::class, 'update2']);

Route::resource('course', CourseController::class);
Route::resource('crud', Crudcontroller::class);
//Route::resource('trainer', TrainerController::class);
Route::get('/trainer', [CommonController::class,'trainer' ])->name('trainer.store'); ;

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/', [CommonController::class,'index' ])->name('frontpage');
Route::get('/contact', [CommonController::class,'contact' ])->name('contact');
Route::get('/details', [CommonController::class,'details' ])->name('details');
Route::get('/about', [CommonController::class,'about' ])->name('about');
Route::get('/trainerRegistration', [CommonController::class,'trainerRegistration' ])->name('trainerRegistration');
Route::get('/trainer-teacher', [CommonController::class,'trainerTeacher' ])->name('trainer-teacher');
Route::get('/english', [CommonController::class,'english' ])->name('english');
Route::get('/fillGap', [CommonController::class,'fillGap' ])->name('fillGap');
Route::get('/peopleAndRelationship', [CommonController::class,'peopleAndRelationship' ])->name('peopleAndRelationship');
Route::get('/englishPractice', [CommonController::class,'englishPractice' ])->name('englishPractice');
Route::get('/trainers', [CommonController::class,'trainers' ])->name('trainers');
Route::get('/courses', [CommonController::class,'courses' ])->name('courses');
Route::get('/addmission', [CommonController::class,'addmission' ])->name('addmission');
Route::get('/hsc', [CommonController::class,'hsc' ])->name('hsc');
Route::get('/freelancing', [CommonController::class,'freelancing' ])->name('freelancing');

//Freelancer Registration
Route::get('/freelancingRegistration', [CommonController::class,'freelancingRegistration' ])->name('freelancingRegistration');
Route::post('/freelancingregistrationprocess', [TrainerController::class,'freelancingregistrationstore' ]);

Route::get('/chatbox', function () {
    return view('trainer.chatbox');
});

//Course Details Routes
Route::get('/coursedetails', [CourseController::class,'coursedetails' ])->name('coursedetails');

//Academic section details
Route::get('/academicsection', [CourseController::class,'academicsection' ])->name('academicsection');

//Career section details
Route::get('/careersection', [CourseController::class,'careersection' ])->name('careersection');

//Abroad Study section details
Route::get('/abroadstudysection', [CourseController::class,'abroadstudysection' ])->name('abroadstudysection');

//Sample Math section details
Route::get('/mathsample', [CourseController::class,'mathsample' ])->name('mathsample');

//Sample Math test section details
Route::get('/sampletestmath', [CourseController::class,'sampletestmath' ])->name('sampletestmath');

//Sample English section details
Route::get('/englishsample', [CourseController::class,'englishsample' ])->name('englishsample');


//Sample English test section details
Route::get('/sampletestenglish', [CourseController::class,'sampletestenglish' ])->name('sampletestenglish');

//Sample Analytical section details
Route::get('/analyticalsample', [CourseController::class,'analyticalsample' ])->name('analyticalsample');

//Sample English test section details
Route::get('/sampletestanalytical', [CourseController::class,'sampletestanalytical' ])->name('sampletestanalytical');

//Course Registration
Route::get('/courseregistration', function () {
    return view('trainer.courseregistration');
});

//All Course Title Show
Route::get('/allcoursetitle', [CourseController::class, 'allcoursetitle']);

//Course Content Section Route
    Route::get('/addcontent', function () {
        return view('course.addcontent');
    });
    
    Route::post('/addcontentprocess', [CourseController::class,'addcontentprocess' ]) ;
    
//Course Content Section Show Route
 Route::get('/allcontent', [CourseController::class, 'allcontent']);
 
 //Chapter Add, Show, Edit and Delete Route
 Route::get('/chapteradd', function () {
    return view('course.chapteradd');
});

Route::post('/chapteraddprocess', [CourseController::class,'chapteraddprocess' ]) ;
Route::get('/chaptershow', [CourseController::class, 'chaptershow']);

Route::get('/chapteredit/{id}', [CourseController::class,'chapteredit' ]) ;
Route::post('/chapteredittprocess/{id}', [CourseController::class,'chapteredittprocess' ]) ;
Route::get('/chapterdelete/{id}', [CourseController::class,'chapterdelete' ]) ;

 //Course Chapter Show Route
 Route::get('/coursechapter/{id}', [CourseController::class,'coursechapter' ]) ;

//Edit and Delete Content
Route::get('/contentedit/{id}', [CourseController::class,'contentedit' ]) ;
Route::post('/contenteditprocess/{id}', [CourseController::class,'contenteditprocess' ]) ;
Route::get('/deletecontentt/{id}', [CourseController::class,'deletecontentt' ]) ;

//Chapter Content Show
Route::get('/chaptercontent/{id}', [CourseController::class,'chaptercontent' ]) ;

//Content Resource Add Option
Route::get('/contentresourceadd/{id}', [CourseController::class,'contentresourceadd' ]) ;

//Chapter Content Video, Audio, Text and Image add
/*Route::get('/addvideo', function () {
    return view('course.addvideo');
});*/
Route::get('/addvideo', [CourseController::class,'addvideo' ]) ;

Route::post('/addvideoprocess', [CourseController::class,'addvideoprocess' ]) ;

//Trainer Registration
Route::get('/trainerregistration', function () {
    return view('trainer.trainerregistration');
});

Route::post('/trainerregistrationprocess', [CourseController::class,'trainerregistrationprocess' ]) ;

//Common Trainer Registration
Route::get('/commontrainerregistration', function () {
    return view('trainer.commontrainerregistration');
});

Route::post('/commontrainerregistrationprocess', [CourseController::class,'commontrainerregistrationprocess' ]) ;


//Student Registration
Route::get('/studentregistration', function () {
    return view('trainer.studentregistration');
});

Route::post('/studentregistrationprocess', [StudentController::class,'studentregistrationprocess' ]) ;

/* Show all Admitted Student */
Route::get('/alladmittedstudent', [StudentController::class, 'alladmittedstudent']);

//Student Inquiry Form
/*Route::get('/studentinquiry', function () {
    return view('student.studentinquiry');
});*/

Route::get('/studentinquiry', [StudentController::class, 'studentinquiry']);
Route::post('/studentinquiryprocess', [StudentController::class,'studentinquiryprocess' ]) ;

//Study Abroad Inquiry Form
/*Route::get('/studyabroadinquiry', function () {
    return view('student.studyabroadinquiry');
});*/

Route::get('/studyabroadinquiry', [StudentController::class, 'studyabroadinquiry']);
Route::post('/studyabroadinquiryprocess', [StudentController::class,'studyabroadinquiryprocess' ]) ;

////Student Admission Form
/*Route::get('/studentadmission', function () {
    return view('student.studentadmission');
});*/
Route::get('/studentadmission', [StudentController::class, 'studentadmission']);
Route::post('/studentadmissionprocess', [StudentController::class,'studentadmissionprocess' ]) ;

//Edit and delete admitted student
Route::get('/admittedstudentedit/{id}', [StudentController::class,'admittedstudentedit' ]) ;
Route::post('/admittedstudenteditprocess/{id}', [StudentController::class,'admittedstudenteditprocess' ]) ;
Route::get('/admittedstudentdelete/{id}', [StudentController::class,'admittedstudentdelete' ]) ;

//Inquiry Student Show
Route::get('/allinquirystudent', [StudentController::class, 'allinquirystudent']);

//Show and Delete the Students who fill the Career form
Route::get('/studentwhofillupcareerform', [StudentController::class, 'studentwhofillupcareerform']);

Route::get('/deletestudentwhofillcareerform/{id}', [StudentController::class,'deletestudentwhofillcareerform' ]) ;

//Show and Delete the Students who fill the Academic form
Route::get('/studentwhofillupacademicform', [StudentController::class, 'studentwhofillupacademicform']);

Route::get('/deletestudentwhofillacademicform/{id}', [StudentController::class,'deletestudentwhofillacademicform' ]) ;

//Study Abroad Inquiry Student Show
Route::get('/allabroadinquirystudent', [StudentController::class, 'allabroadinquirystudent']);

//Edit and Delete Inquiry Student
Route::get('/inquirystudentedit/{id}', [StudentController::class,'inquirystudentedit' ]) ;
Route::post('/inquirystudenteditprocess/{id}', [StudentController::class,'inquirystudenteditprocess' ]) ;
Route::get('/deleteinquirystudent/{id}', [StudentController::class,'deleteinquirystudent' ]) ;

//Edit and Delete Study Abroad Inquiry Student
Route::get('/studyabroadinquirystudentedit/{id}', [StudentController::class,'studyabroadinquirystudentedit' ]) ;
Route::post('/studyabroadinquirystudenteditprocess/{id}', [StudentController::class,'studyabroadinquirystudenteditprocess' ]) ;
Route::get('/deletestudyabroadinquirystudent/{id}', [StudentController::class,'deletestudyabroadinquirystudent' ]) ;

//All Quizes show
Route::get('/showquizes', [QuizController::class, 'showquizes']);

Route::get('/coursetemplate', function () {
    return view('trainer.course');
});
Route::get('/udacity', function () {
    return view('trainer.udacity');
});
Route::get('/myclassroom', function () {
    return view('trainer.myclassroom');
});
Route::get('/classroom', function () {
    return view('trainer.classroom');
});
Route::get('/career', function () {
    return view('trainer.career');
});
Route::get('/academic', function () {
    return view('trainer.academic');
});
//Career Form
Route::post('/training', [TrainerController::class, 'trainingprocess']);

//Academic Form
Route::post('/academicform', [TrainerController::class, 'academicprocess']);

Route::get('/courseadd', function () {
    return view('trainer.courseadd');
});
  Route::get('/chat', [TrainerController::class, 'chat']);
    Route::post('/chat', [TrainerController::class, 'chatProcess']);
      Route::get('/allchatshow', [TrainerController::class, 'courseorder']);
      Route::get('allchatshow/{id}/courseorderedit', [TrainerController::class, 'courseorderedit'])->name('courseorderedit');

    Route::get('/profile', [TrainerController::class, 'profile']);
    
//Trainer and Student Show
    Route::get('/alltrainer', [TrainerController::class, 'alltrainer']);
    Route::get('/allcommontrainer', [TrainerController::class, 'allcommontrainer']);
    Route::get('/allstudent', [StudentController::class, 'allstudent']);

//Common Trainer Add
Route::post('/commontrainerregistration', [TrainerController::class, 'commontrainerstore']);

Route::get('/singlesell', function () {
    return view('trainer.singlesell');
});
Route::get('/trainerlogin', function () {
    return view('trainer.login');
});
Route::get('/ourteam', function () {
    return view('trainer.ourteam');
});
Route::get('/account', function () {
    return view('trainer.account');
});
Route::get('/sidebar', function () {
    return view('layouts.sidebar');
});

Route::get('/lecture', function () {
    return view('trainer.videogallery');
});
Route::get('/questionadd', function () {
    return view('trainer.questionadd');
});

// Carts Routes
Route::group(['prefix' => 'carts'], function () {
  Route::get('/', [CartsController::class, 'index'])->name('carts');
  Route::post('/store', [CartsController::class, 'store'])->name('carts.store');
  Route::post('/update/{id}', [CartsController::class, 'update'])->name('carts.update');
  Route::post('/delete/{id}', [CartsController::class, 'destroy'])->name('carts.delete');
});

// Checkouts Routes
Route::group(['prefix' => 'checkout'], function () {
  Route::get('/', [CheckoutsController::class, 'index'])->name('checkouts');
  Route::post('/store', [CheckoutsController::class, 'store'])->name('checkouts.store');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/tdashboard', 'trainer.tdashboard');
Route::view('/terms', 'common.terms');
Route::view('/blog', 'common.blog');
Route::view('/about', 'common.about');
//Route::get('/fileupload', 'fileupload');
//Route::get('/upload', 'FileUploadController@showUploadForm');
Route::get('/upload', [FileUploadController::class, 'showUploadForm']);
Route::post('/upload', [FileUploadController::class, 'storeUploads']);

//Route::post('/upload', 'FileUploadController@storeUploads');

