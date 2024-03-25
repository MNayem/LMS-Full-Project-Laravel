<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@extends('layouts.registration')

@section('content')
    <p>@include('layouts.menu')</p>
            <center><h1>Edit This Course Content Info.</h1><br></center>
            <hr>
            <form action="{{ url('/contenteditprocess',$data->id) }}" method="post" enctype="multipart/form-data" class="form-control">
                @csrf
                <label style="color:#000; font-weight: bold; font-size: 20px;">Content Name: </label>
                <input type="text" name="content_name" placeholder="Content Name" value="{{ $data->content_name }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Description: </label>
                <input type="text" name="description" placeholder="Description" value="{{ $data->description }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Chapter: </label>
                <input type="text" name="chapter" placeholder="Chapter" value="{{ $data->chapter }}"<br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Video: </label>
                <input type="text" name="video" placeholder="Video" value="{{ $data->video }}"<br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Audio: </label>
                <input type="text" name="audio" placeholder="Audio" value="{{ $data->audio }}"<br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Text: </label>
                <input type="text" name="text" placeholder="Text" value="{{ $data->video }}"<br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Image: </label>
                <input type="file" name="image" placeholder="Image" value="{{ $data->video }}"<br><br>
                 <label style="color:#000; font-weight: bold; font-size: 20px;">Status: </label>
                <input type="text" name="status" placeholder="Status" value="{{ $data->status }}"<br><br><br>
                
                <input type="submit" class="btn btn-info" value="Update" name="submit">
            </form>
@endsection