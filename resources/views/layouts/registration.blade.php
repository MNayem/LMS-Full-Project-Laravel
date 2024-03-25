

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    @stack('css')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
    body {
      font-family: "Lato", sans-serif;
      margin-left: 20px;
    }

    .sidenav {
      height: 100%;
      width: 220px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 18px;
      color: #F4F4F4;
      display: block;
      border-bottom: 1px solid #808080;
      line-height: 2.6;
    }

    .sidenav a:hover {
      color: #A8D1DF;
    }

    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
</head>
<body>
  
  <div class="sidenav">
     
    <a href="/home"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
    
    <!--<a href="/profile">Profile</a>
    <a href="/trainer">registration Form</a>-->
    
    <!--<a href="/course"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;Course</a>-->
    <!--<a href="/allcoursetitle">All Course Title</a>-->
    <a href="/allcommontrainer"><i class="fas fa-chalkboard-teacher"  aria-hidden="true"></i>&nbsp;Trainer</a>
    <a href="/studentwhofillupcareerform"><i class="fas fa-user-graduate"></i>&nbsp;Student</a>
    <!--<a href="/allstudent">All Student</a>
    <a href="/allinquirystudent">All Inquiry Student</a>
    <a href="/allabroadinquirystudent">All Study Abroad Inquiry Student</a>-->
    <!--<a href="/courseregistration">Course Add</a>
    <a href="/chapteradd">Chapter Add</a>
     <a href="/chaptershow">Chapter Show</a>-->
    <!--<a href="{{ url('/trainerregistration') }}">Trainer Add</a>-->
    <!--<a href="{{ url('/studentregistration') }}">Student Add</a>
    <a href="{{ url('/studentinquiry') }}">Student Inquiry Form</a>
    <a href="{{ url('/studyabroadinquiry') }}">Study Abroad Inquiry Form</a>
    <a href="{{ url('/studentadmission') }}">Student Admission Form</a>-->
    <!--<a href="{{ url('/quizes/create') }}">Questin and Topic Add</a>-->
    <!--<a href="{{ url('/showquizes') }}"><i class="fas fa-diagnoses"></i>&nbsp;Exam System</a>-->
    <!--<a href="{{ url('/addcontent') }}">Content Add</a>
    <a href="{{ url('/allcontent') }}">Content Show</a>-->
    <!--<a href="/courseadd">Topics Add</a>-->
    <!--<a href="/lecture">Enroll Course</a>-->
    <!--<a href="/yourcourse">Your Courses</a>
    <a href="/coachingregistration">Offline Add</a>
       <a href="/allchatshow">Offline Chat</a>
    <a href="/yourcourse">Your Offline</a>-->


    <!--<a href="/vocabulary">Exam</a>-->
    <!--<a href="/certificate">Certificate</a>-->

    <!--<a href="/singlesell">Single Course demo</a>
    <a href="/tdashboard"> Course Add demo</a>

    <a href="/sidebar">Dashboard demo</a>
    <a href="/questionadd">Question Add demo</a>-->
    <a href="/mathbasic"><i class="fas fa-comment"></i>&nbsp;Chat</a>
    <a href="/account"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Account</a>
    <!--<a href="/mathintermediate">Intermediate Math Chat</a>
    <a href="/mathadvance">Advance Math Chat</a>
    <a href="/englishbasic">Basic English Chat</a>
    <a href="/englishintermediate">Intermediate English Chat</a>
    <a href="/englishadvance">Advance English Chat</a>
    <a href="/analyticalbasic">Basic Analytical Chat</a>
    <a href="/analyticalintermediate">Intermediate Analytical Chat</a>
    <a href="/analyticaladvance">Advance Analytical Chat</a>-->
    
    <!--<a href="/exam">Exam List</a>-->
    <a   href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>





  </div>

   <div class="main">
     <main class="py-4">
         @yield('content')
     </main>
   </div>










     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>
