@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Course</h1>
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
      <form method="post" action="{{ route('course.store') }}">
          @csrf
          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="last_name">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="email">Benefit:</label>
              <input type="text" class="form-control" name="benefit"/>
          </div>
          <div class="form-group">
              <label for="difficulty">Difficulty:</label>
              <input type="text" class="form-control" name="difficulty"/>
          </div>
          <div class="form-group">
              <label for="country">Price:</label>
              <input type="text" class="form-control" name="price"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection
