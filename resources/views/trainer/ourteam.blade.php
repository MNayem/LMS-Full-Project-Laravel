@extends('layouts.registration')

@section('content')

<style media="screen">
body {
  margin: 0;
  font-family: 'Noto Sans HK', sans-serif;
  height: 1000px
}

#container {
  width: 80%;
  position: relative;
  left: 10%
}

#heading {
  width: 100%;
  height: 80px;
  background-color: cadetblue;
  color: white;
  position: relative;
  top: -20px
}

h1 {
  font-family: 'Noto Sans HK', sans-serif;
  text-align: center;
  position: relative;
  top: 25px
}

.team {
  width: 350px;
  height: 330px;
  border-radius: 8px
}

.item {
  overflow: hidden;
  width: 33.33335%;
  float: left;
  height: 330px;
  margin-bottom: 20px;
  cursor: pointer;
  border-radius: 8px
}

.front {
  float: left;
  backface-visibility: hidden;
  transform: perspective(600px) rotateX(0deg);
  transition: 1.5s;
  overflow: hidden;
  backface-visibility: hidden;
  border-radius: 8px
}

.back {
  width: 97%;
  height: 350px;
  background-color: #bcaaa4;
  position: relative;
  top: -350px;
  transform: perspective(600px) rotateX(180deg);
  transition: 1.5s;
  overflow: hidden;
  backface-visibility: hidden;
  box-shadow: 0 0 35px brown;
  border-radius: 8px
}

.title {
  position: relative;
  top: 110px;
  text-align: center;
  font-size: 30px;
  color: #f4511e
}

.job {
  position: relative;
  top: 90px;
  text-align: center;
  font-size: 25px
}

@keyframes move {
  0% {
      position: relative;
      top: 0px
  }

  100% {
      position: relative;
      top: 80px
  }
}

.social {
  position: relative;
  top: 90px;
  color: black;
  margin-right: 10px;
  justify-content: center;
  align-content: center;
  align-items: center;
  position: relative;
  left: 34%
}

.fa-facebook-square:hover {
  color: #3B558D
}

.fa-linkedin:hover {
  color: #007BB6
}

.fa-twitter-square:hover {
  color: #2CAAE1
}

.item:hover>.front {
  transform: perspective(600px) rotateX(-180deg)
}

.item:hover>.back {
  transform: perspective(600px) rotateX(0deg)
}

@media only screen and (max-width:900px) {
  .item {
      width: 49%;
      position: relative;
      left: 3.5%
  }

  .front,
  .back {
      width: 90%
  }
}

@media only screen and (max-width:650px) {
  .item {
      width: 100%;
      position: relative;
      left: 0
  }

  .front,
  .back {
      width: 100%
  }

  .team {
      width: 600px
  }
}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <div id="container">
        <div id="heading">
            <h1>OUR TEAM</h1>
        </div>
        <div class="item">
            <div class="front"> <img id="team1" class="team" src="https://www.supercuts.com/content/dam/supercuts/www/models/2017-models/1x1/heroes/supercuts-spencer-hero-hairstyles-classic-fade-1x1.png/_jcr_content/renditions/cq5dam.web.320.320.medium.png"> </div>
            <div class="back">
                <p class="title">Tom Crow</p>
                <p class="job">Interface Designer</p> <a href="#"><i class="fab fa-facebook-square social fa-2x"></i></a> <a href="#"><i class="fab fa-linkedin social fa-2x"></i></a> <a href="#"><i class="fab fa-twitter-square social fa-2x"></i></a>
            </div>
        </div>
        <div class="item">
            <div class="front"> <img id="team2" class="team" src="https://www.eikonphoto.com/wp-content/uploads/2017/03/male-headshot-tie-color-e1515795186596.jpg"> </div>
            <div class="back">
                <p class="title">Tom Crow</p>
                <p class="job">Interface Designer</p> <a href="#"><i class="fab fa-facebook-square social fa-2x"></i></a> <a href="#"><i class="fab fa-linkedin social fa-2x"></i></a> <a href="#"><i class="fab fa-twitter-square social fa-2x"></i></a>
            </div>
        </div>
        <div class="item">
            <div class="front"> <img id="team3" class="team" src="https://www.ellasophiephoto.com/IMAGES/portraits/Portrait-Photographer-EllaSophie-OaklandStudio.jpg"> </div>
            <div class="back">
                <p class="title">Tom Crow</p>
                <p class="job">Interface Designer</p> <a href="#"><i class="fab fa-facebook-square social fa-2x"></i></a> <a href="#"><i class="fab fa-linkedin social fa-2x"></i></a> <a href="#"><i class="fab fa-twitter-square social fa-2x"></i></a>
            </div>
        </div>
        <div class="item">
            <div class="front"> <img id="team4" class="team" src="https://static1.squarespace.com/static/51047986e4b0f96ff4ffc8e0/t/58efb3ba5016e1685c551ae7/1492104152438/Mens-Accessories-Tie-Bow-pocket-square"> </div>
            <div class="back">
                <p class="title">Tom Crow</p>
                <p class="job">Interface Designer</p> <a href="#"><i class="fab fa-facebook-square social fa-2x"></i></a> <a href="#"><i class="fab fa-linkedin social fa-2x"></i></a> <a href="#"><i class="fab fa-twitter-square social fa-2x"></i></a>
            </div>
        </div>
        <div class="item">
            <div class="front"> <img id="team5" class="team" src="https://i.pinimg.com/originals/98/c8/0d/98c80de7cee9782322fdca55409bf6bc.jpg"> </div>
            <div class="back">
                <p class="title">Tom Crow</p>
                <p class="job">Interface Designer</p> <a href="#"><i class="fab fa-facebook-square social fa-2x"></i></a> <a href="#"><i class="fab fa-linkedin social fa-2x"></i></a> <a href="#"><i class="fab fa-twitter-square social fa-2x"></i></a>
            </div>
        </div>
        <div class="item">
            <div class="front"> <img id="team6" class="team" src="https://i.pinimg.com/originals/85/1e/7a/851e7a776927d4302e637ae511a3e372.jpg"> </div>
            <div class="back">
                <p class="title">Tom Crow</p>
                <p class="job">Interface Designer</p> <a href="#"><i class="fab fa-facebook-square social fa-2x"></i></a> <a href="#"><i class="fab fa-linkedin social fa-2x"></i></a> <a href="#"><i class="fab fa-twitter-square social fa-2x"></i></a>
            </div>
        </div>
    </div>
@endsection
