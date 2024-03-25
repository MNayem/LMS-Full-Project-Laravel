<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            <th>Content Name</th>
            <th>Description</th>
            <th>Chapter</th>
            <th>Video</th>
            <th>Audio</th>
            <th>Text</th>
            <th>Image</th>
            <th>Status</th>
            <th colspan = 3>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($content as $content)
            <tr align="center">
                <td>{{$content->id}}</td>
                <td>{{$content->course_id}}</td>
                <td>{{$content->content_name}}</td>
                <td>{{$content->description}}</td>
                <td>{{$content->chapter}}</td>
                <td>{{$content->video}}</td>
                <td>{{$content->audio}}</td>
                <td>{{$content->text}}</td>
                <td>{{$content->image}}</td>
                <td>{{$content->status}}</td>
                <td colspan=2>
                    <a href="{{ url('/contentedit',$content->id) }}" class="btn btn-primary">Edit </a>
                    <a href="{{ url('/deletecontentt',$content->id) }}" class="btn btn-danger mt-2">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
