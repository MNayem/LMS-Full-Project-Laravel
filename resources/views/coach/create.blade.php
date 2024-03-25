
@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="display-3">Apply For Coach</h3>
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
      <form method="post" action="{{ route('coach.store') }}">
          @csrf
          <div class="form-group">
              <label for="title">Coach Types:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="last_name">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>


          <div class="form-group">
              <label for="country">Budget:</label>
              <input type="text" class="form-control" name="price"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Apply</button>
      </form>
  </div>
</div>
</div>
@endsection
