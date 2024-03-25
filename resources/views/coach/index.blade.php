@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
   <h1 class="display-3">Your Coach List</h1>
 <table class="table table-striped">
   <thead>
       <tr>
         <td>ID</td>
         <td>Email</td>
         <td>Title</td>

         <td>Description</td>

         <td>Price</td>
         <td colspan = 2>Actions</td>
       </tr>
   </thead>
   <tbody>
       @foreach($course as $course)
       <tr>
           <td>{{$course->id}}</td>
           <td>{{$course->email}} </td>
           <td>{{$course->title}}</td>
           <td>{{$course->description}}</td>
           
           <td>{{$course->price}}</td>
           <td>
               <a href="{{ route('course.edit',$course->id)}}" class="btn btn-primary">Enroll</a>
           </td>
           <td>

               <button class="btn btn-danger" type="submit">Favourite</button>
           </td>
       </tr>
       @endforeach
   </tbody>
 </table>
<div>
</div>
@endsection
