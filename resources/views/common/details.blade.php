

@extends('common.layout')

@section('content')

 <style>
            
            #regForm {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
            }
            #regForm1 {
            background-color: #ffffff;
            margin: 20px auto;
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
            .tab1{
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
             .step1 {
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
             .step1.active {
            opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
            background-color: #04AA6D;
            }
            .step1.finish {
            background-color: #04AA6D;
            }
            #courses ul li a:hover{
                color: green;
                background-color: black;
            }
            .tab{
                font-size: 20px;
            }
             .tab1{
                font-size: 20px;
            }
        </style>
         @if(session()->has('message'))
                <div class="alert alert-success" style="margin-top: 200px;">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if(session()->has('message1'))
                <div class="alert alert-success" style="margin-top: 200px;">
                    {{ session()->get('message1') }}
                </div>
            @endif

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
          <div class="card">
                      <img class="card-img-top img-fluid" src="images/career.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; font-size: 36px;background-color:green;color:white;text-align:center; font-family: comic sans MS;">CAREER</h5>
                        <p class="card-text"style="font-size:1.5em">Welcome to the Career Section. Are ayou worried about your career or confused to choose your career path? </br>
                        You will get all sorts of information and motivation here that you need to make your Career.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"style="font-size:1.5em">Career Counselation</li>
                        <li class="list-group-item"style="font-size:1.5em">Career Guideline</li>
                        <li class="list-group-item"style="font-size:1.5em">Preparation for different direction</li>
                      </ul>
                      <div class="card-body">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal1"style="font-size:1.5em;background-color:green;color:white;">
                                    Next
                      </div>
                      <!-- The Modal -->
                                <div class="modal" id="myModal1">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="font-weight: bold; font-size: 18px;">Please Fill The Career Form</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                      </div>
                                
                                      <!-- Modal body -->
                                     <div class="modal-body">
                                        <form id="regForm" method="post" action="/training" enctype="multipart/form-data" style="background: #5FCF80; border-radius: 25px;  border: 2px solid #0000FF; width: 90%;">
                                         @csrf
                     
                                         <div class="tab">
                                            <center></center> <h1 style="background-color:blue; text-align:center; color:white;"><b><i>CAREER</i></b></h1> </center>
                                             <h1 style="font-size:26px;">What is your career plan?</h1>
                                          <p>
                                              <select type="text-area" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" oninput="this.className = '' " name="career_plan">
                                                  <option style="font-size:20px;" value="" selected hidden >Choose your Career Plan</option>
                                                   <option value="Work Abroad">Work Abroad</option>
                                                  <option value="Bank Job">Bank Job</option>
                                                  <option value="BCS">BCS</option>
                                                  <option value="Other Government Job">Other Government Job</option>
                                                   <option value="Study Abroad">Study Abroad</option>
                                                 
                                                </select>
                                          </p>
                                          <hr>
                                          <p><b>Please</b> Select Your Obstacles from the below list: </p>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Yes" id="mathematics" name="mathematics" >
                                              <label class="form-check-label ml-2" for="mathematics">
                                               Competetive Math
                                              </label>
                                            </div>
                                            
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Yes" id="english" name="english" >
                                              <label class="form-check-label ml-2" for="english">
                                                Competetive English
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Yes" id="analytical" name="analytical" >
                                              <label class="form-check-label ml-2" for="analytical">
                                                Analytical Ability
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Yes" id="others" name="others" >
                                              <label class="form-check-label ml-2" for="others">
                                                Others
                                              </label>
                                            </div>
                                         </div>
                                    
                                         <div class="tab">Student Information:
                                          
                                          <p><input placeholder="name" name="name" oninput="this.className = ''" ></p>
                                    
                                          <p><input type="text-area" placeholder="Address" oninput="this.className = ''" name="address"></p>
                                          
                                          <p>
                                             <select type="text-area" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" oninput="this.className = '' " name="education">
                                                  <option value="" selected hidden>Choose your Education level</option>
                                                  <option value="M.Sc">M.Sc</option>
                                                  <option value="B.Sc">B.Sc</option>
                                                  </option>
                                                  <option value="Hons">Hons</option>
                                                   <option value="Honsrunning">Hons or MS running</option>
                                                  </option>
                                                  <option value="MS">MS</option>
                                                  <option value="HSC">HSC</option>
                                                  <option value="SSC">SSC</option>
                                                </select> 
                                          </p>
                                          <p><input type="text-area" placeholder="Educatioonal Institution" oninput="this.className = ''" name="institution"></p>
                                            <p><input type="text" placeholder="Contact Number" oninput="this.className = ''" name="mobile"></p>
                                              <p><input type="text" placeholder="Email" oninput="this.className = ''" name="email"></p>
                                             <p><input type="text" placeholder="Username" oninput="this.className = ''" name="username"></p>
                                              <p><input type="password" placeholder="Password" oninput="this.className = ''" name="password"></p>
                                    
                                         </div>
                                    
                                         <div class="tab">Image Upload:
                                          <p><input type="file"  oninput="this.className = ''" name="image"></p>
                                    
                                         </div>
                                    
                                         <div style="overflow:auto;">
                                          <div style="float:right;">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                          </div>
                                         </div>
                                    
                                         
                                         <div style="text-align:center;margin-top:40px;">
                                          <span class="step"></span>
                                          <span class="step"></span>
                                          <span class="step"></span>
                                          <span class="step"></span>
                                         </div>
                                    
                                         </form>
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
                                <script>
                                    $('#myModal1').on('shown.bs.modal', function () {
                                          $('#myInput').trigger('focus')
                                        })
                                </script>
                                      
                                
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                      </div>
                                
                                    </div>
                                  </div>
                              </div>
                    </div>
        </div>
        <div class="col">
          <div class="card">
                      <img class="card-img-top img-fluid" src="images/academics.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; font-size: 36px;background-color:purple;color:white;text-align:center; font-family: comic sans MS;">ACADEMIC</h5>
                        <p class="card-text"style="font-size:1.5em">Welcome to Academic Section. Are you worried about your academic life or any academic section? </br>
                        You will get all sorts of information and motivation here that you need to make your academic life stronger.</p>
                      </div>
                      <ul class="list-group list-group-flush" >
                        <li class="list-group-item" style="font-size:1.5em">Academic Guideline</li>
                        <li class="list-group-item"style="font-size:1.5em">Academic Counselation</li>
                        <li class="list-group-item"style="font-size:1.5em">Solution of any academic problems</li>
                      </ul>
                      <div class="card-body">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color:purple;color:white;text-align:center;font-size:1.5em;">
                                    Next
                      </div>
                      <!-- The Modal -->
                                <div class="modal" id="myModal">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="font-weight: bold; font-size: 18px;">Please Fill The Academic Form</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                      </div>
                                
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <form id="regForm1" method="post" action="/academicform" enctype="multipart/form-data" style="background: #5FCF80; border-radius: 25px;  border: 2px solid #9933FF; width: 90%;">
                     @csrf
                     
                     <div class="tab1">
                         <center></center> <h1 style="background-color: #9933ff; color:white;text-align:center;"><i><b>ACADEMIC</b></i></h1></i> </center>
                         <h1 style="font-size:25px;">What is your dream in life?</h1>
                      <p>
                          <select type="text-area" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" oninput="this.className = '' " name="aiminlife">
                             <option value="" selected hidden>Choose Your Dream in Life</option>
                            <option value="To be a Doctor">To be a Doctor</option>
                            <option value="To be a Engineer">To be an Engineer</option>
                            <option value="To be a Physicist">To be a Physicist</option>
                            <option value="To be a Chemist">To be a Chemist</option>
                            <option value="To be a Biologist">To be a Biologist</option>
                            <option value="To be a Acountant">To be an Acountant</option>
                            <option value="To be a Financialist">To be a Financialist</option>
                            </select>
                      </p>
                      <p><b>Please</b> Select Your Obstacles from the below list: </p>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="physics" name="physics">
                          <label class="form-check-label ml-2" for="physics">
                            Physics  
                          </label>
                          
                        </div>
                         <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="chemistry" name="chemistry">
                          <label class="form-check-label ml-2" for="chemistry">
                            Chemistry
                          </label>
                        </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="english" name="english">
                          <label class="form-check-label ml-2" for="english">
                            English
                        </div>
                        
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="biology" name="biology">
                          <label class="form-check-label ml-2" for="biology">
                            Biology
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="mathematics" name="mathematics">
                          <label class="form-check-label ml-2" for="mathematics">
                            Mathematics
                          </label>
                        </div>
                        
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="hmathematics" name="hmathematics">
                          <label class="form-check-label ml-2" for="hmathematics">
                            Higher Mathematics
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="accounting" name="accounting" >
                          <label class="form-check-label ml-2" for="accounting">
                            Accounting 
                          </label>
                        </div>
                         <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Yes" id="finance" name="finance" >
                          <label class="form-check-label ml-2" for="finance">
                            Finance
                          </label>
                        </div>
                     </div>
                
                     <div class="tab1">Student Information:
                      <p><input placeholder="name" oninput="this.className = ''" name="name"></p>
                
                      <p><input type="text-area" placeholder="Address" oninput="this.className = ''" name="address"></p>
                      
                      <p>
                         <select type="text-area" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" oninput="this.className = '' " name="education">
                              <option value="" selected hidden>Choose your Education level</option>
                              <option value="HSC">HSC</option>
                              <option value="SSC">SSC</option>
                              <option value="Diploma">Diploma</option>
                              <option value="Vocational">Vocational</option>
                              <option value="Others">Others</option>
                            </select> 
                      </p>
                      <p><input type="text-area" placeholder="Educatioonal Institution" oninput="this.className = ''" name="institution"></p>
                        <p><input type="text" placeholder="Contact Number" oninput="this.className = ''" name="mobile"></p>
                          <p><input type="text" placeholder="Email" oninput="this.className = ''" name="email"></p>
                         <p><input type="text" placeholder="Username" oninput="this.className = ''" name="username"></p>
                          <p><input type="password" placeholder="Password" oninput="this.className = ''" name="password"></p>
                
                     </div>
                
                     <div class="tab1">Image Upload:
                      <p><input type="file"  oninput="this.className = ''" name="image"></p>
                
                     </div>
                
                     <div style="overflow:auto;">
                      <div style="float:right;">
                        <button type="button" id="prevBtn1" onclick="nextPrev1(-1)">Previous</button>
                        <button type="button" id="nextBtn1" onclick="nextPrev1(1)">Next</button>
                      </div>
                     </div>
                
                     <!-- Circles which indicates the steps of the form: -->
                     <div style="text-align:center;margin-top:40px;">
                      <span class="step1"></span>
                      <span class="step1"></span>
                      <span class="step1"></span>
                      <span class="step1"></span>
                     </div>
                
                     </form>
                            </div>
                                       <script type="text/javascript">
                         var currentTab1 = 0; // Current tab is set to be the first tab (0)
                         showTab1(currentTab1); // Display the current tab
                    
                         function showTab1(n) {
                           // This function will display the specified tab of the form ...
                           var x1 = document.getElementsByClassName("tab1");
                           x1[n].style.display = "block";
                           // ... and fix the Previous/Next buttons:
                           if (n == 0) {
                             document.getElementById("prevBtn1").style.display = "none";
                           } else {
                             document.getElementById("prevBtn1").style.display = "inline";
                           }
                           if (n == (x1.length - 1)) {
                             document.getElementById("nextBtn1").innerHTML = "Submit";
                           } else {
                             document.getElementById("nextBtn1").innerHTML = "Next";
                           }
                           // ... and run a function that displays the correct step indicator:
                           fixStepIndicator1(n)
                         }
                    
                         function nextPrev1(n) {
                           // This function will figure out which tab to display
                           var x2 = document.getElementsByClassName("tab1");
                           // Exit the function if any field in the current tab is invalid:
                           if (n == 1 && !validateForm()) return false;
                           // Hide the current tab:
                           x2[currentTab1].style.display = "none";
                           // Increase or decrease the current tab by 1:
                           currentTab1 = currentTab1 + n;
                           // if you have reached the end of the form... :
                           if (currentTab1 >= x2.length) {
                             //...the form gets submitted:
                             document.getElementById("regForm1").submit();
                             return false;
                           }
                           // Otherwise, display the correct tab:
                           showTab1(currentTab1);
                         }
                    
                         function validateForm1() {
                           // This function deals with validation of the form fields
                           var x3, y1, i1, valid1 = true;
                           x3 = document.getElementsByClassName("tab1");
                           y1 = x3[currentTab1].getElementsByTagName("input");
                           // A loop that checks every input field in the current tab:
                           for (i1 = 0; i1 < y1.length; i1++) {
                             // If a field is empty...
                             if (y1[i1].value == "") {
                               // add an "invalid" class to the field:
                               y1[i1].className += " invalid";
                               // and set the current valid status to false:
                               valid1 = false;
                             }
                           }
                           // If the valid status is true, mark the step as finished and valid:
                           if (valid1) {
                             document.getElementsByClassName("step1")[currentTab1].className += " finish";
                           }
                           return valid1; // return the valid status
                         }
                    
                         function fixStepIndicator1(n) {
                           // This function removes the "active" class of all steps...
                           var i2, x4 = document.getElementsByClassName("step1");
                           for (i2 = 0; i2 < x4.length; i2++) {
                             x[i2].className = x[i2].className.replace(" active", "");
                           }
                           //... and adds the "active" class to the current step:
                           x4[n].className += " active";
                         }
                </script>
                                
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                      </div>
                                
                                    </div>
                                  </div>
                              </div>
                    </div>
        </div>
  </div>  
</div>
  
@endsection
