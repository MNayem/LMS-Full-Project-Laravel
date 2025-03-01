<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('layouts.registration2')

@section('content')

    @include('layouts.menustudent')
    
    @if(session()->has('message1'))
        <div class="alert alert-success">
            {{ session()->get('message1') }}
        </div>
    @endif
    <table class="table table-bordered table-striped table-responsive-lg" style="margin-top:50px">
    <thead class="thead-dark">
    <th colspan="10" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Inquiry Student So Far..</th>
    <tr align="center">
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Purpose</th>
        <th>Institution</th>
        <th>Selected Option</th>
        <th colspan = 3>Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($inquiry as $inquiry)
        <tr align="center">
            <td>{{$inquiry->id}}</td>
            <td>{{$inquiry->name}}</td>
            <td>{{$inquiry->email}}</td>
            <td>{{$inquiry->number}}</td>
            <td>{{$inquiry->address}}</td>
            <td>{{$inquiry->purpose}}</td>
            <td>{{$inquiry->institution}}</td>
            <td>{{$inquiry->selection}}</td>
            <td colspan=2>

                <a href="{{ url('/inquirystudentedit',$inquiry->id) }}" class="btn btn-primary">Edit </a>
                <a href="{{ url('/deleteinquirystudent',$inquiry->id) }}" class="btn btn-danger">Delete</a>
            </td>





        </tr>
    @endforeach
    </tbody>
</table>
@endsection
