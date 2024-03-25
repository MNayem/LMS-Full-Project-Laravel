@extends('layouts.registration')

@section('content')
<style>
   .add_course ul li a{
       padding: 10px 20px;
       margin-right: 5px;
   }
</style>
    <center>
        <div class="add_course">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li id="nav-item">
                    <a id="nav-link" href="/addvideo" class="btn btn-primary">Add Video</a>
                  </li>
                  <li class="nav-item">
                    <a id="nav-link" href="/addaudio" class="btn btn-primary">Add Audio</a>
                  </li>
                  <li class="nav-item">
                    <a id="nav-link" href="/addtext" class="btn btn-primary">Add Text</a>
                  </li>
                   <li class="nav-item">
                    <a id="nav-link" href="/addimage" class="btn btn-primary">Add Image</a>
                  </li>
                </ul>
              </div>
            </nav>
        </div><br><br>
</center>
@endsection
