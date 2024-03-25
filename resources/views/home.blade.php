@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are normal user.
                    <br>
                   <p>your email is {{ Auth::user()->email }}</p>
                   <table class="table table-bordered table-responsive-lg">
                       <tr>
                           <th>No</th>
                           <th>email</th>
                           <th>description</th>

                       </tr>
                       @foreach ($cruds as $crud)
                           <tr>
                               <td>{{$crud->id}}</td>
                               <td>{{$crud->email}}</td>
                               <td>{{$crud->description}}</td>




                           </tr>
                       @endforeach
                   </table>

                   <table class="table table-bordered table-responsive-lg">
                       <tr>
                           <th>No</th>
                           <th>email</th>


                       </tr>
                       @foreach ($users as $user)
                           <tr>
                               <td>{{$user->id}}</td>
                               <td>{{$user->email}}</td>





                           </tr>
                       @endforeach
                   </table>
                   <br>

                     {{ Auth::user()->email }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
