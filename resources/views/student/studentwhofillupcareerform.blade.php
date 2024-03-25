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
    <th colspan="17" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Student who fill the Career form So Far..</th>
    <tr align="center">
        <th>No</th>
        <th>Career Plan</th>
        <th>Mathematics</th>
        <th>English</th>
        <th>Analytical</th>
        <th>Others</th>
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
    @foreach ($studentwhofillupcareerform as $studentwhofillupcareerform)
        <tr align="center">
            <td>{{ $studentwhofillupcareerform->id }}</td>
            <td>{{ $studentwhofillupcareerform->career_plan }}</td>
            <td>{{ $studentwhofillupcareerform->mathematics }}</td>
            <td>{{ $studentwhofillupcareerform->english }}</td>
            <td>{{ $studentwhofillupcareerform->analytical }}</td>
            <td>{{ $studentwhofillupcareerform->others }}</td>
            <td>{{ $studentwhofillupcareerform->name }}</td>
            <td>{{ $studentwhofillupcareerform->address }}</td>
            <td>{{ $studentwhofillupcareerform->education }}</td>
            <td>{{ $studentwhofillupcareerform->institution }}</td>
            <td>{{ $studentwhofillupcareerform->mobile }}</td>
            <td>{{ $studentwhofillupcareerform->email }}</td>
            <td>{{ $studentwhofillupcareerform->username }}</td>
            <td>{{ $studentwhofillupcareerform->password }}</td>
            <td> <img src="{{ $studentwhofillupcareerform->image }}" width="100px" height="100px" alt=""></td>
            <td colspan=2>
                <a href="{{ url('/deletestudentwhofillcareerform',$studentwhofillupcareerform->id) }}" class="btn btn-danger">Delete</a>
            </td>


        </tr>
    @endforeach
    </tbody>
</table>
@endsection
