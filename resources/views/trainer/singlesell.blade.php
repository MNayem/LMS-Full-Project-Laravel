@extends('layouts.registration')

@section('content')
<style media="screen">
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

body {
  background-color: #eee;
  font-family: 'Roboto', sans-serif
}

.card {
  background-color: #B9F6CA;
  width: 350px;
  border-radius: 20px
}

.heading {
  font-weight: 700
}

.hour {
  margin-top: 1px;
  color: green;
  font-size: 12px
}

.ratings i {
  color: #388E3C
}

.btn {
  border-radius: 15px !important
}

.line-color {
  color: green;
  height: 3px
}
</style>


<div class="container mt-5 d-flex justify-content-start">
    <div class="card p-4 mt-3">
        <div class="first">
            <h6 class="heading">Exquisite hand henna tattoo</h6>
            <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                <div class="d-flex align-items-center"> <i class="fa fa-clock-o clock"></i> <span class="hour ml-1">3 hrs</span> </div>
                <div> <span class="font-weight-bold">$90</span> </div>
            </div>
        </div>
        <div class="second d-flex flex-row mt-2">
            <div class="image mr-3"> <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="60" /> </div>
            <div class="">
                <div class="d-flex flex-row mb-1"> <span>@hairtaje</span>
                    <div class="ratings ml-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div> <button class="btn btn-outline-dark btn-sm px-2">+ follow</button> <button class="btn btn-outline-dark btn-sm">See Profile</button> <button class="btn btn-outline-dark btn-sm"><i class="fa fa-comment-o"></i></button> </div>
            </div>
        </div>
        <hr class="line-color">
        <h6>48 comments</h6>
        <div class="third mt-4"> <button class="btn btn-success btn-block"><i class="fa fa-clock-o"></i> Book Now</button>
        </div>
    </div>
</div>
</div>
@endsection
