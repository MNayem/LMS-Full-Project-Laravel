@extends('common.layout')

@section('content')
@include('common.sideBarEnglish')
 <section class="englishSection my-2">
   <div class="container">
        <div class="row">
            
            <div class="col-lg-5">
                <img class="img-fluid" src="assets/img/english/people&relationship.JPG" alt="">
            </div>
            
            <div class="col-lg-7 align-self-center">
                <h1 class="text-center my-3">People & Relationship</h1>
                
                <!--<div class="row mb-3 text-center">-->
                <!--    <div class="col-lg-2"><h4>1.</h4></div>-->
                <!--    <div class="col-lg-6 mb-3">-->
                <!--        <input type="text" id="women" class="form-control">-->
                <!--        <p id="demo"></p>-->
                <!--    </div>-->
                <!--    <div class="col-lg-4"><button type="button" onclick="checkWomen()" class="btn btn-success fw-bold">Check</button></div>-->
                <!--</div>-->
                <!--<div class="row myb-3 text-center">-->
                <!--    <div class="col-lg-2"><h4>2.</h4></div>-->
                <!--    <div class="col-lg-6 mb-3">-->
                <!--        <input type="text" id="man" class="form-control">-->
                <!--        <p id="demo"></p>-->
                <!--    </div>-->
                <!--    <div class="col-lg-4"><button type="button" onclick="checkMan()" class="btn btn-success fw-bold">Check</button></div>-->
                <!--</div>-->
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="table-responsive">
                          <table class="table table-borderless">
                            <tbody>
                                <tr>
                                  <td class="fw-bold">1.</td>
                                  <td> <input type="text" id="women" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showWomen"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">2.</td>
                                  <td> <input type="text" id="man" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showMan"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">3.</td>
                                  <td> <input type="text" id="husband" class="form-control"> </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showHusband"></p></td>
                                    <td></td>
                                </tr>
                                  <td class="fw-bold">4.</td>
                                  <td> <input type="text" id="wife" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showWife"></p></td>
                                    <td></td>
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
                                  <td> <input type="text" id="baby" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showBaby"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">6.</td>
                                  <td> <input type="text" id="parents" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showParents"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">7.</td>
                                  <td> <input type="text" id="children" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showChildren"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">8.</td>
                                  <td> <input type="text" id="boy" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showBoy"></p></td>
                                    <td></td>
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
                                  <td> <input type="text" id="girl" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showGirl"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">10.</td>
                                  <td> <input type="text" id="grandparents" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showGrandparents"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">11.</td>
                                  <td> <input type="text" id="granddaughter" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showGranddaughter"></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold">12.</td>
                                  <td> <input type="text" id="grandson" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p id="showGrandson"></p></td>
                                    <td></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-info fw-bold" href="/peopleAndRelationship">Back</a>
                    <button type="button" onclick="checkAll()" class="btn btn-success fw-bold">Submit</button>
                </div>
            </div>
        </div>
   </div>
 </section>
 
<script>
function checkAll(){
    checkWomen();
    checkMan();
    checkHusband();
    checkWife();
    checkBaby();
    checkParents();
    checkChildren();
    checkBoy();
    checkGirl();
    checkGrandparents();
    checkGranddaughter();
    checkGrandson();
}

function checkWomen() {
  let x = document.getElementById("women").value;
  let text;
  if (x == 'women') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showWomen").innerHTML = text;
}
function checkMan() {
  let x = document.getElementById("man").value;
  let text;
  if (x == 'man') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showMan").innerHTML = text;
}
function checkHusband() {
  let x = document.getElementById("husband").value;
  let text;
  if (x == 'husband') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showHusband").innerHTML = text;
}
function checkWife() {
  let x = document.getElementById("wife").value;
  let text;
  if (x == 'wife') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showWife").innerHTML = text;
}

function checkBaby() {
  let x = document.getElementById("baby").value;
  let text;
  if (x == 'baby') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showBaby").innerHTML = text;
}
function checkParents() {
  let x = document.getElementById("parents").value;
  let text;
  if (x == 'parents') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showParents").innerHTML = text;
}
function checkChildren() {
  let x = document.getElementById("children").value;
  let text;
  if (x == 'children') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showChildren").innerHTML = text;
}
function checkBoy() {
  let x = document.getElementById("boy").value;
  let text;
  if (x == 'boy') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showBoy").innerHTML = text;
}

function checkGirl() {
  let x = document.getElementById("girl").value;
  let text;
  if (x == 'girl') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showGirl").innerHTML = text;
}
function checkGrandparents() {
  let x = document.getElementById("grandparents").value;
  let text;
  if (x == 'grandparents') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showGrandparents").innerHTML = text;
}
function checkGranddaughter() {
  let x = document.getElementById("granddaughter").value;
  let text;
  if (x == 'granddaughter') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showGranddaughter").innerHTML = text;
}
function checkGrandson() {
  let x = document.getElementById("grandson").value;
  let text;
  if (x == 'grandson') {text = "Right";}
  else {text = "Wrong";}
  document.getElementById("showGrandson").innerHTML = text;
}
</script> 
@endsection