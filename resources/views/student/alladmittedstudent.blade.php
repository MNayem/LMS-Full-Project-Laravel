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
<table class="table table-bordered" style="margin-top:50px;">
  <thead class="thead-dark">
    <th colspan="10" style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">All Admitted Student So Far..</th>
    <tr align="center">
      <th scope="col">No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Subject</th>
      <th scope="col" colspan = 3>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($admitted as $admitted)
        <tr align="center">
            <td>{{ $admitted->id }}</td>
            <td>{{ $admitted->fname }}</td>
            <td>{{ $admitted->lname }}</td>
            <td>{{ $admitted->email }}</td>
            <td>{{ $admitted->phone }}</td>
            <td>{{ $admitted->dob }}</td>
            <td>{{ $admitted->gender }}</td>
            <td>{{ $admitted->subject }}</td>
            
            <td colspan = 3>
                <a href="{{ url('/admittedstudentedit',$admitted->id) }}" class="btn btn-primary">Edit </a>
                <a href="{{ url('/admittedstudentdelete',$admitted->id) }}" class="btn btn-danger ml-2">Delete</a>
            </td>
        </tr>
    @endforeach
      
  </tbody>
</table>

@endsection