<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('layouts.registration')

@section('content')

    @include('layouts.menustudent')

<br>
            <center><h1>Edit This Inquiry Student Info.</h1><br></center>
            <hr>
            <form action="{{ url('/inquirystudenteditprocess',$data->id) }}" method="post" class="form-control">
                @csrf
                <label style="color:#000; font-weight: bold; font-size: 20px;">Name: </label>
                <input type="text" name="name" placeholder="Name" value="{{ $data->name }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Email: </label>
                <input type="email" name="email" placeholder="email" value="{{ $data->email }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Phone Number: </label>
                <input type="number" name="number" placeholder="Phone Number" value="{{ $data->number }}"><br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Address: </label>
                <input type="text" name="address" placeholder="Address" value="{{ $data->address }}"<br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Purpose: </label>
                <input type="text" name="purpose" placeholder="Purpose" value="{{ $data->purpose }}"<br><br>
                <label style="color:#000; font-weight: bold; font-size: 20px;">Institution: </label>
                <input type="text" name="institution" placeholder="Institution" value="{{ $data->institution }}"<br><br>
                
                <label style="color:#000; font-weight: bold; font-size: 20px;">Selected Option: </label>
                <input type="text" name="selection" placeholder="Selected Option" value="{{ $data->selection }}"<br><br><br>
                
                <input type="submit" class="btn btn-info" value="Update" name="submit">
            </form>
@endsection