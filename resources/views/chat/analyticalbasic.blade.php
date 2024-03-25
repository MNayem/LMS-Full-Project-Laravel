<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('chat.layout')
 

@section('content')
@include('layouts.registration')

    @include('layouts.menuchat')
@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<style media="screen">
    body {
      font-family: "Lato", sans-serif;
      margin-left: 20px;
    }

    .sidenav {
      height: 100%;
      width: 180px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .main {
      margin-left: 160px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 0px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
<div class="container-fluid h-100">
  <div class="row justify-content-center h-100">
  <!--<a class="btn btn-danger" href="/home" role="button"style=" height:40px;">Home</a>-->
    <!--
    <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
      <div class="card-header">
        <div class="input-group">
          <input type="text" placeholder="Search..." name="" class="form-control search">
          <div class="input-group-prepend">
            <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
          </div>
        </div>
      </div>
      <div class="card-body contacts_body">
        <ui class="contacts">
        <li class="active">
          <div class="d-flex bd-highlight">
            <div class="img_cont">
              <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
              <span class="online_icon"></span>
            </div>
            <div class="user_info">
              <span>Khalid</span>
              <p>Kalid is online</p>
            </div>
          </div>
        </li>




        </ui>
      </div>
      <div class="card-footer"></div>
    </div></div>
  -->
    <div class="col-md-8 col-xl-6 chat">
      <div class="card" >
        <div class="card-header msg_head">
          <div class="d-flex bd-highlight">
            <div class="img_cont">
              <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
              <span class="online_icon"></span>
            </div>
            <div class="user_info">
              <span>Analytical Group Chat</span>
              <p>  Messages</p>
            </div>

          </div>
          <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
          <div class="action_menu">
            <ul>
              <li><i class="fas fa-user-circle"></i> View profile</li>
              <li><i class="fas fa-users"></i> Add to close friends</li>
              <li><i class="fas fa-plus"></i> Add to group</li>
              <li><i class="fas fa-ban"></i> Block</li>
            </ul>
          </div>
        </div>
        
       <div class="card-body msg_card_body">
          @foreach($chats as $chat)
          <div class="d-flex justify-content-start mb-4">

            <div class="img_cont_msg">
              <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
            </div>

            <div class="msg_cotainer">

              {{$chat->message}}<br>
              
            </div>

          </div>
          @endforeach
          <div class="d-flex justify-content-end mb-4">
            <div class="msg_cotainer_send">
              Hi, How can I help you?
              <span class="msg_time_send">8:55 AM, Today</span>
            </div>
            <div class="img_cont_msg">
          <img src="#" class="rounded-circle user_img_msg">
            </div>
          </div>
        </div>
        <div class="card-footer">
          <form action="/mathbasicprocess" method="post" enctype="multipart/form-data  class="form-container">
            @csrf
          <div class="input-group">
            <div class="input-group-append">
              <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
            </div>
            <textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Send</button>
              <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
 
 var messageBody = document.querySelector('.msg_card_body');
messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
</script>
 

@endsection
