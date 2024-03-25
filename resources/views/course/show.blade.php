@extends('layouts.registration')

@section('content')
 <h2 class="text-center">This Course</h2>
 <hr>

   <!--
 <table class="table table-striped">
   <thead>
       <tr>
         <td>ID</td>
         <td>Email</td>
         <td>Title</td>

         <td>Description</td>
         <td>Benefit</td>
         <td>Difficulty</td>
         <td>Price</td>
         <td colspan = 2>Actions</td>
       </tr>
   </thead>
   <tbody>
   -->
   <div class="row">

       <!--
       <tr>
           <td>{{$course->id}}</td>
           <td>{{$course->email}} </td>
           <td>{{$course->title}}</td>
           <td>{{$course->description}}</td>
           <td>{{$course->benefit}}</td>
           <td>{{$course->difficulty}}</td>
           <td>{{$course->price}}</td>
           <td>
               <a href="{{ route('course.edit',$course->id)}}" class="btn btn-primary">Buy</a>
           </td>
           <td>

               <button class="btn btn-danger" type="submit">Favourite</button>
           </td>
       </tr>

   </tbody>
 </table>
-->

<!--end of part 1 -->


  <div class="col-6 offset-3" style="margin-top:20px; ">
    <div class="card" style="width: 24rem;">

      <div class="card-body">
        <h5 class="card-title">{{$course->title}}</h5>
        <p class="card-text">  {{$course->description}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$course->benefit}}</li>
        <li class="list-group-item">{{$course->difficulty}}</li>
        <li class="list-group-item">{{$course->price}}</li>
      </ul>
      <div class="card-body">
        <a href="{{ route('course.edit',$course->id)}}" class="btn btn-primary">Enroll</a>


      </div>
    </div>
  </div>



</div>














@endsection
