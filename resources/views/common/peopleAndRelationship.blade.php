@extends('common.layout')

@section('content')

@include('common.sideBarEnglish')

 <section class="englishSection my-3">
   <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img class="img-fluid" src="assets/img/english/people&relationship.JPG" alt="">
            </div>
            <div class="col-lg-7 align-self-center">
                <h1 class="text-center my-3">People & Relationship</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="table-responsive">
                          <table class="table table-borderless">
                            <tbody>
                                <tr>
                                  <td class="fw-bold">1.</td>
                                  <td>women</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">2.</td>
                                  <td>man</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">3.</td>
                                  <td>husband</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">4.</td>
                                  <td>wife</td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="table-responsive">
                          <table class="table table-borderless">
                            <tbody>
                                <tr>
                                  <td class="fw-bold">5.</td>
                                  <td>baby</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">6.</td>
                                  <td>parents</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">7.</td>
                                  <td>children</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">8.</td>
                                  <td>boy</td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="table-responsive">
                          <table class="table table-borderless">
                            <tbody>
                                <tr>
                                  <td class="fw-bold">9.</td>
                                  <td>girl</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">10.</td>
                                  <td>grandparents</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">11.</td>
                                  <td>granddaughter</td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">12.</td>
                                  <td>grandson</td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                <div class="text-center"><a class="btn btn-success fw-bold" href="/englishPractice">Practice</a></div>
            </div>
        </div>
   </div>
 </section>
 
@endsection
