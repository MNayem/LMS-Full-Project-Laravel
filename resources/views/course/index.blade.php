<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@extends('layouts.registration')


@section('content')
    @include('layouts.menu')
    @if(session()->has('message1'))
        <div class="alert alert-success">
            {{ session()->get('message1') }}
        </div>
    @endif
    <table class="table table-bordered table-striped table-responsive-lg" >
        
        <thead>
            <th colspan="12" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Courses So Far..</th>
        <tr align="center">
            <th>No</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            <th>Benefit</th>
            <th>Difficulty</th>
            <th>Price</th>
            <th>Category</th>
            <th>Course Category</th>
            <th>Image</th>
            <th colspan = 3>Actions</th>
        </tr>
        </thead>
        <tbody>
         @foreach ($course as $course)
        <tr align="center">
            <td>{{$course->id}}</td>
            <td>{{$course->email}}</td>
            <td>{{$course->title}}</td>
            <td>{{$course->description}}</td>
            <td>{{$course->benefit}}</td>
            <td>{{$course->difficulty}}</td>
            <td>{{$course->price}}</td>
            <td>{{$course->category}}</td>
            <td>{{$course->ccategory}}</td>
            <!--<td><img src="{{ URL::asset('storage/app/images/3.jpg') }}" alt="Image" title=""></td>-->
            <td> <img src="{{ $course->image }}" width="100px" height="100px" alt="Images"></td>

            <td colspan=2>

                <a href="{{ url('/courseedit',$course->id) }}" class="btn btn-primary">Edit </a>
                <a href="{{ url('/deletecourse',$course->id) }}" class="btn btn-danger">Delete</a>
            </td>





        </tr>
    @endforeach
    </tbody>
    </table>
@endsection
