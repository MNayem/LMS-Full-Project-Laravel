@extends('layouts.registration')

@section('content')
            <center><h1>Edit This Student Info.</h1><br></center>
            <hr>
            <form action="{{ url('/studenteditprocess',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Name: </label>
                <input type="text" name="name" placeholder="Name" value="{{ $data->name }}"><br><br>
                
                <label>Email: </label>
                <input type="email" name="email" placeholder="email" value="{{ $data->email }}"><br><br>
                
                <label>Phone Number: </label>
                <input type="number" name="number" placeholder="Phone Number" value="{{ $data->number }}"><br><br>
                
                <label>Address: </label>
                <input type="text" name="address" placeholder="Address" value="{{ $data->address }}"<br><br>
                
                <label>Purpose: </label>
                <input type="text" name="purpose" placeholder="Purpose" value="{{ $data->purpose }}"<br><br>
                 <label>Institution: </label>
                <input type="text" name="institution" placeholder="Institution" value="{{ $data->institution }}"<br><br>
                <label>Selection: </label>
                <input type="text" name="selection" placeholder="Selection" value="{{ $data->selection }}"<br><br>
                
                <!--<label>Image Upload: </label>
                <input type="file" name="image" placeholder="Image" value="{{ $data->image }}"<br><br>-->
                
                <input type="submit" value="Update" name="submit">
            </form>
@endsection