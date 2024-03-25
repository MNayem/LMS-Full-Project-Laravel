<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
      <a class="nav-link active" aria-current="page" href="/admin/home">Home</a>
    </li>
    <!--<li class="nav-item">
      <a class="nav-link" aria-current="page" href="/trainerregistration">In Course Trainer Registration</a>
    </li>-->
     <!--<li class="nav-item">
      <a class="nav-link" aria-current="page" href="/allcommontrainer">
            @if($verifyemail == 0)
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/allcommontrainer">Trainer Who Fill the Registration Form</a>
                </li>
            @endif

      </a>
    </li>-->
     @if($verifyemail == 1)
         <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/allcommontrainer">Trainer Who Fill the Registration Form</a>
         </li>
     @else
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/trainerregistration">In Course Trainer Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/allcommontrainer">Trainer Who Fill the Registration Form</a>
         </li>
     @endif
    
    <li class="nav-item">
      <a class="nav-link" href="/logout">Logout</a>
    </li>
   
  </ul>
  
</div>
</div>
</nav>
    @if(session()->has('message1'))
        <div class="alert alert-success">
            {{ session()->get('message1') }}
        </div>
    @endif
    
     @if(session()->has('message2'))
        <div class="alert alert-success">
            {{ session()->get('message2') }}
        </div>
    @endif
    <table class="table table-bordered table-striped table-responsive-lg" style="margin-top: 50px;">
        <thead class="thead-dark">
            <th colspan="16" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Trainer Who Fill the Reg. Form</th>
            <tr align="center">
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Mathematics</th>
                <th>English</th>
                <th>Analytical</th>
                <th>Others</th>
                <th>Education Level</th>
                <th>Institution</th>
                <th>User Name</th>
                <th>Password</th>
                <th colspan = "3">Actions</th>
        </tr>
        </thead>
     
        <tbody>
         @foreach ($commontrainershow as $commontrainershow)
        <tr align="center">
            <td>{{$commontrainershow->id}}</td>
            <td>{{$commontrainershow->name}}</td>
            <td>{{$commontrainershow->email}}</td>
            <td>{{$commontrainershow->phone}}</td>
            <td>{{$commontrainershow->math}}</td>
            <td>{{$commontrainershow->english}}</td>
            <td>{{$commontrainershow->analytical}}</td>
            <td>{{$commontrainershow->others}}</td>
            <td>{{$commontrainershow->educationlevel}}</td>
            <td>{{$commontrainershow->institution}}</td>
            <td>{{$commontrainershow->username}}</td>
            <td>{{$commontrainershow->password}}</td>

            <td colspan="3">

                <a href="{{ url('/commontraineredit',$commontrainershow->id) }}" class="btn btn-primary">Edit </a>
                <a href="{{ url('/deletecommontrainer',$commontrainershow->id) }}" class="btn btn-danger">Delete</a>
            </td>

        </tr>
    @endforeach
    </tbody>
    </table>
@endsection
