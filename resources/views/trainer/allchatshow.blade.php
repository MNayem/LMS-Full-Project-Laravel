@extends('layouts.registration')

@section('content')

<table class="table table-bordered table-striped table-responsive-lg" >

    <tr>
        <th>No</th>
        <th>Student email</th>
        <th>Trainer email</th>
        <th>Course Code</th>
        <th colspan = 2>Actions</th>

    </tr>
    @foreach ($courses as $crud)
        <tr>
            <td>{{$crud->id}}</td>
            <td>{{$crud->student_email}}</td>
            <td>{{$crud->trainer_email}}</td>
            <td>{{$crud->course_id}}</td>
            <td>
                <a href="{{ route('courseorderedit',$crud->id)}}" class="btn btn-primary">Chat</a>
            </td>





        </tr>
    @endforeach
</table>

@endsection
