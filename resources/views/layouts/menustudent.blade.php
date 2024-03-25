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
      width: 180px;
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
      color: #818181;
      display: block;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .main {
      margin-left: 160px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 0px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="margin-top: -20px; width: 100%;">
<div class="container-fluid ">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    @if($verifyemail == 1)
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studentwhofillupcareerform">Show Student who fill the Career form</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studentwhofillupacademicform">Show Student who fill the Academic form</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/allabroadinquirystudent">Abroad Inquiry Student Show</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studyabroadinquiry">Abroad Inquiry Student Add</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/allinquirystudent">Inquiry Student Show</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studentinquiry">Inquiry Student Add</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studentadmission">Student Admission</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studentwhofillupcareerform">Show Student who fill the Career form</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studentwhofillupacademicform">Show Student who fill the Academic form</a>
        </li>
    @endif
    
        <!--<li class="nav-item">
            <a class="nav-link" aria-current="page" href="/studentwhofillupacademicform">Show Student who fill the Academic form</a>
        </li>-->
  </ul>
  
</div>
</div>
</nav>
   <div class="main">
     <main class="py-4">
         @yield('content')
     </main>
   </div>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>
