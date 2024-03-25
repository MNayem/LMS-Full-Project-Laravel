@extends('common.layout')

@section('content')


<!--<section class="teacherHeaderSection p-3" style="background-color:#EEF0EF;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <img style="width:80%;" class="img-fluid" src="assets/img/trainers/schools-main-image.png" alt="">
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="/trainer-teacher" style="background-color: #803487;color: white;" class="btn btn-info">See Details</a>
                </div>
            </div>
        </div>
</section>-->
@if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

<section class="formSection p-3">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6 p-3" style="box-shadow: 0px 0px 10px 0px gray;border-radius: 3%;">
                    <form class="row g-3" method="post" action="/freelancingregistrationprocess">
                        @csrf
                        <h3 class="text-center">Freelancing<hr></h3> 
                        <div class="col-12">
                          <label for="validationDefault01" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" id="validationDefault01" required>
                        </div>
                        <div class="col-12">
                          <label for="validationDefault02" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="validationDefault02" required>
                        </div>
                        <div class="col-12">
                          <label for="validationDefault02" class="form-label">Phone</label>
                          <input type="text" name="phone" class="form-control" id="validationDefault02" required>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <label class="form-label">Topics</label>
                                </div>
                                <div class="col-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Yes" id="webdevlopment" name="webdevlopment">
                                        <label class="form-check-label" for="math">
                                          Web Development
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Yes" id="webdesigning" name="webdesigning">
                                        <label class="form-check-label" for="coding">
                                          Web Designing
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Yes" id="graphicsdesigning" name="graphicsdesigning">
                                        <label class="form-check-label" for="english">
                                          Graphics Desiging
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Yes" name="others" id="others">
                                        <label class="form-check-label" for="analytical">
                                          Others
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationDefault01" class="form-label">Education Level</label>
                            <input type="text" name="educationlevel" class="form-control" id="validationDefault01" required>
                        </div>
                        <div class="col-12">
                            <label for="validationDefault01" class="form-label">Institution</label>
                            <input type="text" name="institution" class="form-control" id="validationDefault01" required>
                        </div>
                        <div class="col-12">
                            <label for="validationDefault01" class="form-label">User Name</label>
                            <input type="text" name="username" class="form-control" id="validationDefault01" >
                        </div>
                        <div class="col-12">
                            <label for="validationDefault01" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="validationDefault01" >
                        </div>
                        <div class="col-12 text-center">
                          <button class="btn btn-success" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
