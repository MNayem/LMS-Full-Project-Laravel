@extends('common.layout')

@section('content')
<!-- ======= Trainers Section ======= -->
  <section class="trainerSection">
    <style>
    .items{
        width: 95%;
        position: relative;
        overflow: hidden;
        border-radius: 100%;
    }
    .shadow{
        background: black;
        opacity: .99;
        height: 100%;
        width: 100%;
        position: absolute;
        top: -100%;
        transition: .9s;
    }
    .items:hover .shadow{top: 0;}
    .items img{
      width: 100%;
    }
    .ourText{
        margin: 20% auto 0;
        width: 100%;
        padding: 10%;
        text-align: center;
    }
    .ourText h2 {color: white;}
    .ourText p {color: white;}
    </style>
        <div class="container">
          <div class="row text-center">
            <h1 data-aos="zoom-in">Trainers</h1>
             <div class="col-xl-3 col-md-3 col-sm-6 my-5" data-aos="zoom-in">
              <div class="items">
                <img src="assets/img/bari.jpg" alt="">
                <div class="shadow">
                    <div class="ourText">
                        <h2>Abdul Bari</h2>
                        <hr>
                        <p>English Teacher</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-6 my-5" data-aos="zoom-in">
              <div class="items">
                <img src="assets/img/shamim_vai.jpg" alt="">
                <div class="shadow">
                    <div class="ourText">
                        <h2>SHAMIM REZA</h2>
                        <hr>
                        <p style="font-size:.8rem">Software Development All</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-6 my-5" data-aos="zoom-in">
              <div class="items">
                <img src="assets/img/joy_vai.jpg" alt="">
                <div class="shadow">
                    <div class="ourText">
                        <h2>JAMAL HOSSAIN</h2>
                        <hr>
                        <p>Analytical All</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-6 my-5" data-aos="zoom-in">
              <div class="items">
                <img src="assets/img/nayem.jpg" alt="">
                <div class="shadow">
                    <div class="ourText">
                        <h2>MD NAYEM</h2>
                        <hr>
                        <p>Mathematics All</p>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
    </section> 
    
@endsection
