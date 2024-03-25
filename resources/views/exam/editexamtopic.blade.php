<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


@extends('layouts.registration')

@section('content')

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
<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="margin-top: -20px;">
<div class="container-fluid ">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/home">Home</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" aria-current="page" href="/quizes/create">Questin and Topic Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/logout">Logout</a>
    </li>
   
  </ul>
  
</div>
</div>
</nav><br>
            <center><h1>Edit This Exam Topic</h1><br></center>
            <hr>
            <form action="{{ url('/editexamtopicprocess',$data->id) }}" method="post" class="form-control" style="background: #038DCC; width: auto;">
                @csrf
                <label style="color:#000; font-weight: bold; font-size: 20px;">Quiz Name: </label>
            <input type="text" name="quiz_name" placeholder="Quiz Name" value="{{ $data->quiz_name }}"><br><br>
            
            <label style="color:#000; font-weight: bold; font-size: 20px;">Description: </label>
            <input type="text" name="description" placeholder="Description" value="{{ $data->description }}"><br><br>
            
            <label style="color:#000; font-weight: bold; font-size: 20px;">Quiz Date: </label>
            <input type="date" name="quiz_date" placeholder="Quiz Date" value="{{ $data->quiz_date }}"><br><br>
            
            <label style="color:#000; font-weight: bold; font-size: 20px;">Quiz Time: </label>
            <input type="text" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5" name="quiz_time" title="example 01:00 " value="{{ $data->quiz_time }}"><br><br>
            
            <label style="color:#000; font-weight: bold; font-size: 20px;">Number Of Question View for User: </label>
            <input type="text" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5" name="number_of_question" value="{{ $data->number_of_question }}"><br><br><br>
            
            
            <input type="submit" value="Update" name="submit" class="btn btn-info">
            </form>
@endsection