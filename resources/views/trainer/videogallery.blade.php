@extends('layouts.videolayout')

@section('content')

    <!-- Bootstrap CSS -->

     <style media="screen">
       @charset "UTF-8";
* {
  box-sizing: border-box;
}

html {
  height: 100%;
  overflow: hidden;
  width: 100%;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  font-size: 16px;
  height: auto;
  line-height: 1;
  overflow-x: hidden;
  padding: 2rem;
  width: 100%;
}

.video {
  position: relative;
  padding-top: 4.1%;
  padding-bottom: 51.95%;
  height: 0;
}
.video iframe {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  min-height: 0;
}

.video-gallery {
  margin-top: 3em;
  position: relative;
  width: 100%;
}
.video-gallery .video {
  animation: 1200ms fadeOut ease;
  animation-fill-mode: both;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-row-end: 7;
  max-height: 19.5em;
  opacity: 0;
  transition: all 300ms ease;
}
.video-gallery input[type=radio] {
  font-size: 0;
  height: 0;
  opacity: 0;
  padding: 0;
  position: fixed;
  width: 0;
}
.video-gallery input {
  grid-column-start: 1;
  grid-row-start: 1;
}
.video-gallery label {
  color: #000000;
  font-size: 1.25em;
  font-weight: 400;
  grid-column-start: 2;
  margin: 0 !important;
  padding: 1rem 0 1rem 3rem;
  position: relative;
  border-bottom: 1px solid #CCCCCC;
}
.video-gallery label:last-of-type {
  border: 0 none;
}
.video-gallery input[type=radio]:checked + label {
  color: #E41F35 !important;
}
.video-gallery input[type=radio]:checked + label:before {
  content: "▶";
  left: 0;
  top: 12px;
  position: absolute;
}

.grid-row {
  display: block;
  height: 56vw;
  max-height: 19.5em;
  position: relative;
}
.grid-row label {
  left: calc(50% + 16px);
  position: relative;
  width: calc(50% - 16px);
}
.grid-row .video {
  padding: 0;
  position: absolute;
  top: 0;
  width: 0;
}
.grid-row:after {
  content: "";
  clear: both;
  display: table;
}

#video-1:checked ~ .video-1, #video-2:checked ~ .video-2, #video-3:checked ~ .video-3, #video-4:checked ~ .video-4, #video-5:checked ~ .video-5, #video-6:checked ~ .video-6 {
  animation: 1200ms fadeIn ease;
  animation-fill-mode: both;
  opacity: 1;
  width: 50%;
}

@keyframes fadeOut {
  0% {
    display: block;
    height: 56vw;
    opacity: 1;
    width: 50%;
  }
  25% {
    display: block;
    height: 56vw;
    opacity: 1;
    width: 50%;
  }
  49% {
    display: block;
    height: 56vw;
    opacity: 0;
    width: 50%;
  }
  50% {
    display: none;
    height: 0;
    opacity: 0;
    width: 0;
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
    width: 0;
  }
  49% {
    display: none;
    height: 0;
    opacity: 0;
    width: 0;
  }
  50% {
    display: block;
    height: 56vw;
    opacity: 0;
    width: 50%;
  }
  100% {
    display: block;
    height: 56vw;
    opacity: 1;
    width: 50%;
  }
}
@supports (display: grid) {
  .grid-row {
    align-items: start;
    display: grid;
    grid-column-gap: 16px;
    grid-row-gap: 0;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;
    width: 100%;
  }
  .grid-row label {
    left: auto;
    width: 100%;
  }
  .grid-row .video {
    position: relative;
    width: 100%;
  }
  @keyframes fadeOut {
    0% {
      display: block;
      height: 56vw;
      opacity: 1;
      width: 100%;
    }
    25% {
      display: block;
      height: 56vw;
      opacity: 1;
      width: 100%;
    }
    49% {
      display: block;
      height: 56vw;
      opacity: 0;
      width: 100%;
    }
    50% {
      display: none;
      height: 0;
      opacity: 0;
      width: 0;
    }
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
      width: 0;
    }
    49% {
      display: none;
      height: 0;
      opacity: 0;
      width: 0;
    }
    50% {
      display: block;
      height: 56vw;
      opacity: 0;
      width: 100%;
    }
    100% {
      display: block;
      height: 56vw;
      opacity: 1;
      width: 100%;
    }
  }
}
@media (max-width: 767px) {
  .video-gallery {
    display: flex;
    flex-direction: column;
    height: auto;
    max-height: none;
  }
  .video-gallery label {
    left: auto;
    order: 2;
    width: 100%;
  }
  .video-gallery .video {
    order: 1;
    padding-top: 4.1%;
    padding-bottom: 51.95%;
    position: relative;
    top: auto;
    width: 100%;
  }

  #video-1:checked ~ .video-1, #video-2:checked ~ .video-2, #video-3:checked ~ .video-3, #video-4:checked ~ .video-4, #video-5:checked ~ .video-5, #video-6:checked ~ .video-6 {
    width: 100%;
  }

  @keyframes fadeOut {
    0% {
      display: block;
      height: 56vw;
      opacity: 1;
    }
    25% {
      display: block;
      height: 56vw;
      opacity: 1;
    }
    49% {
      display: block;
      height: 56vw;
      opacity: 0;
    }
    50% {
      display: none;
      height: 0;
      opacity: 0;
    }
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    49% {
      display: none;
      height: 0;
      opacity: 0;
    }
    50% {
      display: block;
      height: 56vw;
      opacity: 0;
    }
    100% {
      display: block;
      height: 56vw;
      opacity: 1;
    }
  }
}
     </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--end navbar for udemy-->
 <div class="row">
   <div class="col-sm-9">


   </div>
   <div class="col-sm-3">


   </div>

 </div>
    <h1>Hello, world!</h1>

    <div class="video video-1">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/ROqDTIxRX0Y" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video video-2">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/9iGoDNlKY-g" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video video-3">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/l70UhhNalqA" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video video-4">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/XDrB5c4-c9Y" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video video-5">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/UXP307MGQzs" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video video-6">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/0kY0Q5hdjDI" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    @endsection
