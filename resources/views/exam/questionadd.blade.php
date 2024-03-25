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
      <a class="nav-link" aria-current="page" href="/showquizes">Back</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/logout">Logout</a>
    </li>
   
  </ul>
  
</div>
</div>
</nav>

 @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
 @endif
 
 @if(session()->has('message1'))
        <div class="alert alert-success">
            {{ session()->get('message1') }}
        </div>
 @endif
 
 <br>
 <div class="container">

    <center><h3 class="jumbotron">  Multiple question Add  </h3></center><hr>
<form method="post" action="/examquestionprocess">
    @csrf

        <div class="input-group control-group increment" >
          <input type="text" name="exam_id" placeholder="Exam Id" class="form-control">
          <input type="text" name="question" placeholder="Question" class="form-control">
          <input type="text" name="option1" placeholder=" Option1" class="form-control">
          <input type="text" name="option2" placeholder="Option 2" class="form-control">
          <input type="text" name="option3" placeholder="Option 3" class="form-control">
          <input type="text" name="option4" placeholder="Option 4" class="form-control">
          <input type="text" name="answer" placeholder="Answer" class="form-control">


          <!--<div class="input-group-btn">
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>-->
        </div>
        <!--<div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <h2>new Question</h2>
            <hr>
            <input type="text" name="exam_id" placeholder="Exam Id" class="form-control">
            <input type="text" name="question" placeholder=" Question" class="form-control">
            <input type="text" name="option1" placeholder="Option 1" class="form-control">
            <input type="text" name="option2" placeholder="Option 2" class="form-control">
            <input type="text" name="option3" placeholder="Option 3" class="form-control">
            <input type="text" name="option4" placeholder="Option 4" class="form-control">
            <input type="text" name="answer" placeholder="Answer" class="form-control">

            <div class="input-group-btn">
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>-->

        <button type="submit" class="btn btn-info" style="margin-top:10px">Submit</button>

  </form>
  </div>

<table class="table table-bordered">
  <thead class="thead-dark">
     <th colspan="9" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Questions Added So Far..</th>
    <tr align="center">
      <th scope="col">Exam Id</th>
      <th scope="col">Question</th>
      <th scope="col">Option 1</th>
      <th scope="col">Option 2</th>
      <th scope="col">Option 3</th>
      <th scope="col">Option 4</th>
      <th scope="col">Answer</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
 
  <tbody>
       @foreach($exams as $question)
    <tr align="center">
      
      <td>{{$question->exam_id}}</td>
      <td>{{$question->question}}</td>
      <td>{{$question->option1}}</td>
      <td>{{$question->option2}}</td>
      <td>{{$question->option3}}</td>
      <td>{{$question->option4}}</td>
      <td>{{$question->answer}}</td>
      <td><a href="{{ url('/editquestion',$question->id) }}" class="btn btn-primary">Edit</a></td>
      <td><a href="{{ url('/deletequestion',$question->id) }}" class="btn btn-danger">Delete</a></td>
      <!--<td>
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      </td>-->
    </tr>
    @endforeach
  </tbody>
  
</table>
 

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection
