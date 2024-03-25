<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@extends('layouts.registration2')

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
</nav>

    @if(session()->has('message1'))
        <div class="alert alert-success">
            {{ session()->get('message1') }}
        </div>
    @endif
 
<div class="col-md-12">
	
	<table class="table table-bordered" id="datatables" style="margin-top: 50px;">
       <thead class="thead-dark">
       	<tr align="center">
       		<th>Sl</th>
       		<th>Quiz Name</th>
       		<th>Description</th>
       		<th>Date</th>
       		<th>Time</th>
        
       		<th>Num of Exam Qus</th>
       		<th>Status</th>
       		<th>Add Question</th>
       		<!--<th>Details</th>-->
       		<th>Edit</th>
       		<th>Delete</th>
       	</tr>
       </thead>
       <tbody>
       	@foreach($data as $key=>$data)
       	<tr align="center">
       		<td>{{++$key}} </td>
       		<td>{{$data->quiz_name}} </td>
       		<td>{{$data->description}} </td>
       		<td>{{$data->quiz_date}} </td>
       		<td>{{$data->quiz_time}} </td>
       		 
       		<td>{{$data->number_of_question}} </td>
       		<td><input type="checkbox" name="status" class="quiz-status" data_id="{{$data->id}}" {{$data->status=='1'?'checked':''}}> </td>

       		<td><a href="/examquestion" class="btn btn-primary">Add Question</a></td>
       		<!--<td><a href="{{ url('/giveexam',$data->id) }}" class="btn btn-info">Give Exam</a></td>-->
       		<td><a href="{{ url('/editexamtopic',$data->id) }}" class="btn btn-primary">Edit</a></td>
       		<td><a href="{{ url('/deleteexamtopic',$data->id) }}" class="btn btn-danger">Delete</a></td>
       		<!--<td>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button>
              </td>-->
       	</tr>
       	@endforeach
       </tbody>
	</table>
</div>
@endsection