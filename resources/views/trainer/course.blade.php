@extends('layouts.registration2')

@section('content')
 <style media="screen">
   .left{
     background-color: yellow;

     height: 800px;
   }
   .right{
     background-color: gray;

     height: 800px;
     position: relative;

   }
   .fixed{
      position:absolute;

     bottom: 0;
     right: 0;
     top: 0;
     height: 100%;
     background-color: red;
     width: 100%;


   }
   .nav{
     z-index: 1000;
   }
 </style>

<div class="main">
  <div class="row">
    <div class="col-md-9 left">
      <div class="runningvideo">
Video screen
      </div>
      <div class="tabbutton">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
  </li>
</ul>
<hr>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">First</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Second</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Third</div>
</div>

      </div>
      <!--end of tabbutton class-->
    </div>
    <div class="col-md-3 coursecontent right">
      <div class="fixed">
        <h2>All Content</h2>

      </div>

    </div>

  </div>

</div>


@endsection
