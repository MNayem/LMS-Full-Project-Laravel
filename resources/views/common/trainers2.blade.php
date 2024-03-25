@extends('common.layout')

@section('content')
<!-- ======= Popular Trainer Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Trainer</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
           @foreach($trainer as $trainer)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{$trainer->image}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{$trainer->title}}</h4>
                  <p class="price">{{$trainer->price}} Tk</p>
                </div>

                <h3><a href="course-details.html">{{$trainer->title}}</a></h3>
                <p> {{$trainer->description}}   </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Trainer Item-->

           @endforeach

        </div>

      </div>
    </section><!-- End Popular Trainers Section -->
@endsection
