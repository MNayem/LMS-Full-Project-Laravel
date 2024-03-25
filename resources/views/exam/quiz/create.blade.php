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
<!-- /.page-header -->
<div class="row" style="margin-top: 50px; margin-left: -5px; margin-right: -5px;">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->


<form class="form-control" role="form" action="/quizes" method="POST" enctype="multipart/form-data" style="background: #038DCC; width: auto;">
	{{csrf_field()}}
<!--<div class="space-4"></div>
 
 
<div class="space-4"></div>-->
  <h3 style="text-align: center; font-weight: bold; color: yellow; font-family: poppins;">Add Quiz from here..</h3><hr>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2" style="color: #000; font-weight: bold;"> Quiz Name </label>
	<div class="col-sm-9">
		 
	 <input type="text" id="form-field-2" placeholder="Quize Name" class="col-xs-10 col-sm-5" name="quiz_name" required="" >
		 
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2" style="color: #000; font-weight: bold;">Description</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Descriotion" class="col-xs-10 col-sm-5" name="description" required="" />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2" style="color: #000; font-weight: bold;">Quiz Date</label>
	<div class="col-sm-9">
		<input type="date" id="form-field-2" placeholder="quiz date" class="col-xs-10 col-sm-5" name="quiz_date"   />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2" style="color: #000; font-weight: bold;">Quiz Time</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5" name="quiz_time" required="" title="example 01:00 " />
		<span> exm: 00:00</span>
	</div> 
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2" style="color: #000; font-weight: bold;">Number Of Question View for User</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5" name="number_of_question" required="" />
		
	</div>
</div><br>
<div class="space-4"></div>
<div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-primary" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
			Submit
		</button>

		&nbsp; &nbsp; &nbsp;
		<button class="btn btn-info" type="reset">
			<i class="ace-icon fa fa-undo bigger-110"></i>
			Reset
		</button>
	</div>
</div><br>

<div class="hr hr-24"></div>

 
</form>

 <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div>


<!--<div class="col-md-12">
	{{$quizes->links()}}
	<table class="table table-bordered" id="datatables">
       <thead>
       	<tr>
       		<th>Sl</th>
       		<th>Quiz Name</th>
       		<th>Description</th>
       		<th>Date</th>
       		<th>Time</th>
        
       		<th>Num of Exam Qus</th>
       		<th>Status</th>
       		<th>Add Question</th>
       		<th>Details</th>
       		<th>Edit</th>
       		<th>Delete</th>
       	</tr>
       </thead>
       <tbody>
       	@foreach($quizes as $key=>$data)
       	<tr>
       		<td>{{++$key}} </td>
       		<td>{{$data->quiz_name}} </td>
       		<td>{{$data->description}} </td>
       		<td>{{$data->quiz_date}} </td>
       		<td>{{$data->quiz_time}} </td>
       		 
       		<td>{{$data->number_of_question}} </td>
       		<td><input type="checkbox" name="status" class="quiz-status" data_id="{{$data->id}}" {{$data->status=='1'?'checked':''}}> </td>

       		<td><a href="/examquestion">Add Question</a></td>
       		<td><a href="{{ url('/giveexam',$data->id) }}">Give Exam</a></td>
       		<td><a href="{{ url('/editexamtopic',$data->id) }}">Edit</a></td>
       		<td><a href="{{ url('/deleteexamtopic',$data->id) }}">Delete</a></td>
       		<!--<td>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button>
              </td>-->
       	<!--</tr>
       	@endforeach
       </tbody>
	</table>
</div>-->

@endsection

@section('js')

<script type="text/javascript">
  
	$(document).on('click','.quiz-status',function(){
     var id=$(this).attr('data_id');
   var url=("{!!url('/')!!}");
   
     $.get(url+'/quiz_status/'+id,function(fb){
     	alert('Staus Successfully changed');
     });
	});
</script>
@endsection
@section('script')


            <script type="text/javascript">
                
                $('#category').on('change',function(e){
                    console.log(e);

                    var categories_id= e.target.value;

                    $.get('/json-catelogs?categories_id=' + categories_id,function(data){
                        console.log(data);

                    $('#catelog').empty();
          $('#catelog').append('<option value="" disable="true" selected="true">Select a Catelog</option>');

          $.each(data, function(index, districtsObj){
            $('#catelog').append('<option value="'+ districtsObj.id +'">'+ districtsObj.catelog +'</option>');
          });
         
                    });
                });
            </script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#summernote').summernote({
			height:'200px',
			placeholder:'Description',
			toolbar: [
    ['style', ['fontname','bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr', 'readmore']],
            ['genixcms', ['elfinder']],
            ['view', ['fullscreen', 'codeview']],
  ],
		 onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }	 
		});
	});
</script>
<script type="text/javascript">
function previewImage(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection