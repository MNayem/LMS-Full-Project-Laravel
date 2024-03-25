<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@extends('layouts.registration')

@section('content')
<p>@include('layouts.menu')</p>
            <center><h1>Edit This Course Info.</h1><br></center>
            <hr>
          <form action="{{ url('/courseeditprocess',$data->id) }}" method="post" enctype="multipart/form-data" class="form-control">
                @csrf
                <label style="color:#000; font-weight: bold; font-size: 20px;">Title: </label>
                <input type="text" name="title" placeholder="Title" value="{{ $data->title }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Description: </label>
                <input type="text" name="description" placeholder="Description" value="{{ $data->description }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Benefit: </label>
                <input type="text" name="benefit" placeholder="Benefit" value="{{ $data->benefit }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Difficulty: </label>
                <input type="text" name="difficulty" placeholder="Difficulty" value="{{ $data->difficulty }}"><br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Price: </label>
                <input type="number" name="price" placeholder="Price" value="{{ $data->price }}"><br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Category: </label>
                <input type="text" name="category" placeholder="Category" value="{{ $data->category }}"><br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Course Category: </label>
                <input type="text" name="ccategory" placeholder="Course Category" value="{{ $data->ccategory }}"><br><br><br>
                
                <!--<label>Image Upload: </label>
                <input type="file" name="image" placeholder="Image" value="{{ $data->image }}"<br><br>-->
                
                <input type="submit" class="btn btn-info" value="Update" name="submit">
            </form>
@endsection