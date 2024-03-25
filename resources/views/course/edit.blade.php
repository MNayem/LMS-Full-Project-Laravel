@extends('layouts.registration')

@section('content')
 <h2 class="text-center">Fill the form</h2>
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

       @foreach($course as $course)


<!--end of part 1 -->



    <div class="col">
      <div class="row">
       <div class="col-sm-8 offset-sm-2">
          <h1 class="display-3">Fill</h1>
        <div>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
            <form method="get" action="{{ route('course.create') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Code</label>
                    <input type="text" class="form-control" name="course_id" value="{{$course->id}}"/>
                </div>
                <div class="form-group">
                    <label for="title">Trainer Email</label>
                    <input type="text" class="form-control" name="trainer_email" value="{{$course->email}}"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Amount:</label>
                    <input type="text" class="form-control" name="amount" value="{{$course->price}}"/>
                </div>



                <button type="submit" class="btn btn-primary-outline">Confirm</button>
            </form>
        </div>
      </div>
      </div>

    </div>


@endforeach
</div>














@endsection
