@extends('layouts.registration')

@section('content')
<style media="screen">
  .whidden {
    display: none;
  }
  .test {
    display: none;
  }
  .bank {
    display: none;
  }
  .conline {
    display: none;
  }
  .cnonline {
    display: none;
  }
  .monline {
    display: none;
  }
  .coachingonline {
    display: none;
  }
  .toone {
    display: none;
  }
  .togroup {
    display: none;
  }
  .tofgroup {
    display: none;
  }
  .tofone {
    display: none;
  }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trainer's Form</div>
                <div class="card-body">

                    Please fill the form {{$count}}
                    @if($count===0){
                      <p>There is no question</p>
                    }
                    @else{
                      <p>operation</p>
                    }
                    @endif

                </div>
            </div>
        </div>

        <!--form div start-->
         <div class="col-md-8">
           <form action="/trainer" method="POST">
             @csrf
             <div class="mb-3">
               <label for="exampleInputName" class="form-label">Name</label>
               <input type="text" class="form-control" name="name" id="exampleInputName"  >

             </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

 <div class="mb-3">
   <p>How do you want to get your money?</p>
  <select class="form-select" aria-label="Default select example">

 <option value="Bank">Bank</option>
 <option value="Cash">Cash</option>

</select>
 <p class="bank">Bank Account Number:  <input type="text">  </p>
</div>
<div class="mb-3">
  <p>What do you want to be?</p>
  <div class="form-check defaultcheck test2 ">
  <input class="form-check-input" type="checkbox" value="Training" name="training" id="trainer">
  <label class="form-check-label" for="trainer">
    Training
  </label>
</div>
</div>
<div class="mb-3" style="padding-left:30px;">
  <div class="form-check test tron">
    <input class="form-check-input" type="checkbox" value="tronline" name="tronline" id="tronline"  >
    <label class="form-check-label" for="tronline">
      Online
    </label>
  </div>
</div>

<div class="mb-3" style="padding-left:60px;">
  <div class="form-check togroup">
    <input class="form-check-input" type="checkbox" value="tronlinegroup" name="tronlinegroup" id="tronlinegroup"  >
    <label class="form-check-label" for="tronlinegroup">
      Group
    </label>
  </div>
</div>
<div class="mb-3" style="padding-left:60px;">
  <div class="form-check toone">
    <input class="form-check-input" type="checkbox" value="tronlineone" name="tronlineone" id="tronlineone"  >
    <label class="form-check-label" for="tronlineone">
      One to One
    </label>
  </div>
</div>


<div class="mb-3" style="padding-left:30px;">
  <div class="form-check test trof">
    <input class="form-check-input" type="checkbox" value="troffline" name="troffline" id="troffline"  >
    <label class="form-check-label" for="troffline">
      Offline
    </label>
  </div>
</div>

<div class="mb-3" style="padding-left:60px;">
  <div class="form-check tofone">
    <input class="form-check-input" type="checkbox" value="trofflineone" name="trofflineone" id="trofflineone"  >
    <label class="form-check-label" for="trofflineone">
      One to One
    </label>
  </div>
</div>

<div class="mb-3" style="padding-left:60px;">
  <div class="form-check tofgroup">
    <input class="form-check-input" type="checkbox" value="trofflinegroup" name="trofflinegroup" id="trofflinegroup"  >
    <label class="form-check-label" for="trofflinegroup">
      Group
    </label>
  </div>
</div>

<div class="mb-3">
  <div class="form-check defaultcheck course">
    <input class="form-check-input" type="checkbox" value="course" name="course" id="course"  >
    <label class="form-check-label" for="course">
      Course
    </label>
  </div>
</div>

<div class="mb-3" style="padding-left:30px;">
  <div class="form-check whiddenn conline">
    <input class="form-check-input" type="checkbox" value="tronline" name="tronline" id="tronline"  >
    <label class="form-check-label" for="tronline">
      Online
    </label>
  </div>
