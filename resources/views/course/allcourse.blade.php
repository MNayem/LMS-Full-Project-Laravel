@foreach($course as $course)
<div class="row">
  <div class="col-md-3">
    <div class="card" style="width: 16rem;">
      <img src="images/large.png" class="card-img-top" alt="...">
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
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>

</div>
@endforeach
