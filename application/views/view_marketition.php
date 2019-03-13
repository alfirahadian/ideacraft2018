<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Marketition</title>

	<meta name="author" content="Alfi Rahadian">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon_marketition.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom-animations.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-berry-color.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/timeline_baru_marketition.css" />
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

		.tengah {
		  position:relative; (or absolute, it depends on your needs)
		  top:50%;
		  left:50%;
		  transform:translate(-50%, -50%);
		}
	</style>
	<style type="text/css">
	.left-side{
		margin-left: -79px;
	}
	</style>
	
	<style type="text/css">
		#MobileMenuDivWrapper { 
  		max-height: 500px;
  			width: 100%;
  			overflow-y: scroll;
  		-webkit-overflow-scrolling:touch; // mobile safari
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
				<div class="col-sm-2 col-xs-12 navigation-header hidden-lg hidden-md">
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="col-sm-10 col-xs-12 navigation-container hidden-lg hidden-md hidden-sm" id="MobileMenuDivWrapper">
					<div id="navigation" class="navbar-collapse collapse hidden-l hidden-md">
						<ul class="navigation-list pull-right light-text">
							<li class="navigation-item"><a href="#overview" class="navigation-link">Home</a></li>
							<li class="navigation-item dropdown">
								<a class="navigation-link dropdown-toggle" data-toggle="dropdown">About Us</a>
									<li class="navigation-item"><a href="#about_prasmul" class="navigation-link">About Universitas Prasetiya Mulya</a></li>
									<li class="navigation-item"><a href="#about_walls" class="navigation-link">About Wall's</a></li>
									<li class="navigation-item"><a href="#about_marketition" class="navigation-link">About Marketition</a></li>
							</li>
							<li class="navigation-item dropdown">
								<a class="navigation-link dropdown-toggle" data-toggle="dropdown">Competition</a>
									<li class="navigation-item"><a href="#horizontal_tab1" class="navigation-link">Format & Rules</a></li>
									<li class="navigation-item"><a href="#timeline" class="navigation-link">Schedule</a></li>
									<li class="navigation-item"><a href="#venue" class="navigation-link">Venue</a></li>
									<li class="navigation-item"><a href="#horizontal_tab3" class="navigation-link">FAQ</a></li>
							</li>
							<li class="navigation-item dropdown">
								<a class="navigation-link dropdown-toggle" data-toggle="dropdown">Gallery</a>
									<li class="navigation-item"><a href="#gallery" class="navigation-link">Marketition 2017</a></li>
									<li class="navigation-item"><a href="https://www.youtube.com/watch?v=iyY1Z0CC0nA" class="navigation-link" target="_blank">Marketition 2016</a></li>
									<li class="navigation-item"><a href="#about_marketition" class="navigation-link">Marketition 2015</a></li>
							</li>
							<li class="navigation-item"><a href="#contacts" class="navigation-link">Contact</a></li>
							<?php if(isset($this->session->userdata['logged_in'])){ ?>
								<li class="navigation-item"><a href="<?php echo base_url();?>marketition/logout" class="navigation-link" style="font-family: StickARound; color: #FCE200;">Logout</a></li>
							<?php
							}else{ ?>
								<li class="navigation-item"><a href="<?php echo base_url();?>marketition/login" class="navigation-link" style="font-family: StickARound; color: #FCE200;">Login</a></li>
							<?php 
							} ?>
						</ul>
					</div>
					</div>

				<div class="col-sm-10 col-xs-12 hidden-xs navigation-container">
					<div id="navigation" class="navbar-collapse collapse">
						<ul class="navigation-list pull-right light-text">
							<li class="navigation-item"><a href="#overview" class="navigation-link">Home</a></li>
							<li class="navigation-item dropdown">
								<a class="navigation-link dropdown-toggle" data-toggle="dropdown">About Us</a>
								<ul class="dropdown-menu">
									<li class="navigation-item"><a href="#about_prasmul" class="navigation-link">About Universitas Prasetiya Mulya</a></li>
									<li class="navigation-item"><a href="#about_walls" class="navigation-link">About Wall's</a></li>
									<li class="navigation-item"><a href="#about_marketition" class="navigation-link">About Marketition</a></li>
								</ul>
							</li>
							<li class="navigation-item dropdown">
								<a class="navigation-link dropdown-toggle" data-toggle="dropdown">Competition</a>
								<ul class="dropdown-menu">
									<li class="navigation-item"><a href="#horizontal_tab1" class="navigation-link">Format & Rules</a></li>
									<li class="navigation-item"><a href="#timeline" class="navigation-link">Schedule</a></li>
									<li class="navigation-item"><a href="#venue" class="navigation-link">Venue</a></li>
									<li class="navigation-item"><a href="#horizontal_tab3" class="navigation-link">FAQ</a></li>
								</ul>
							</li>
							<li class="navigation-item dropdown">
								<a class="navigation-link dropdown-toggle" data-toggle="dropdown">Gallery</a>
								<ul class="dropdown-menu">
									<li class="navigation-item"><a href="#gallery" class="navigation-link">Marketition 2017</a></li>
									<li class="navigation-item"><a href="https://www.youtube.com/watch?v=iyY1Z0CC0nA" class="navigation-link" target="_blank">Marketition 2016</a></li>
									<li class="navigation-item"><a href="#about_marketition" class="navigation-link">Marketition 2015</a></li>
								</ul>
							</li>
							<li class="navigation-item"><a href="#contacts" class="navigation-link">Contact</a></li>
							<?php if(isset($this->session->userdata['logged_in'])){ ?>
								<li class="navigation-item"><a href="<?php echo base_url();?>marketition/logout" class="navigation-link" style="font-family: StickARound; color: #FCE200;">Logout</a></li>
							<?php
							}else{ ?>
								<li class="navigation-item"><a href="<?php echo base_url();?>marketition/login" class="navigation-link" style="font-family: StickARound; color: #FCE200;">Login</a></li>
							<?php 
							} ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="overview" class="section align-center bg-cover bg1">
		<div class="container">
			<right style="float:right;"><img src="<?php echo base_url();?>assets/img/logo_prasmul_biru.png" alt="" width="180" class="img-responsive" /></right>
			<left style="float:left;"><img src="<?php echo base_url();?>assets/img/walls_logo_header.png" alt="" width="120" class="img-responsive" /></left>
			<br><br><br><br>
			<center style="float:center;"><img src="<?php echo base_url();?>assets/img/LogoMarketition.png" alt="" width="700" class="img-responsive" /></center><br><br><br>
			<h5 class="heading-alt" style="margin-bottom: 8px;" ><span class="fa fa-calendar-o base-clr-txt" style="color: #111"></span><font style="font-family: StickARound; color: #fff;">NOVEMBER 10, 2018<br><span class="fa fa-map-marker base-clr-txt" style="margin-left: 14px; color: #111"></span><fontstyle="font-family: StickARound; color: #fff;" >UNIVERSITAS PRASETIYA MULYA JAKARTA</font></h5>
			<br />
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
			
				<h6 class="thin base-font" style="font-family: StickARound; color: #fff;">Countdown to the <strong> Closing Registration</strong></h6>
			<div class="btns-container">
				<a href="<?php echo base_url();?>marketition/registration" class="btn btn-md">REGISTER</a>
			</div>
			
		</div>
	</section>

	<section id="about_prasmul" class="section bg7 align-center">
		<div class="container">
				<div class="row">
				<div class="col-sm-7 align-left"><br><br><br><br>
					<left><img src="<?php echo base_url(); ?>/assets/img/logo_prasetiya_mulya_white.png" width="300" class="img-responsive" /></left>
					<p style="text-align:justify; color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prasetiya Mulya was founded in 1980 by a group of prominent Indonesian business leaders. The first MBA program in Indonesia was then established in 1982 with assistance from prestigious international scholars and experts. Today it remains the leading private business education program provider in the country, upholding the original aims of the founders to offer the highest standards in business management education and training.<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Being founded by members of the country's business community has ensured an effective balance of comprehensive curriculum between theoretical knowledge and practical application. Prasetiya Mulya is now benchmarking itself among the leading business schools by undergoing the AACSB accreditation process.
					Prasetiya Mulya Business School has over thirty years of experience in teaching graduate business courses in preparing the next generation of Indonesia's executives and entrepreneurs. It is exclusively taught by Prasetiya Mulya's leading faculties who have extensive professional experience as well as academic accolades giving students the opportunity to learn from renowned figures in a given field. For graduates wishing to build upon their business knowledge, Prasetiya Mulya offers full time (MM Regular) and part time program (MM Business Management and Strategic Innovation) for those studying alongside full time employment. <br>
					<b>Vision:</b> <br>
					"To be a leading Magister Management Program that contributes to the creation of a professional, superior, ethical, Indonesian human environment and is the embodiment of good values recognized by the community." <br>
					<b>Mission:</b> <br>
					1. Educating potential participants to become superior and ethical leaders to realize the distinctive performance and play an active role as an agent of change. <br>
					2. Generating and disseminating the latest knowledge of business management that contributes to the development of business management theory and provides practical solutions faced by the companies and public in areas related to business management. <br>
					3. Organizing the continue dialogue with the leaders of various organizations to work together to confront the problems that increasingly  hand to solve without the full involvement of business leaders. <br>
					4. Cooperating with educational organizations and companies at home and abroad to develop knowledge and best practices in the field of business management.	<br><br><br><br><br>
					</p>
					<ul>
					</ul>
				</div>
				<div class="col-sm-5 img-column"><br><br><br><br>
					<center><img src="<?php echo base_url(); ?>/assets/img/Tes_1-09.png" width="300" class="img-responsive" /></center>
				</div>
				</div>
		</div>
	</section>

	<section id="about_walls" class="section bg8 align-center">
		<div class="container">
				<div class="row">
				<div class="col-sm-5 img-column"><br><br><br><br>
					<center><img src="<?php echo base_url(); ?>/assets/img/Tes_1-11.png" width="300" class="img-responsive" /></center>
				</div>
				<div class="col-sm-7 align-left"><br><br><br><br>
					<center><img src="<?php echo base_url(); ?>/assets/img/logo_walls_putih.png" width="170" class="img-responsive" /></center><br><br>
					<p style="text-align:justify; color: #fff;">In 1922, T Wall and Sons started making ice cream in their West London factory because their sausages didn't seem to sell as well in the summer. Wall's Ice Cream was born. Before long our wholesome, delicious bricks and tubs were making their way around the streets, first by horse and cart, then by tricycle, a ringing bell tempting people to 'Stop Me and Buy One'. People's love affair with Wall's blossomed in homes, cinemas and all around town. Refreshing fruit ices followed and began a flurry of innovation which gave rise to truly novel and iconic products, and continues to this day. Meanwhile, brands like Algida, Kibon, Langnese, Olà, Streets, Holanda and GB Glace were becoming household names, capturing the hearts of ice cream lovers all over the world.
					<br>
					Check out:<br>
					<a href="https://www.unilever.co.id/brands/our-brands/es-krim-walls.html" style="color: #fff;">https://www.unilever.co.id/brands/our-brands/es-krim-walls.html</a><br>
	      			<a href="www.wallsicecream.com" style="color: #fff;">www.wallsicecream.com</a>	
					</p>
					<ul>
					</ul><br><br><br><br>
				</div>
				</div>
		</div>
	</section>
	<section id="about_marketition" class="section bg1">
		<div class="container"><br><br>
				<center><img src="<?php echo base_url(); ?>/assets/img/logo_marketition.png" width="600" class="img-responsive" /></center>
				<div class="row">
				<div class="col-sm-5 img-column left-side">
					<left><img src="<?php echo base_url(); ?>/assets/img/Tes_1-10.png" width="300" class="img-responsive" /></left>
				</div>
				<div class="col-sm-7 align-left">
					<p style="text-align:justify; color: #fff;">Marketition is an annual national marketing competition for graduate students (S2) in Indonesia. It is one of the series of events under Ideacraft organized by Management Society, a student organization of Magister Management of Universitas Prasetiya Mulya. Consisting  of multiple rounds, Marketition offers an authentic marketing case provided by a case provider. This year is our 7th annual competition and we are scaling it up across the South East Asian region  with Wall’s serving as the main case provider.
					<br>
					Our partnership with Unilever is based on a common goal: to pursue the vision of AFTA, a free trade area to improve the competitiveness of South East Asia’s products and human capital in the international market. In our bid to achieve the goal, Marketition hereby invites graduate students from across South East Asia to compete in this multinational event by solving a real and current business case from Wall’s.
					<br><br>
					The 7th Marketition has been conceived to serve as a platform for:<br>
					1. Solving a real marketing case;<br>
					2. Generating creative marketing ideas;<br>
					3. Networking among business graduate students and marketing decision makers; and,
					4. Preparing global competitions for both business graduate students and companies.<br>
					<br>
					<b>Vision :</b><br>
					To become the pioneer of graduate level marketing-plan competition in Indonesia that covers the ASEAN market as a tool to improve the quality and competence of human resources and businesses in South East Asia by delivering real marketing issues provided by the Case Provider.
					</p><br><br><br><br>
					<ul>
					</ul>
				</div>
				</div>
		</div>
	</section>

	<section id="competition" class="section bg10 align-center">
			<div class="container">
			<div class="row"><br><br><br><br>
				<span class="icon section-icon icon-documents-bookmarks-12" style="color: #007dbb;"></span>
					<h4 class="heading-alt"><font style="font-family: StickARound; color: #007dbb; letter-spacing: 5px;">Competition</font></h4>
					<p class="text-alt">Detail information</p><br><br>
					<div class="tabs-wrapper tabs-horizontal">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#horizontal_tab1" data-toggle="tab">
								<h6 class="heading-alt"><span></span>Format & Rules</h6>
							</a></li>
							<li><a href="#horizontal_tab2" data-toggle="tab">
								<h6 class="heading-alt"><span></span>FAQ</h6>
							</a></li>
						</ul>

						<div class="tab-content">
							<div id="horizontal_tab1" class="tab-pane fade active in">
								<div class="col-sm-5 img-column">
									<img src="<?php echo base_url(); ?>/assets/img/Tes_1-12.png" width="400" class="img-responsive" />
								</div>
							<div class="col-sm-7"><br><br><br><br>
								<h6 class="text-ditengah" style="font-family: StickARound; color: #007dbb;" >Format and Rules</h6>
								<p class="align-left" style="text-align:justify; color: #111;">Ready for challenge? Here are some rules you should know. Kindly download the full version of general rules by clicking the button below.</p>
								<div class="btns-container">
									<a href="<?php echo base_url();?>assets/doc/general_rules_marketition_2018.pdf" class="btn btn-md" target="_blank">Download</a>
								</div>
							</div>
							</div>

							<div id="horizontal_tab2" class="tab-pane fade">
								<div class="col-sm-5 img-column"><br><br>
									<img src="<?php echo base_url(); ?>/assets/img/Tes_1-12.png" alt="" width="400" class="img-responsive" />
								</div>
									<div class="col-sm-7 align-left">
									<h6 style="font-family: StickARound; color: #007dbb;">FAQ</h6>
									<p style="text-align:justify; color: #111;">
									TBA.
									</p>
								</div>
							</div>
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
                <h4 class="heading-alt" style="letter-spacing: 5px;"><center>Schedule</center></h4>
					<section class="timeline">
					  <ol>
					  	<li>
					      <div>
					        <time>14 Agustus 2018</time>Open Registration
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>12 September 2018</time>Close Registration
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>15 September 2018</time>Technical Meeting & Case Release
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>5 October 2018</time>Executive Summary <br> Submission Deadline
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>15 - 31 October 2018</time>Illustration & Prototyping Stage
					      </div>
					    </li>
					    <li>
					      <div>
					        <time>2 November 2018</time>Illustration & Prototyping<br>Submission Deadline
					    </li>
					    <li>
					      <div>
					        <time>10 November 2018</time>Final Day
					    </li>
					    <li></li>
					  </ol>
					</section>

            </div> <!-- end div experience -->
        </div> <!-- end row experience -->
    </div> <!-- end container experience -->

 <!-- end work experience -->
	</section>

	<section id="gallery" class="section bg10 align-center">
		<div class="container"><br><br><br><br>
			<span class="icon section-icon icon-documents-bookmarks-12" style="color: #007dbb;"></span>
			<h4 class="heading-alt"><font style="font-family: StickARound; color: #007dbb; letter-spacing: 5px;">Gallery</font></h4><br><br><br>
			<div class="row gallery">
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="1"><img src="<?php echo base_url();?>assets/img/gallery_marketition/DSCF2575.jpg" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="2"><img src="<?php echo base_url();?>assets/img/gallery_marketition/DSCF2553.jpg" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="3"><img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5888.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="4"><img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5887.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="5"><img src="<?php echo base_url();?>assets/img/gallery_marketition/DSCF2698.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="6"><img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5879.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="7"><img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5882.jpg" alt="" width="500"></a>				
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="8"><img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5886.jpg" alt="" width="500"></a>
				<a href="#" class="gallery-item gallery-thumb-link" data-modal-link="9"><img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5885.jpg" alt="" width="500"></a>
			</div>
		</div>
	</section>

	<div class="modal-window" data-modal="1">
		<div class="modal-box animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/DSCF2575.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="2">
		<div class="modal-box animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/DSCF2553.jpg"  class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="3">
		<div class="modal-box animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5888.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="4">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5887.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="5">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/DSCF2698.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="6">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5879.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="7">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5882.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="8">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5886.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<div class="modal-window" data-modal="9">
		<div class="modal-box large animated" data-animation="zoomIn" data-duration="700">
			<span class="close-btn icon icon-office-52"></span>
				<img src="<?php echo base_url();?>assets/img/gallery_marketition/IMG_5885.jpg" class="full-width-img" alt="gallery3">
		</div>
	</div>

	<section id="testimonials" class="section align-center" style="display: none">
		<div class="container">
			<span class="icon section-icon icon-documents-bookmarks-12"></span>
			<h4 class="heading-alt"><font style="font-family: StickARound; color: #007dbb;">Testimonials</font></h4>
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
									<article class="text-box" style="text-align:justify; color: #666;">How you present your idea is as important as the idea itself. Through PITCH FIRST, I learned that great presentation comes from greater preparation. It was
									a memorable, thrilling and exciting competition that pushed me to improve my
									pitching skills beyond what i thought were already my best. Absolutely
									recommended!</article>
									<div class="author-block">
										<div class="photo-container" style="background-image: url('<?php echo base_url();?>assets/img/testimonials/gary.jpeg')"></div>

										<strong class="name">Gary Aruana K.</strong>
										<small class="text-alt company"><b>1st winner marketition 2017</b></small>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<article class="text-box" style="text-align:justify; color: #666;">
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
									<article class="text-box" style="text-align:justify; color: #666;">By joining this competition, PITCH FIRST, you will gain new experiences and learn to perform in front of the crowd. The committee was so friendly and make us become not nervous.<br>
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
									<article class="text-box" style="text-align:justify; color: #666;">Feel the different atmosphere from other competitions. This is marketition,
									you're not only in need of business ability but also encourage to work with
									other sectors and became a distiguish value in community. To me It was very
									impressive experience joined PITCH FIRST 2017.</article>
									<div class="author-block">
										<div class="photo-container" style="background-image: url('<?php echo base_url();?>assets/img/testimonials/dhwi.jpeg')"></div>
										<strong class="name">Dhwi Ba’diya M.</strong>
										<small class="text-alt company"><b>Favorite Team marketition 2017</b></small>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
		</div>			
	</section>	

	<section id="venue" class="overlay bg-cover bg9 light-text">
		<!-- Inspired by Codyhouse -->
 	<div class="container experience">
        <div class="row">
            <div class="col-md-12"><br><br>
            	<center><h4 style="letter-spacing: 5px;">VENUE</h4><br><br><br><br><br><br><br><br><br><center>Auditorium Universitas Prasetiya Mulya</center>Jl. R.A Kartini (TB Simatupang)<br>
						Cilandak Barat, Jakarta Selatan, 12430<br><br><br></center>
            </div> <!-- end div experience -->
        </div> <!-- end row experience -->
    </div> <!-- end container experience -->

 <!-- end work experience -->
	</section>

	<section id="contacts">
		<div class="contacts-wrapper">
			<div id="map" class="map" data-settings="<?php echo base_url();?>assets/js/map-settings.json" style="height:560px;"></div>
			<div class="container contacts-on-map-container">
				<div class="contacts-on-map">
					<h5 style="font-family: StickARound; color: #007dbb; letter-spacing: 5px;">Contact Persons</h5>
					<ul class="list" style="text-align:justify; color: #666;" ><b>OFFICE</b><br>
						<li><i class="fa fa-map-marker" style="text-align:justify; color: #666; line-height: "></i>Management Society<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Universitas Prasetiya Mulya<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jl. R.A Kartini (TB Simatupang)<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cilandak Barat, Jakarta Selatan, 12430</li>
						<li><b><a href="https://goo.gl/maps/hEwgtFeAbjB2" target="_blank" style="font-family: StickARound; color: #007dbb;">Click to direction</a></b></li>
						<b><font style="text-align:justify; color: #666;">Silvy Laurencia</font></b>
						<li><a href="https://api.whatsapp.com/send?phone=6281932249491"><i class="fa fa-phone" style="text-align:justify; color: #666;"></i><font style="text-align:justify; color: #666;">081932249491</font></a></li>
						<li><a href="mailto:camilla.jasrin@student.pmbs.ac.id"><i class="fa fa-envelope" style="text-align:justify; color: #666;"></i><font style="text-align:justify; color: #666;">ms.silvylaurencia@gmail.com </font></a></li>
						<b><font style="text-align:justify; color: #666;">Yudhistira Herubowo</font></b>
						<li><a href="https://api.whatsapp.com/send?phone=628119102720"><i class="fa fa-phone" style="text-align:justify; color: #666;"></i><font style="text-align:justify; color: #666;">08119102720</font></a></li>
						<li><a href="mailto:yudhistira.herubowo@student.pmbs.ac.id"><i class="fa fa-envelope" style="text-align:justify; color: #666;"></i><font style="text-align:justify; color: #666;">yudhistira.herubowo@student.pmbs.ac.id</font></a></li>
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
					<li class="socials-nav-item"><a href="https://api.whatsapp.com/send?phone=6281932249491" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
					<li class="socials-nav-item"><a href="https://instagram.com/marketition.id" target="_blank""><span class="fa fa-instagram"></span></a></li>
					<li class="socials-nav-item"><a href="mailto:ms.silvylaurencia@gmail.com " target="_blank"><span class="fa fa-envelope"></span></a></li>
					</ul>
				</div><br>
				<center><p style="color: #fff;">Copyright © 2018 Marketition. All Rights Reserved.</p></center>

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
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/ventcamp_marketition.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/timeline.js"></script>
</body>
</html>
