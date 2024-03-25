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
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="/trainerregistration">In Course Trainer Registration</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="/allcommontrainer">Trainer Who Fill the Registration Form</a>
    </li>
    
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
    <table class="table table-bordered table-striped table-responsive-lg" style="margin-top: 50px;">
        <thead class="thead-dark">
            <th colspan="12" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Trainer So Far..</th>
            <tr align="center">
                <th>No</th>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
                <th>Benefit</th>
                <th>Difficulty</th>
                <th>Price</th>
                <th>Category</th>
                <th>Training Category</th>
                <th>Image</th>
                <th colspan = 3>Actions</th>
        </tr>
        </thead>
     
        <tbody>
         @foreach ($trainer as $trainer)
        <tr align="center">
            <td>{{$trainer->id}}</td>
            <td>{{$trainer->email}}</td>
            <td>{{$trainer->title}}</td>
            <td>{{$trainer->description}}</td>
            <td>{{$trainer->benefit}}</td>
            <td>{{$trainer->difficulty}}</td>
            <td>{{$trainer->price}}</td>
            <td>{{$trainer->category}}</td>
            <td>{{$trainer->ccategory}}</td>
            <td> <img src="{{ $trainer->image }}" width="100px" height="100px" alt=""></td>

            <td colspan=2>

                <a href="{{ url('/traineredit',$trainer->id) }}" class="btn btn-primary">Edit </a>
                <a href="{{ url('/deletetrainer',$trainer->id) }}" class="btn btn-danger">Delete</a>
            </td>

        </tr>
    @endforeach
    </tbody>
    </table>
@endsection
