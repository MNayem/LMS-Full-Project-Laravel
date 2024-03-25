<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('layouts.registration')

@section('content')
    <table class="table table-bordered table-striped table-responsive-lg" >

    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Purpose</th>
        <th>Institution</th>
        <th>Category</th>
        <th>Selcted Option</th>
        <th>Image</th>
        <th colspan = 3>Actions</th>

    </tr>
    @foreach ($student as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->number}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->purpose}}</td>
            <td>{{$student->institution}}</td>
            <td>{{$student->category}}</td>
            <td>{{$student->selection}}</td>
            <!--<td>{{$student->image}}</td>-->
            <td> <img src="{{ asset('public/images/'.$student->image) }}" width="70px" height="70px" alt=""></td>

            <td colspan=2>

                <a href="{{ url('/studentedit',$student->id) }}" class="btn btn-primary">Edit </a>
                <a href="{{ url('/deletestudent',$student->id) }}" class="btn btn-danger mt-2">Delete</a>
            </td>





        </tr>
    @endforeach
</table>
@endsection
