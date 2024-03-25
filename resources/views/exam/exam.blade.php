@extends('layouts.registration')

@section('content')
{{$id}} <br>
{{time()}}
 <h1>Exam name</h1>
 <h2>Question 1 of 3:</h2>
 <h3>Question</h3>
 <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"  >
  <label class="form-check-label" for="exampleRadios1">
    Default radio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Second default radio
  </label>
</div>
<div class="form-check  ">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3"  >
  <label class="form-check-label" for="exampleRadios3">
    Disabled radio
  </label>
</div>
  <button type="button" name="button">next</button>
@endsection
