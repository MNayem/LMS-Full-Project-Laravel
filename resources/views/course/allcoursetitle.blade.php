@extends('layouts.registration')

@section('content')
<style>
    .add_course h2{
        text-align: right;
    }
</style>
 <p>@include('layouts.menu')</p>
    <div class="add_course">
        <h2><a href="/courseregistration" class="btn btn-primary">Add Course</a></h2>
    </div>
    <center>

    <h2>All Courses So Far..</h2><hr><br>
        
  
    @foreach ($course as $key=>$course)
            <!--<p><a href="{{ url('/coursechapter',$course->id) }}" class="text text-info">{{ $course->title }}</a></p>-->
            
            <div class="btn-group btn-group-justified">
              <a href="{{ url('/coursechapter',$course->id) }}" class="btn btn-info">{{ $course->title }}</a>
            </div>
    @endforeach
</center>
@endsection
