@extends('common.layout')

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

    @if(session()->has('message1'))
        <div class="alert alert-success">
            {{ session()->get('message1') }}
        </div>
    @endif
 
<div class="col-md-12">
	
	<table class="table table-bordered" id="datatables" style="margin-top: 50px;">
       <thead class="thead-dark">
       	<tr align="center">
       		<th>Sl No.</th>
       		<th>Quiz Name</th>
       		<th>Description</th>
       		<th>Date</th>
       		<th>Time</th>
        
       		<th>Num of Exam Qus</th>
       		<th>Status</th>
       		<th>Details</th>
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

       		<td><a href="{{ url('/giveexam',$data->id) }}" class="btn btn-info">Give Exam</a></td>
       		<!--<td>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button>
              </td>-->
       	</tr>
       	@endforeach
       </tbody>
	</table>
</div>

@endsection