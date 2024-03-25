@extends('common.layout')

@section('content')
	<div class="container mt-5">
	<style rel="stylesheet">
		#inner_row1{
			border: 1px solid #ddd;
			border-radius: 25px;
			box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
		}
		/* Accordin */
		.accordion-button::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
      transform: scale(.7) !important;
    }
    .accordion-button:not(.collapsed)::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
    }
	</style>
		<div class="row">
		  <div class="col-7 px-5">
		  	<h3 style="font-size: 34px; font-weight: bold; font-family: roboto;">Kid's Programming -- Junior Section</h3>
		  	<p style="font-family: roboto; font-size: 18px;">Bolster your preparation for the IELTS speaking, listening, writing and reading test with this IELTS preparation course.</p>
				<h3 class="mt-5" style="font-size: 34px; font-weight: bold; font-family: roboto;">Instructor</h3>
				<div class="row py-3" id="inner_row1">
					 <div class="col-2 d-flex justify-content-center">
						 <img src="assets/img/hsc/instructor.jpg" alt="Instructor Image" class="rounded-circle img-fluid" style="border-radius: 50%; height: 80px; width: 80px;">
					 </div>
					 <div class="col-10">
							 <h4 style="font-size: 20px; font-weight: bold; font-family: roboto;">MD. NAYEM</h4>
							 <p style="font-family: roboto; font-size: 16px;">M.Sc (CST), Zhejiang Sci-Tech University (China); B.Sc (CSE), North Westren University; IELTS: 6.5</p>
					 </div>
				</div>
				<br>
				<h3 class="mt-5" style="font-size: 28px; font-weight: bold; font-family: roboto;">এই কোর্সটি থেকে যা শিখবেন</h3>
				<div id="inner_row1">
					<br>
					<p>&nbsp;&nbsp; <i class="bi bi-check-circle-fill"></i> &nbsp;প্রোগ্রামিং সম্পর্কে ধারনা পাবে</p>
					<p>&nbsp;&nbsp; <i class="bi bi-check-circle-fill"></i> &nbsp;প্রোগ্রামিং এর সাহায্যে ছোটখাটো প্রবলেম সলভিং ও লজিক ডেভেলপমেন্ট করতে পারবে</p>
					<p>&nbsp;&nbsp; <i class="bi bi-check-circle-fill"></i> &nbsp;বেসিক এ্যাপস তৈরি করতে পারবে</p>
					<p>&nbsp;&nbsp; <i class="bi bi-check-circle-fill"></i> &nbsp;আর্ট এবং ম্যাথ এর স্কিল বাড়বেে</p>
				</div>
				<br>
				<h3 class="mt-5" style="font-size: 28px; font-weight: bold; font-family: roboto;">কোর্সটি কাদের জন্য?</h3>
				<div id="inner_row1">
					<br>
					<p>&nbsp;&nbsp; <i class="bi bi-dot"></i> &nbsp;যাদের বয়স ৮ থেকে ১২ বছর (ক্লাস ৩ থেকে ক্লাস ৫)</p>
					<p>&nbsp;&nbsp; <i class="bi bi-dot"></i> &nbsp;যারা ম্যাথ এবং আর্ট এ স্কিল বাড়াতে চায়</p>
				</div>
				<br>
				<h3 class="mt-5" style="font-size: 28px; font-weight: bold; font-family: roboto;">কোর্সটির বৈশিষ্ট্যগুলো কী কী?</h3>
				<div id="inner_row1">
					<br>
					<p>&nbsp;&nbsp; <i class="bi bi-plus-circle-dotted"></i> &nbsp;অনলাইন অথবা অফলাইনে ক্লাস করার সুব্যাবস্থা</p>
					<p>&nbsp;&nbsp; <i class="bi bi-plus-circle-dotted"></i> &nbsp;কঠিন বিষয় গুলোকে খেলার ছলে সহজবোধ্য করে তোলা হয়</p>
					<p>&nbsp;&nbsp; <i class="bi bi-plus-circle-dotted"></i> &nbsp;বিভিন্ন গেম এবং পাজেলের মাধ্যমে লজিক ডেভেলপ করা  হয় </p>
					<p>&nbsp;&nbsp; <i class="bi bi-plus-circle-dotted"></i> &nbsp;বিভিন্ন অলিম্পিয়াড ও ইন্টারন্যাশনাল প্রোগ্রামিং কন্টেস্টের জন্য প্রস্তুত করা </p>
				</div>
				<br>
				<h3 class="mt-5" style="font-size: 28px; font-weight: bold; font-family: roboto;">সুবিধা সমূহ!</h3>
				<div id="inner_row1">
					<br>
					<p>&nbsp;&nbsp; <i class="bi bi-emoji-smile-fill"></i> &nbsp;সর্বাধুনিক শিক্ষক দ্বারা ক্লাস পরিচালনা করা হয় </p>
					<p>&nbsp;&nbsp; <i class="bi bi-emoji-smile-fill"></i> &nbsp;শীতাতপ নিয়ন্ত্রিত ক্লাস রুম ও লিফটের সুব্যাবস্থা </p>
					<p>&nbsp;&nbsp; <i class="bi bi-emoji-smile-fill"></i> &nbsp;অভিভাবকদের বসার সুব্যাবস্থা </p>
					<p>&nbsp;&nbsp; <i class="bi bi-emoji-smile-fill"></i> &nbsp;কিডস জোন এর ব্যাবস্থা </p>
					<p>&nbsp;&nbsp; <i class="bi bi-emoji-smile-fill"></i> &nbsp;কোর্স শেষে শিক্ষা সফরের ব্যাবস্থা </p>
					<p>&nbsp;&nbsp; <i class="bi bi-emoji-smile-fill"></i> &nbsp;কোর্স শেষে সার্টিফিকেট প্রদান করা হয়</p>
				</div>
				<br>
				<br>
				<h3 class="mt-5" style="font-size: 28px; font-weight: bold; font-family: roboto;">কোর্স সিলেবাস</h3>
				<div id="inner_row1">
					<br>
					<div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">1.	Learning simulation with toys</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">2.	What is programming with details</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">3.	Drawing using code</button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
				<div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">4.	Drawing in paper (optional)</button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
				<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
								<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">5.	Theory of animation</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
								<div class="card-body">
										<p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
								</div>
						</div>
				</div>
				<div class="accordion-item">
						<h2 class="accordion-header" id="headingSix">
								<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">6.	Creating building and character with legu</button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
								<div class="card-body">
										<p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
								</div>
						</div>
				</div>
				<div class="accordion-item">
						<h2 class="accordion-header" id="headingSeven">
								<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven">7.	Legu animation</button>
						</h2>
						<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
								<div class="card-body">
										<p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
								</div>
						</div>
				</div>
				<div class="accordion-item">
						<h2 class="accordion-header" id="headingEight">
								<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight">8.	Computer animation</button>
						</h2>
						<div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
								<div class="card-body">
										<p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
								</div>
						</div>
				</div>
				<div class="accordion-item">
						<h2 class="accordion-header" id="headingNine">
								<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine">9.	Learn Tic tac toe, Rock paper sezer and Go game for logic development / Learn game for logic development</button>
						</h2>
						<div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
								<div class="card-body">
										<p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
								</div>
						</div>
				</div>
				<div class="accordion-item">
						<h2 class="accordion-header" id="headingTen">
								<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTen">10. Learn different mathematics logic (optional)</button>
						</h2>
						<div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
								<div class="card-body">
										<p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
								</div>
						</div>
				</div>
    </div>
			</div>
				<br>
		  </div>
		  <div class="col-5 px-3 mt-5">
				<div class="card" style="width: 30rem;">
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe width="100%" height="315" src="https://www.youtube.com/embed/e7b6Jqs2L8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
			  <div class="card-body">
					<div class="row py">
				    <div class="col">
				      <a href="#">প্রোমো কোড</a>
				    </div>
				    <div class="col">
				      <p style="font-family: roboto; font-size: 18px; text-align: right">৳ ২৫০০</p>
				    </div>
				  </div>
			    <center><button type="button" class="btn btn-success py-3" style="width: 100%;">কোর্সটি শুরু করুন &nbsp;<i class="bi bi-arrow-right-circle"></i></button></center>
					<div class="row">
			    <div class="col-6">
						<div class="row py-3">
					    <div class="col-2 align-items-center">
					      <i class="bi bi-people-fill"></i>
					    </div>
					    <div class="col-10">
					     <h5 style="font-family: roboto; font-size: 11px;">কোর্সটি করছেন</h5>
							 <p style="font-family: roboto; font-size: 11px; font-weight: bold;">৩,৮৬৩ জন</p>
					    </div>
					  </div>
			    </div>
			    <div class="col-6">
						<div class="row py-3">
 						 <div class="col-2 align-items-center">
 							 <i class="bi bi-alarm"></i>
 						 </div>
 						 <div class="col-10">
 							<h5 style="font-family: roboto; font-size: 11px;">সময় লাগবে</h5>
 							<p style="font-family: roboto; font-size: 11px; font-weight: bold;">৫০ ঘন্টা</p>
 						 </div>
 					 </div>
			    </div>
			  </div>
				<hr>
				<div class="row">
				<div class="col-6">
					<div class="row py-3">
						<div class="col-2">
							<i class="bi bi-check-lg"></i>
						</div>
						<div class="col-10">
							<h5 style="font-family: roboto; font-size: 11px;">সময় লাগবে</h5>
						 <p style="font-family: roboto; font-size: 11px; font-weight: bold;">৫১টি ভিডিও</p>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row py-3">
					 <div class="col-2 align-items-center">
						 <i class="bi bi-check-lg"></i>
					 </div>
					 <div class="col-10">
						 <h5 style="font-family: roboto; font-size: 11px;">সময় লাগবে</h5>
						<h5 style="font-family: roboto; font-size: 11px; font-weight: bold;">১৫টি মক টেস্ট</h5>
					 </div>
				 </div>
				</div>
			</div>
			</div>
			</div>
			<br>
			<h3 style="font-size: 18px; font-weight: bold; font-family: roboto;">কোর্সটি সম্পর্কে বিস্তারিত জানতে
				&nbsp;&nbsp;<i class="bi bi-telephone"></i> <a href="#">কল করুন: 16910</a></h3><br>
        <form class="form-control">
					<h3 style="font-size: 18px; font-weight: bold; font-family: roboto; text-align: center;">Fill theform to get more details</h3><hr>
					<div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
										<label class="form-label" for="firstName">Name</label>
                    <input type="text" id="firstName" class="form-control form-control-lg" placeholder="Name.."/>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
										<label class="form-label" for="lastName">Phone No.</label>
                    <input type="text" id="lastName" class="form-control form-control-lg" placeholder="Mobile No.."/>
                  </div>

                </div>
								<div class="col-md-6 mb-4">

                  <div class="form-outline">
										<label class="form-label" for="firstName">City</label>
                    <input type="text" id="firstName" class="form-control form-control-lg" placeholder="City.."/>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
										<label class="form-label" for="lastName">School</label>
                    <input type="text" id="lastName" class="form-control form-control-lg" placeholder="School.."/>
                  </div>
                </div>
								<div class="col-md-6 mb-4">

                  <div class="form-outline">
										<label class="form-label" for="firstName">Age</label>
                    <input type="text" id="firstName" class="form-control form-control-lg" placeholder="Age.."/>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
										<label class="form-label" for="lastName">Class</label>
                    <input type="text" id="lastName" class="form-control form-control-lg" placeholder="Class.."/>
                  </div>
									<div class="mt-4 pt-2">
									 <input class="btn btn-primary btn-lg" type="submit" value="Submit" style="float:right;"/>
								 </div>
                </div>
				</form>
			</div>
		</div>
		<br>
		<h3 class="mt-5" style="font-size: 22px; font-weight: bold; font-family: roboto;">আপনার জন্য আরো কোর্স</h3><br>
		<div class="row">
		  <div class="col-3">
				<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="assets/img/hsc/1.jpg" alt="Card image cap">
			  <div class="card-body">
					<h3 style="font-size: 18px; font-weight: bold; font-family: roboto;">ঘরে বসে Spoken English</h3><br>
					<div class="row py">
				    <div class="col">
							<p style="font-family: roboto; font-size: 18px; text-align: left">৳ ৯৫০</p>
				    </div>
				    <div class="col">
				      <a href="#">বিস্তারিত দেখুন</a>
				    </div>
				  </div>
			  </div>
			</div>
			</div>
		  <div class="col-3">
				<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="assets/img/hsc/2.jpg" alt="Card image cap">
			  <div class="card-body">
					<h3 style="font-size: 18px; font-weight: bold; font-family: roboto;">সবার জন্য Vocabulary</h3><br>
					<div class="row py">
				    <div class="col">
							<p style="font-family: roboto; font-size: 18px; text-align: left">৳ ৯৫০</p>
				    </div>
				    <div class="col">
				      <a href="#">বিস্তারিত দেখুন</a>
				    </div>
				  </div>
			  </div>
			</div>
			</div>
		  <div class="col-3">
				<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="assets/img/hsc/3.jpg" alt="Card image cap">
			  <div class="card-body">
					<h3 style="font-size: 18px; font-weight: bold; font-family: roboto;">অর্থসহ নামাজ শিক্ষা</h3><br>
					<div class="row py">
				    <div class="col">
							<p style="font-family: roboto; font-size: 18px; text-align: left">৳ ৯৫০</p>
				    </div>
				    <div class="col">
				      <a href="#">বিস্তারিত দেখুন</a>
				    </div>
				  </div>
			  </div>
			</div>
			</div>
		  <div class="col-3">
				<div class="card" style="width: 20rem;">
				<img class="card-img-top" src="assets/img/hsc/4.jpg" alt="Card image cap">
				<div class="card-body">
					<h3 style="font-size: 18px; font-weight: bold; font-family: roboto;">English Grammar Crash Courseষা</h3><br>
					<div class="row py">
						<div class="col">
							<p style="font-family: roboto; font-size: 18px; text-align: left">৳ ৯৫০</p>
						</div>
						<div class="col">
							<a href="#">বিস্তারিত দেখুন</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

		</div>
	</div>
@endsection