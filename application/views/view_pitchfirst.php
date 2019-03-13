<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Pitchfirst</title>

	<meta name="author" content="Alfi Rahadian">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom-animations.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-pink-color.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/timeline_baru.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style type="text/css">
	@media screen and (min-width: 800px) {
	#counter-tengah {
			width: 25%;
		}
	}
	</style>
	<style>
	.text-ditengah {
	        text-align: left;
		}

	@media (max-width: 600px) {
	    .text-ditengah {
	        text-align: center;
	    }
	}
	</style>

	<style type="text/css">
		.carousel-indicators {
		  bottom:-50px;
		}

		.carousel-indicators li {
		  border-color:#999;
		  background-color:#ccc;
		}

		.carousel-inner {
		   margin-bottom:50px;
		}
	</style>
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<header class="header header-black">
		<div class="header-wrapper">
			<div class="container">
				<div class="col-sm-2 col-xs-12 navigation-header">
					<a href="" class="logo">
						<img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" alt="PITCH FIRST 2018" width="78" height="55" class="retina-show">
					</a>
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="col-sm-10 col-xs-12 navigation-container">
					<div id="navigation" class="navbar-collapse collapse">
						<ul class="navigation-list pull-right light-text">
							<li class="navigation-item"><a href="#about" class="navigation-link">Overview</a></li>
							<li class="navigation-item"><a href="#timeline" class="navigation-link">Timeline</a></li>
							<li class="navigation-item"><a href="#gallery" class="navigation-link">Gallery</a></li>
							<li class="navigation-item"><a href="#testimonials" class="navigation-link">Testimonials</a></li>
							<li class="navigation-item"><a href="#sponsors" class="navigation-link">Partners</a></li>
							<li class="navigation-item"><a href="#contacts" class="navigation-link">Contact</a></li>
							<?php if(isset($this->session->userdata['logged_in'])){ ?>
								<li class="navigation-item"><a href="<?php echo base_url();?>pitchfirst/logout" class="navigation-link">Logout</a></li>
							<?php
							}else{ ?>
								<li class="navigation-item"><a href="<?php echo base_url();?>pitchfirst/login" class="navigation-link">Login</a></li>
							<?php 
							} ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="hero" class="hero-section bg1 bg-cover window-height light-text">
		<div class="heading-block centered-block align-center">
			<div class="container">
				<div class="row">
					<ul class="socials-nav">
					<li class="socials-nav-item"><a href="https://www.facebook.com/Ideacraftid-123336021550976/" target="_blank"><span class="fa fa-facebook"></span></a></li>
					<li class="socials-nav-item"><a href="https://api.whatsapp.com/send?phone=6285813853750" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
					<li class="socials-nav-item"><a href="https://instagram.com/ideacraft.id" target="_blank""><span class="fa fa-instagram"></span></a></li>
					<li class="socials-nav-item"><a href="mailto:yohanna.001@student.pmbs.ac.id" target="_blank"><span class="fa fa-envelope"></span></a></li>
					</ul>
				</div>
				<div class="row"><br><br><br>
					<h3 style="font-family: Avenir Next">ARE YOU</h3>
					<h1 style="font-family: Avenir Next">THE NEXT CHAMPION?</h1>
				</div><br>
				<h5 class="heading-alt" style="margin-bottom: 8px;"><span class="fa fa-calendar-o base-clr-txt" style="color: #fff"></span>19 APRIL 2018<br><span class="fa fa-map-marker base-clr-txt" style="margin-left: 14px; color: #fff"></span>Jakarta</h5>
			<!-- Countdown start -->
					<div class="row counters-wrapper countdown">
						<div class="col-sm-2 col-sm-offset-1" id="counter-tengah">
							<div class="counter-block counter-block-no-border counter-block-white has-separator">
								<div class="counter-box">
									<div class="counter-content">
										<span class="count">{dnn}</span>

										<p class="title">days</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="counter-block counter-block-no-border counter-block-white has-separator">
								<div class="counter-box">
									<div class="counter-content">
										<span class="count">{hnn}</span>

										<p class="title">hours</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="counter-block counter-block-no-border counter-block-white has-separator">
								<div class="counter-box">
									<div class="counter-content">
										<span class="count">{mnn}</span>

										<p class="title">minutes</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="counter-block counter-block-no-border counter-block-white">
								<div class="counter-box">
									<div class="counter-content">
										<span class="count">{snn}</span>

										<p class="title">seconds</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
				<h6 class="thin base-font">Countdown to the <strong> Early Bird Deadline</strong></h6>
				<div class="btns-container">
					<a href="<?php echo base_url();?>pitchfirst/registration" class="btn btn-md">REGISTER</a>
					<a href="#" class="btn btn-outline btn-md" data-modal-link="">VIDEO</a>
				</div>

				<!-- countdown end -->

			</div>
		</div>
	</section>

	<section id="about" class="section align-center">
		<div class="container">
			<center><img src="<?php echo base_url();?>assets/img/logo_pitchfirst_gif.gif" alt="" width="350" class="img-responsive" /></center><br>
			<h3 style="font-family: Avenir Next">"Capturing Business Ideas <br> within Societal Changes"</h3>
			<br />
			<br />

			<div class="tabs-wrapper tabs-horizontal">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#horizontal_tab1" data-toggle="tab">
						<h6 class="heading-alt"><span></span>About</h6>
					</a></li>
					<li><a href="#rules" data-toggle="tab">
						<h6 class="heading-alt"><span></span> Rules</h6>
					</a></li>
					<li><a href="#faq" data-toggle="tab">
						<h6 class="heading-alt"><span></span>FAQ</h6>
					</a></li>
				</ul>

				<div class="tab-content">
					<div id="horizontal_tab1" class="tab-pane fade active in">
						<div class="col-sm-5 img-column">
							<img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" width="220" class="img-responsive" />
						</div>
						<div class="col-sm-7 align-left">
							<h6 style="font-family: Avenir Next">A Glimpse of Pitch First Competition</h6>
							<p style="text-align:justify"><strong>Pitch First (PF)</strong> is one of the events under IDEACRAFT and organized by
							the Management Society, a student organization of Magister Management
							of Universitas Prasetiya Mulya. This year, it will be held on <strong>Saturday, 22 September 2018</strong>, taking “Capturing Business Ideas within Societal
							Changes” as its theme. PF aims to serve as a top-notch national
							business pitching competition platform whereby undergraduate (S1)
							students of all majors from various regions in Indonesia compete with,
							while learning from each other and foster strong networking among them.
							PF also comes with a vision to encourage Indonesian undergraduate
							students to develop and present their business plans in a national
							competition also to contribute in the making of a young generation that
							possesses entrepreneurial, creative and innovative skills, and the
							courage to affect positive changes to the society at large.<br><br>
							<h6 style="font-family: Avenir Next">What is pitching?</h6><p style="text-align:justify">Imagine when you have an Idea and you only have two minutes to deliver it
							to someone’s important (it could be potential investors, lecturers, bosses, or
							business partners). You may feel panic, overwhelmed, clueless, tongue-
							tied. Yet you believe in your ideas, but you are lacking in skills on how to
							present it in a structured, well-timed, and convincing way. That’s what you
							called, Pitching: A method to deliver business ideas verbally. <br>An
							<strong>Elevator Pitch</strong> is simply a very short pitch that distills the idea into a short
							summary which takes only as long as a short elevator ride. Whereas <strong>Pitch
							Deck</strong> is a brief presentation using Powerpoint or other tools to provide a
							quick overview about your business plan.</p>
							<ul>
							</ul>
						</div>
					</div>

					<div id="rules" class="tab-pane fade">
						<div class="col-sm-5 img-column">
							<img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" alt="" width="220" class="img-responsive" />
						</div>
						<div class="col-sm-7">
							<h6 class="text-ditengah" style="font-family: Avenir Next">Rules</h6>
							<p class="align-left">Ready for challenge? Here are some rules you should know. Kindly download the full version of general rules by clicking the button below.</p>
							<div class="btns-container">
								<a href="<?php echo base_url();?>assets/doc/general_rules_pitchfirst2018.pdf" class="btn btn-md">Download Rules</a>
							</div>
						</div>
					</div>

					<div id="faq" class="tab-pane fade">
						<div class="col-sm-5 img-column">
							<img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" alt="" width="220" class="img-responsive" />
						</div>
						<div class="col-sm-7 align-left">
							<h6 style="font-family: Avenir Next">FAQ</h6>
							<p style="text-align:justify">
							Q: What documents should be uploaded to activate my account?<br>
							A: Within 48 hours you must upload the documents as follows<br>
							1. Student ID Card<br>
							2. Student Acknowledgement Letter<br>
							3. Payment Proof<br><br>
							Q: How to get registration fee discount?<br>
							A: You can use referral code: EARLYBIRD (limited for the first 10 teams) or
							you could inquire other participants and use their personal referral code<br><br>
							Q: Why would I share my referral code?<br>
							A: Those whose referral code used the most frequent, may get an extra
							point for winning the best pitcher on social media<br><br>
							Q: When is the deadline for submitting executive summary and videos?<br>
							A:
							(1). Participant who registered in early bird phase are entitled to have 21
							days since registration date.<br>
							(2). Those who follow normal registration scheme would only have 14 days
							since registration date.<br><br>
							*Note: Make sure you submit your documents within the given deadline,
							otherwise the system will automatically be closed<br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="timeline" class="bg-cover bg1 light-text">
		<!-- Inspired by Codyhouse -->
 	<div class="container experience">
        <div class="row">
            <div class="col-md-12"><br><br><br>
                <h4 class="heading-alt"><center>Timeline</center></h4>
					<section class="timeline">
					  <ol>
					    <li>
					      <div>
					        <time>30 APRIL 2018</time> CLOSING EARLYBIRD REGISTRATION
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>31 AGUSTUS 2018</time>CLOSING NORMAL REGISTRATION
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>12 SEPTEMBER 2018</time>ANOUNCEMENT FOR SEMI FINAL ROUND (VIA EMAIL)
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>21 SEPTEMBER 2018</time> TECHNICAL MEETING EVENT DAY
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>22 SEPTEMBER 2018</time> SEMIFINAL AND FINAL ROUND
					    </li>
					    <li></li>
					  </ol>
					</section>

            </div> <!-- end div experience -->
        </div> <!-- end row experience -->
    </div> <!-- end container experience -->

 <!-- end work experience -->
	</section>

	<section id="gallery" class="section align-center">
		<div class="container">
			<h3 class="heading-alt"><font style="font-family: Avenir Next" color="#262627">Gallery</font></h3>
			<br/>
			<br/>

			<div class="row gallery">
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="1"><img src="<?php echo base_url();?>assets/img/1.jpg" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="2"><img src="<?php echo base_url();?>assets/img/2.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="3"><img src="<?php echo base_url();?>assets/img/3.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="4"><img src="<?php echo base_url();?>assets/img/4.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="5"><img src="<?php echo base_url();?>assets/img/5.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="6"><img src="<?php echo base_url();?>assets/img/6.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="7"><img src="<?php echo base_url();?>assets/img/7.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="8"><img src="<?php echo base_url();?>assets/img/8.jpg" alt="" width="500"></a>
			</div>
		</div>
	</section>

	<div class="modal-window" data-modal="1">
		<div class="modal-box animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

				<h6>Full house situation</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/1.jpg" class="full-width-img" alt="gallery3">
				<br/>
				<p>It has been a year since Pitch First 2017. It was a packed house at our Pitch First competition. The participants were so enthusiastic during the competition.</p>
		</div>
	</div>

	<div class="modal-window" data-modal="2">
		<div class="modal-box animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

				<h6>Pitching situation</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/2.jpg"  class="full-width-img" alt="gallery3">
				<br/>
				<p>One of our contestant from University of Indonesia called “Ibu Pejabat” team, were convincing all of the judges in just a few minutes.</p>
		</div>
	</div>

	<div class="modal-window" data-modal="3">
		<div class="modal-box animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

				<h6>Pitching situation</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/3.jpg" class="full-width-img" alt="gallery3">
				<br/>
				<p>Team Victory from University of Tarumanegara have a magical trick on their sleeve to impress the judges. On their own way, they’re trying to affect the judges heart and make the whole audience amazed.</p>
		</div>
	</div>

	<div class="modal-window" data-modal="4">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

			<h6>Judging Time</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/4.jpg" class="full-width-img" alt="gallery3">
				<br/>
				<p>The judges were giving initial thoughts to all of participants and criticize their ideas. It was a great opportunity to get an insight and learn more about business in a broad sense from the expert.</p>
		</div>
	</div>

	<div class="modal-window" data-modal="5">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

			<h6>The First Winner</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/5.jpg" class="full-width-img" alt="gallery3">
				<br/>
				<p>The champion of Pitch First 2017, Alfredo team from Universitas Prasetiya Mulya. Congratulations for the outstanding performances! </p>
		</div>
	</div>

	<div class="modal-window" data-modal="6">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

			<h6>The Runner Up</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/6.jpg" class="full-width-img" alt="gallery3">
				<br/>
				<p>Runner up of Pitch First 2017, Abhipraya team from Institut Teknologi Bandung. Well done, Abhipraya! </p>
		</div>
	</div>

	<div class="modal-window" data-modal="7">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

			<h6>The Third Winner</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/7.jpg" class="full-width-img" alt="gallery3">
				<br/>
				<p>The 3rd winner of Pitch First 2017, Snipview team from Universitas Prasetiya Mulya. Keep inspiring, Snipview! </p>
		</div>
	</div>

	<div class="modal-window" data-modal="8">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>

			<h6>Press Conference</h6>
				<br/>
				<img src="<?php echo base_url();?>assets/img/8.jpg" class="full-width-img" alt="gallery3">
				<br/>
				<p>Press conference with SWA, Provoke!, Cosmopolitan, File Magz, Esquire, Koran Jakarta, Marketing Magazine, Bisnis Magazine, Kompas, Indopos and Berita Satu as our media partners. Be our contestant and let them expose your aptitude.  </p>
		</div>
	</div>

	<section id="counters" class="section align-center bg-cover bg1 light-text">
		<div class="container">

			<div class="row counters-wrapper">
				<div class="col-sm-4">
					<div class="counter-block counter-block-no-border counter-block-white">
						<div class="counter-box">
							<div class="counter-content">
								<h1><span class="count" data-from="0" data-to="112" font-size="">0</span></h1>

								<p class="title">universities</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="counter-block counter-block-no-border counter-block-white">
						<div class="counter-box">
							<div class="counter-content">
								<h1><span class="count" data-from="0" data-to="100">0</span></h1>

								<p class="title">participants</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="counter-block counter-block-no-border counter-block-white">
						<div class="counter-box">
							<div class="counter-content">
								<br><h4><b>IDR&nbsp;<span class="count" data-from="0" data-to="34">0</span>&nbsp;M</b></h4>
								<p class="title">Total Prize</p>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>
	

	<section id="testimonials" class="section align-center">
		<div class="container">
			<h4 class="heading-alt"><font style="font-family: Avenir Next">Testimonials</font></h4>
			<p class="text-alt" style="margin-bottom: 80px; color: #112948">Let's hear from them</p>

			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel" >
					<!-- Indicators -->
				    <!-- Indicators --><br><br>
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color: #A91B27;"></li>
				      <li data-target="#myCarousel" data-slide-to="1" style="background-color: #A91B27;"></li>
				    </ol>
				     <div class="carousel-inner" role="listbox">
				     	<div class="item active">
							<div class="col-sm-6">
								<div class="testimonial">
									<article class="text-box" style="text-align: justify;">How you present your idea is as important as the idea itself. Through PITCH FIRST, I learned that great presentation comes from greater preparation. It was
									a memorable, thrilling and exciting competition that pushed me to improve my
									pitching skills beyond what i thought were already my best. Absolutely
									recommended!</article>
									<div class="author-block">
										<div class="photo-container" style="background-image: url('<?php echo base_url();?>assets/img/testimonials/gary.jpeg')"></div>

										<strong class="name">Gary Aruana K.</strong>
										<small class="text-alt company"><b>1st winner PITCHFIRST 2017</b></small>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<article class="text-box" style="text-align: justify;">
									I am very grateful to be a part of PITCH FIRST 2017. I got a lot of experience, got
									lots of new friends and I also got a lot of networking and insight from judges
									which consist of academics and practitioners.<br><br><br></article>
									<div class="author-block">
										<div class="photo-container" style="background-image: url('<?php echo base_url();?>assets/img/testimonials/devia.jpeg')"></div>
										<strong class="name">Devia Rizky F.</strong>
										<small class="text-alt company"><b>2nd winner PITCH FIRST 2017</b></small>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<div class="testimonial">
									<article class="text-box" style="text-align: justify;">By joining this competition, PITCH FIRST, you will gain new experiences and learn to perform in front of the crowd. The committee was so friendly and make us become not nervous.<br>
									“Dare to speak up!”<br><br></article>
									<div class="author-block">
										<div class="photo-container" style="background-image: url('<?php echo base_url();?>assets/img/testimonials/sharen.jpeg')"></div>

										<strong class="name">Sharen Adeline</strong>
										<small class="text-alt company"><b>3rd winner PITCH FIRST 2017</b></small>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<article class="text-box" style="text-align: justify;">Feel the different atmosphere from other competitions. This is PITCHFIRST,
									you're not only in need of business ability but also encourage to work with
									other sectors and became a distiguish value in community. To me It was very
									impressive experience joined PITCH FIRST 2017.</article>
									<div class="author-block">
										<div class="photo-container" style="background-image: url('<?php echo base_url();?>assets/img/testimonials/dhwi.jpeg')"></div>
										<strong class="name">Dhwi Ba’diya M.</strong>
										<small class="text-alt company"><b>Favorite Team PITCHFIRST 2017</b></small>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
		</div>			
	</section>	

	<section class="section overlay bg-cover bg1 light-text align-center">
		<div class="container">
			<h2>Register now!</h2>
			<p>Get 30% discount for the first 10 teams by using this code:</p>
			<p><h5>EARLYBIRD</h5> 
			<br />
			<a href="<?php echo base_url();?>pitchfirst/registration" class="btn btn-lg btn-outline">Register</a>
		</div>
	</section>

	

	<section id="sponsors" class="section align-center">
		<div class="container">
			<span class="icon section-icon icon-documents-bookmarks-12"></span>
			<h4>Our Previous Partners</h4>
			<p class="text-alt" style="color: #112948">We are grateful to have worked with amazing partners. <br>And you're welcomed to collaborate with us.</p>
			<br/>
			<br/>
			<div class="sponsors">
				<div class="sponsor inline"><img src="<?php echo base_url();?>assets/img/partners/logo_1.png" width="200" alt=""></div>
				<div class="sponsor inline"><img src="<?php echo base_url();?>assets/img/partners/logo_2.png" width="200" alt="""></div>
				<div class="sponsor inline"><img src="<?php echo base_url();?>assets/img/partners/logo_3.png" width="200" alt="""></div><br>
				<div class="sponsor inline"><img src="<?php echo base_url();?>assets/img/partners/logo_4.png" width="200" alt="""></div>
				<div class="sponsor inline"><img src="<?php echo base_url();?>assets/img/partners/logo_5.png" width="200" alt="""></div>
			</div>
		</div>
	</section>

	<section id="contacts">
		<div class="contacts-wrapper">
			<div id="map" class="map" data-settings="<?php echo base_url();?>assets/js/map-settings.json" style="height:560px;"></div>
			<div class="container contacts-on-map-container">
				<div class="contacts-on-map">
					<h5>Contact Persons</h5>
					<ul class="list"><b>OFFICE</b><br>
						<li><i class="fa fa-map-marker"></i>Management Society<br>
						Universitas Prasetiya Mulya<br>
						Jl. R.A Kartini (TB Simatupang)<br>
						Cilandak Barat, Jakarta Selatan, 12430</li>
						<li><b><a href="https://goo.gl/maps/hEwgtFeAbjB2" target="_blank">Click to direction</a></b></li><br>
						<b>Camilla Janette</b>
						<li><a href="https://api.whatsapp.com/send?phone=6281809661414"><i class="fa fa-phone"></i>081809661414</a></li>
						<li><a href="mailto:camilla.jasrin@student.pmbs.ac.id"><i class="fa fa-envelope"></i>camilla.jasrin@student.pmbs.ac.id</a></li>
						<b>Yohanna</b>
						<li><a href="https://api.whatsapp.com/send?phone=6285813853750"><i class="fa fa-phone"></i>085813853750</a></li>
						<li><a href="mailto:yohanna.001@student.pmbs.ac.id"><i class="fa fa-envelope"></i>yohanna.001@student.pmbs.ac.id</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="footer-base">
			<div class="container">
				<div class="col-md-12 align-center">
					<ul class="socials-nav">
					<li class="socials-nav-item"><a href="https://www.facebook.com/Ideacraftid-123336021550976/" target="_blank"><span class="fa fa-facebook"></span></a></li>
					<li class="socials-nav-item"><a href="https://api.whatsapp.com/send?phone=6285813853750" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
					<li class="socials-nav-item"><a href="https://instagram.com/ideacraft.id" target="_blank""><span class="fa fa-instagram"></span></a></li>
					<li class="socials-nav-item"><a href="mailto:yohanna.001@student.pmbs.ac.id" target="_blank"><span class="fa fa-envelope"></span></a></li>
					</ul>
				</div><br>
				<center><p>Copyright © 2018 Ideacraft. All Rights Reserved.</p></center>

			</div>
		</div>
	</section>

	<div class="modal-window" data-modal="0" style="background-color: rgba(2, 2, 2, 0.85);">
		<div class="modal-box iframe-box iframe-video">
			<span class="close-btn icon icon-office-52"></span>

			<iframe src="https://www.youtube.com/embed/goH-Pv1w6xo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<!-- Timer Slider -->
    <script>
	  $(document).ready(function(){
	    $('.myCarousel').carousel(){
	    	interval: 4000;
	  };    
	</script>
	<!-- End Timer Slider --> 

	<!-- Fungsi Google Maps -->
	<script> 
		function initMap() {
        var uluru = {lat: -6.2915246, lng: 106.788997};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
	</script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMdPp-1B49Yds_XHiIx-3myw2HSLN4IEU&callback=initMap">
    </script>
    <!-- End Fungsi Google Maps -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.plugin.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.countTo.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/modal-box.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/ventcamp.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/timeline.js"></script>
</body>
</html>
