@extends('layouts.registration')

@section('content')
{{time()}}
@isset(@examtopics)
@foreach($examtopics as $examtopics)
  <h1>{{$examtopics->topics_name}}</h1>
  <a href="{{ route('exam.exam',$examtopics->id)}}" class="btn btn-primary">Enroll</a>

@endforeach
@endisset
@empty(@examtopics)
<p>no rscords found</p>
@endempty


@endsection