</div>
<div class="mb-3" style="padding-left:30px;">
  <div class="form-check conline">
    <input class="form-check-input" type="checkbox" value="troffline" name="troffline" id="troffline"  >
    <label class="form-check-label" for="troffline">
      Offline
    </label>
  </div>
</div>

<div class="mb-3">
  <div class="form-check consulting">
    <input class="form-check-input" type="checkbox" value="consulting" name="consulting" id="consulting"  >
    <label class="form-check-label" for="consulting">
      Consulting
    </label>
  </div>
</div>

<div class="mb-3" style="padding-left:30px;">
  <div class="form-check cnonline">
    <input class="form-check-input" type="checkbox" value="tronline" name="tronline" id="tronline"  >
    <label class="form-check-label" for="tronline">
      Online
    </label>
  </div>
</div>
<div class="mb-3" style="padding-left:30px;">
  <div class="form-check cnonline">
    <input class="form-check-input" type="checkbox" value="troffline" name="troffline" id="troffline"  >
    <label class="form-check-label" for="troffline">
      Offline
    </label>
  </div>
</div>

<div class="mb-3">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="certification" name="certification" id="certification"  >
    <label class="form-check-label" for="certification">
      Certification
    </label>
  </div>
</div>

<div class="mb-3">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="award" name="award" id="award"  >
    <label class="form-check-label" for="award">
      Award
    </label>
  </div>
</div>

<div class="mb-3">
  <div class="form-check mentor">
    <input class="form-check-input" type="checkbox" value="mentor" name="mentor" id="mentor"  >
    <label class="form-check-label" for="mentor">
      Mentor
    </label>
  </div>
</div>

<div class="mb-3" style="padding-left:30px;">
  <div class="form-check monline">
    <input class="form-check-input" type="checkbox" value="tronline" name="tronline" id="tronline"  >
    <label class="form-check-label" for="tronline">
      Online
    </label>
  </div>
</div>
<div class="mb-3" style="padding-left:30px;">
  <div class="form-check monline">
    <input class="form-check-input" type="checkbox" value="troffline" name="troffline" id="troffline"  >
    <label class="form-check-label" for="troffline">
      Offline
    </label>
  </div>
</div>

<div class="mb-3">
  <div class="form-check coaching">
    <input class="form-check-input" type="checkbox" value="coaching" name="coaching" id="coaching"  >
    <label class="form-check-label" for="coaching">
      Coaching
    </label>
  </div>
</div>

<div class="mb-3" style="padding-left:30px;">
  <div class="form-check coachingonline">
    <input class="form-check-input" type="checkbox" value="tronline" name="tronline" id="tronline"  >
    <label class="form-check-label" for="tronline">
      Online
    </label>
  </div>
</div>
<div class="mb-3" style="padding-left:30px;">
  <div class="form-check coachingonline">
    <input class="form-check-input" type="checkbox" value="troffline" name="troffline" id="troffline"  >
    <label class="form-check-label" for="troffline">
      Offline
    </label>
  </div>
</div>

<div class="mb-3">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="exam" name="exam" id="exam"  >
    <label class="form-check-label" for="exam">
      Exam
    </label>
  </div>
</div>







  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  >
  <label class="form-check-label" for="flexCheckChecked">
    Checked checkbox
  </label>
</div>


         </div>
         <!--form div finish-->
    </div>
</div>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

  $(".test2").click(function(){
    $(".test").css("display", "block");
 });
 $(".tron").click(function(){
   $(".togroup").css("display", "block");
    $(".toone").css("display", "block");

});
$(".trof").click(function(){
  $(".tofgroup").css("display", "block");
   $(".tofone").css("display", "block");

});



$(".course").click(function(){
  $(".conline").css("display", "block");
});

$(".consulting").click(function(){
  $(".cnonline").css("display", "block");
});

$(".mentor").click(function(){
  $(".monline").css("display", "block");
});

$(".coaching").click(function(){
  $(".coachingonline").css("display", "block");
});


$('select').on('change', function() {

  if(this.value=="Bank"){
      $(".bank").css("display", "block");
  }
});

});
var a=67;
</script>

@endsection
