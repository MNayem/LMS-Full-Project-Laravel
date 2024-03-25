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
                      <a class="nav-link" aria-current="page" href="/trainerregistration">Trainer Registration</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="/logout">Logout</a>
                    </li>
                   
                  </ul>
                  
                </div>
        </div>
    </nav><br>
            <center><h1>Edit This Trainer Info.</h1><br></center>
            <hr>
            <form action="{{ url('/trainereditprocess',$data->id) }}" method="post" enctype="multipart/form-data" class="form-control">
                @csrf
                <label style="color:#000; font-weight: bold; font-size: 20px;">Title: </label>
                <input type="text" name="title" placeholder="Title" value="{{ $data->title }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Description: </label>
                <input type="text" name="description" placeholder="Description" value="{{ $data->description }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Benefit: </label>
                <input type="text" name="benefit" placeholder="Benefit" value="{{ $data->benefit }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Difficulty: </label>
                <input type="text" name="difficulty" placeholder="Difficulty" value="{{ $data->difficulty }}"<br><br>
                 <label style="color:#000; font-weight: bold; font-size: 20px;">Price: </label>
                <input type="number" name="price" placeholder="Price" value="{{ $data->price }}"<br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Category: </label>
                <input type="text" name="category" placeholder="Category" value="{{ $data->category }}"<br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Training Category: </label>
                <input type="text" name="ccategory" placeholder="Training Category" value="{{ $data->ccategory }}"<br><br><br>
                
                <!--<label>Image Upload: </label>
                <input type="file" name="image" placeholder="Image" value="{{ $data->image }}"<br><br>-->
                
                <input type="submit" class="btn btn-info" value="Update" name="submit">
            </form>
@endsection