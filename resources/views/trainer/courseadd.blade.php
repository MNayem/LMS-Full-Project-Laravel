@extends('layouts.registration')

@section('content')
<div class="accordion" id="accordionExample">
 <div class="accordion-item">
   <h2 class="accordion-header" id="headingOne">
     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Add Title
     </button>
   </h2>
   <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
     <div class="accordion-body">
       <form id="abc" method="get" action="/update2">
       @csrf
       <input type="text" name="content_name" value="">
     </div>
   </div>
 </div>
 <div class="accordion-item">
   <h2 class="accordion-header" id="headingTwo">
     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       Add Course Id
     </button>
   </h2>
   <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
     <div class="accordion-body">
       <input type="text" name="course_id" value="">
     </div>
   </div>
 </div>
 <div class="accordion-item">
   <h2 class="accordion-header" id="headingThree">
     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       Add Video
     </button>
   </h2>
   <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
     <div class="accordion-body">
       <input type="file" name="video" value="">
       <button type="submit" name="button">Submit</button>
     </form>

     </div>
   </div>
 </div>
</div>

@endsection
