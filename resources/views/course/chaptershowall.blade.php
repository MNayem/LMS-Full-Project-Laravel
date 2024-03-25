<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@extends('layouts.registration')

@section('content')
<p>@include('layouts.menu')</p>
    @if(session()->has('message1'))
        <div class="alert alert-success">
            {{ session()->get('message1') }}
        </div>
    @endif
    <table class="table table-bordered table-striped table-responsive-lg" >
    <thead>
        <tr align="center">
            <th>No</th>
            <th>Course Id</th>
            <th>Chapter Name</th>
            <th>Description</th>
            <th colspan = 3>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($chapter as $chapter)
            <tr align="center">
                <td>{{$chapter->id}}</td>
                <td>{{$chapter->course_id}}</td>
                <td>{{$chapter->name}}</td>
                <td>{{$chapter->description}}</td>
                <td colspan=2>
    
                    <a href="{{ url('/chapteredit',$chapter->id) }}" class="btn btn-primary">Edit </a>
                    <a href="{{ url('/chapterdelete',$chapter->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
