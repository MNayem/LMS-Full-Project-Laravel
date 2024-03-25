<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('layouts.registration')

@section('content')

<style media="screen">
/* Style the form */
#regForm {
background-color: #ffffff;
margin: 100px auto;
padding: 40px;
width: 70%;
min-width: 300px;
}

/* Style the input fields */
input {
padding: 10px;
width: 100%;
font-size: 17px;
font-family: Raleway;
border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbbbbb;
border: none;
border-radius: 50%;
display: inline-block;
opacity: 0.5;
}

/* Mark the active step: */
.step.active {
opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
background-color: #04AA6D;
}




</style>

    @include('layouts.menustudent')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif 
<div class="main">
<form id="regForm" method="post" action="/studyabroadinquiryprocess" class="form-control">
@csrf
<h1>Inquiry form for the Student Who want to Study Abroad: </h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Name:
 <p><input type="text" placeholder="Name..." oninput="this.className = '' " name="name"></p>

</div>

<div class="tab">Your Contact Details:
 <p><input type="email" placeholder="Email.." oninput="this.className = ''" name="email"></p>
 <p><input type="text" placeholder="Phone Number" oninput="this.className = ''" name="mobile"></p>
</div>

<div class="tab">Where and When you Plan to Study:
  <select class="form-select" aria-label="Default select example" oninput="this.class" name="destination">
      <option selected>Please Select Your Destination Country</option>
      <option value="Canada">Canada</option>
      <option value="France">France</option>
      <option value="Germany">Germany</option>
      <option value="India">India</option>
      <option value="Japan">Japan</option>
      <option value="Korea">Korea</option>
      <option value="USA">USA</option>
      <option value="UK">UK</option>
    </select>
    <select class="form-select" aria-label="Default select example" oninput="this.class" name="plan">
      <option selected>Please Select When You Plan to Start Your Study</option>
      <option value="January 2022">January 2022</option>
      <option value="February 2022">February 2022</option>
      <option value="April 2022">April 2022</option>
      <option value="July 2022">July 2022</option>
      <option value="October 2022">October 2022</option>
      <option value="September 2022">September 2022</option>
    </select>
</div>

<div class="tab">Your Location and Study Desired Level:
 <p><input type="text" placeholder="Your Location.." oninput="this.className = ''" name="location"></p>
 <p><input type="text" placeholder="Your Intended Study Level" oninput="this.className = ''" name="level"></p>
</div>

<div style="overflow:auto;">
 <div style="float:right;">
   <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
   <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
 </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
</div>

</form
</div>


<script type="text/javascript">
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}


</script>

@endsection
