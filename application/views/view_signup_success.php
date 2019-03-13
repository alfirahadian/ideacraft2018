<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Sign Up Success</title>

	<meta name="description" content="PSD to HTML5+CSS3 conversion.">
	<meta name="keywords" content="PSD, HTML5, CSS3">
	<meta name="author" content="Alfi Rahadian">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-pink-color.css" />
	<!-- Materialize -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Compiled and minified JavaScript -->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
      <!-- For load material icon -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- End of Materialize -->

    <style type="text/css">
    	body {
    		color: #ffffff !important;
    	}
    	.input-field{
    		color: #fff !important;
    	}
    </style>
</head>

<body>
<header class="header header-black">
    <div class="header-wrapper">
      <div class="container">
        <div class="col-sm-2 col-xs-12 navigation-header">
          <a href="<?php echo base_url();?>pitchfirst">
            <img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" height="50">
          </a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="navigation-container">
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="navigation-list pull-right light-text">
              <li class="navigation-item"><<a href="<?php echo base_url();?>pitchfirst" class="navigation-link">Home</a></li>
              <li class="navigation-item"><<a href="<?php echo base_url();?>pitchfirst/login" class="navigation-link">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

	<section class="bg2 bg-cover window-height">
			<div class="container">
					 <div class="row">
            <div class="col l8 s12 m8"><br>
                  <h5 style="font-family: Avenir Next;"><b>Registration Success,
                        <b>
                        <?php
                              //var_dump ($data['email']);
                              //print_r($data);
                              //echo $data['email'];
                        ?></b>
                  ! </h5>
                 <p style="font-family: Avenir Next; color: black; text-align: justify;"> <b><?php if ($data['ref_code_input'] !== '') { ?>Your referral code has been successfully applied and you are officially registered.<?php } ?></b></p>
                  <h5 style="font-family: Avenir Next; color: black;">Total payment is <b>Rp <?php echo $data['billing']; ?></b></h5>
                  <p style="font-family: Avenir Next; color: black;">Payment is to be made in IDR through bank/mobile transfer to: <br>
                  <b>Yayasan Prasetiya Mulya
                  <br>BCA KCU SCBD, Jakarta
                  <br>
                  006-309-3669
                  <br>
                  </b>
                  </p>
                  <br>
                  <p style="font-family: Avenir Next; color: black; text-align: justify;">                  
                  Complete the payment within 48 hours. <br>
                  Upload your payment proof on <font color="#344F6E"><b><a href="./login">here</a></b></font>. <br>
                  Check your email for payment confirmation guideline and further information. <br>If you do not receive the confirmation message within a few minutes of signing up, please check your Spam.<br><br>
                  </p>
            </div>
      </div>
			</div>
	</section>

  <section>
    <div class="footer-base">
      <div class="container">
        <div class="align-right">
          <p class="text-alt"><small>All Rights Reserved © 2018</small></p>
        </div>

      </div>
    </div>
  </section>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
</body>
</html>
