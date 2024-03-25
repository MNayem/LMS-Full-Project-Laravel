@extends('layouts.registration')

@section('content')
<style>
    .add_course h2{
        text-align: right;
    }
</style>
<p>@include('layouts.menu')</p>
    <div class="add_course">
        <h2><a href="/chapteradd" class="btn btn-primary">Add Chapter</a></h2>
    </div>
    <center>

    <h2>All Chapter Under This Course So Far..</h2><hr><br>
        
  
    @foreach ($chapter as $key=>$chapter)
            <!--<p><a href="{{ url('/chaptercontent',$chapter->id) }}" class="text text-info">{{ $chapter->name }}</a></p>-->
            
             <div class="btn-group btn-group-justified">
              <a href="{{ url('/chaptercontent',$chapter->id) }}" class="btn btn-info">{{ $chapter->name }}</a>
            </div>
    @endforeach
</center>
@endsection
