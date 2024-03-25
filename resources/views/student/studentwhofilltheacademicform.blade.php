<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('layouts.registration')

@section('content')

    @include('layouts.menustudent')
    
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table table-bordered table-striped table-responsive-lg" style="margin-top:50px">
    <thead class="thead-dark">
    <th colspan="20" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Student who fill the Academic form So Far..</th>
    <tr align="center">
        <th>No</th>
        <th>Dream in Life</th>
        <th>Physics</th>
        <th>Chemistry</th>
        <th>Biology</th>
        <th>Mathematics</th>
        <th>Higher Mathematics</th>
        <th>Accounting</th>
        <th>Finance</th>
        <th>Name</th>
        <th>Address</th>
        <th>Education</th>
        <th>Institution</th>
        <th>Phone No.</th>
        <th>Email</th>
        <th>User Name</th>
        <th>Password</th>
        <th>Image</th>
        <th colspan = "2">Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($studentwhofillupacademicform as $studentwhofillupacademicform)
        <tr align="center">
            <td>{{ $studentwhofillupacademicform->id }}</td>
            <td>{{ $studentwhofillupacademicform->aiminlife }}</td>
            <td>{{ $studentwhofillupacademicform->physics }}</td>
            <td>{{ $studentwhofillupacademicform->chemistry }}</td>
            <td>{{ $studentwhofillupacademicform->biology }}</td>
            <td>{{ $studentwhofillupacademicform->mathematics }}</td>
            <td>{{ $studentwhofillupacademicform->hmathematics }}</td>
            <td>{{ $studentwhofillupacademicform->accounting }}</td>
            <td>{{ $studentwhofillupacademicform->finance }}</td>
            <td>{{ $studentwhofillupacademicform->name }}</td>
            <td>{{ $studentwhofillupacademicform->address }}</td>
            <td>{{ $studentwhofillupacademicform->education }}</td>
            <td>{{ $studentwhofillupacademicform->institution }}</td>
            <td>{{ $studentwhofillupacademicform->mobile }}</td>
            <td>{{ $studentwhofillupacademicform->email }}</td>
            <td>{{ $studentwhofillupacademicform->username }}</td>
            <td>{{ $studentwhofillupacademicform->password }}</td>
            <td> <img src="{{ $studentwhofillupacademicform->image }}" width="100px" height="100px" alt=""></td>
            <td colspan=2>
                <a href="{{ url('/deletestudentwhofillacademicform',$studentwhofillupacademicform->id) }}" class="btn btn-danger">Delete</a>
            </td>


        </tr>
    @endforeach
    </tbody>
</table>
@endsection
