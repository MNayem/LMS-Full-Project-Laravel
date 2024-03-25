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


<div class="main">
<form id="regForm" method="post" action="{{ route('course.store') }}">
@csrf
<h1>Coaching Register:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Title:
 <p><input placeholder="Title..." oninput="this.className = '' " name="title"></p>

</div>

<div class="tab">Category:
 <p><input placeholder="Category.." oninput="this.className = ''" name="ccategory"></p>
 <p><input type="number" placeholder="Price" oninput="this.className = ''" name="price"></p>
</div>

<div class="tab">Others:
 <p><input placeholder="description" oninput="this.className = ''" name="description"></p>
 <p><input placeholder="Difficulty" oninput="this.className = ''" name="difficulty"></p>
 <p><input placeholder="Benefit" oninput="this.className = ''" name="benefit"></p>
</div>

<div class="tab">File Upload:
 <p><input type="file"  oninput="this.className = ''"></p>

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
