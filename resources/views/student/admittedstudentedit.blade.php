<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


@extends('layouts.registration2')

@section('content')

    @include('layouts.menustudent')
<br>
<center><h1>Edit This Student Info.</h1><br></center>
            <hr>
        <div class="wrapper rounded bg-white">
            <form action="{{ url('/admittedstudenteditprocess',$data->id) }}" method="post" class="form-control">
                @csrf
                <label style="color:#000; font-weight: bold; font-size: 20px;">First Name: </label>
                <input type="text" name="fname" placeholder="First Name" value="{{ $data->fname }}"><br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Last Name: </label>
                <input type="text" name="lname" placeholder="Last Name" value="{{ $data->lname }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Email: </label>
                <input type="email" name="email" placeholder="Email" value="{{ $data->email }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Phone Number: </label>
                <input type="text" name="phone" placeholder="Phone Number" value="{{ $data->phone }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Date of Birth: </label>
                <input type="date" name="dob" placeholder="Date of Birth" value="{{ $data->dob }}"<br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Gender: </label>
                <input type="text" name="gender" placeholder="Gender" value="{{ $data->gender }}"<br><br>
                 <label style="color:#000; font-weight: bold; font-size: 20px;">Subject: </label>
                <input type="text" name="subject" placeholder="Subject" value="{{ $data->subject }}"<br><br><br>
                
                <input type="submit" class="btn btn-info" value="Update" name="submit">
            </form>
        </div>
@endsection