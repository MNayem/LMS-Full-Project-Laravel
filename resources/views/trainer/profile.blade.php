@extends('layouts.registration')

@section('content')
    <style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>
<body>
<div class="container">
    <div class="main-body">

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">

                      @foreach($profiles as $profile)

                      <h4> {{$profile->name}}</h4>
                      <br>

                      @endforeach


                      <p class="text-secondary mb-1"> {{$abc}}</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">

                <ul class="list-group list-group-flush">



                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"> Training</h6>
                    <span class="text-secondary"><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>

</div></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"> {{$profile->training_online}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"> Course</h6>
                     @if(is_null($profile->course))

                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>

                     @elseif($profile->course=='yes')
                       <span class="text-secondary"><div class="form-check form-switch">
     <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked  disabled>
                      </span>
                      @else
                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>


                     @endif
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"> Training</h6>
                     @if(is_null($profile->training))

                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>

                     @elseif($profile->training=='yes')
                       <span class="text-secondary"><div class="form-check form-switch">
     <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked  disabled>
                      </span>
                      @else
                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>


                     @endif
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"> Consultant</h6>
                     @if(is_null($profile->consulting))

                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>

                     @elseif($profile->consulting=='yes')
                       <span class="text-secondary"><div class="form-check form-switch">
     <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked  disabled>
                      </span>
                      @else
                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>


                     @endif
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"> Mentor</h6>
                     @if(is_null($profile->mentor))

                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>

                     @elseif($profile->mentor=='yes')
                       <span class="text-secondary"><div class="form-check form-switch">
     <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked  disabled>
                      </span>
                      @else
                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>


                     @endif
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"> Coaching</h6>
                     @if(is_null($profile->Coaching))

                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>

                     @elseif($profile->Coaching=='yes')
                       <span class="text-secondary"><div class="form-check form-switch">
     <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked  disabled>
                      </span>
                      @else
                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>


                     @endif
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"> Coaching One to One</h6>
                     @if(is_null($profile->coaching_online_onetoone))

                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>

                     @elseif($profile->coaching_online_onetoone=='yes')
                       <span class="text-secondary"><div class="form-check form-switch">
     <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked  disabled>
                      </span>
                      @else
                      <span class="text-secondary"><div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"   disabled>
                     </span>


                     @endif
                  </li>

                </ul>

              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    @foreach($profiles as $profile)
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$profile->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$profile->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>

</div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
             
            </div>
          </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
   var app = @json($profiles);
   console.log(app);

</script>
 @endsection
