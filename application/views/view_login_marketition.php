<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Login Marketition 2018</title>

	<meta name="description" content="PSD to HTML5+CSS3 conversion.">
	<meta name="keywords" content="PSD, HTML5, CSS3">
	<meta name="author" content="Alfi Rahadian">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon_marketition.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-berry-color.css" />
	<!-- Materialize -->
	
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
    		color: #666fff !important;
    	}
    	.input-field{
    		color: #666 !important;
    	}
    </style>
</head>

<body>
  <section class="section bg2 light-text align-center">
    <div class="container"><br><br>
        <center><a href="<?php echo base_url();?>marketition"><img src="<?php echo base_url();?>assets/img/LogoMarketition.png" alt="" width="600" class="img-responsive" /></a></center><br><br>
          <center><h4 style="font-family: StickARound; color: white; letter-spacing: 10px;">Login</h4></center>
    </div>
  </section>
  <img src="<?php echo base_url();?>assets/img/masthead-bottom.png">
	<section id="hero" class="hero-section bg-cover bg-white window-height">
			<div class="container"><br><br>
					 <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
                            <?php //(isset($ref_code_exceed))?$ref_code_exceed:''
                                  if (isset($error_message)){
                                  ?>
                                <font color="error"><center><?php
                                  //echo var_dump($message);
                                  echo "$error_message";
                                  }
                            ?></font></center>

                        <?php echo form_open("marketition/user_login_process#login"); ?>
                              <div id="login" class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="email" style="color: #666;" >Email</label>
                                          <input style="color: #666;" type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
                                          <?php echo form_error('email', '<div class="error" style="color: red;">', '</div>'); ?>
                                    </div>
                                    <div class="input-field col s12 l12">
                                          <label for="password" style="color: #666;" >Password</label>
                                          <input style="color: #666;"  type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                                          <?php echo form_error('password', '<div class="error" style="color: red;">', '</div>'); ?>
                                    </div>
                              </div>
                              <p align="center" style="color: #666">Don't have an account? <a href="<?php echo base_url();?>/marketition/registration" style="color: #666"><b>Sign Up</b></a></p>
                              <div class="row">
                                    <center><input type="submit" value="Login" class="btn-large blue" value="submit"></center>
                        <?php echo form_close(); ?>
                    </div>
			</div>
	</section>


  <section>
    <img src="<?php echo base_url();?>assets/img/footer-blue.png">
    <div class="footer-base-signup">
      <div class="container">
        <div class="col-md-12 align-center">
          <ul class="socials-nav">
          <li class="socials-nav-item"><a href="https://www.facebook.com/Ideacraftid-123336021550976/" target="_blank"><span class="fa fa-facebook"></span></a></li>
          <li class="socials-nav-item"><a href="https://api.whatsapp.com/send?phone=6285813853750" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
          <li class="socials-nav-item"><a href="https://instagram.com/marketition.id" target="_blank""><span class="fa fa-instagram"></span></a></li>
          <li class="socials-nav-item"><a href="mailto:yohanna.001@student.pmbs.ac.id" target="_blank"><span class="fa fa-envelope"></span></a></li>
          </ul>
        </div><br>
        <center style="color: white"><p>Copyright © 2018 Marketition. All Rights Reserved.</p></center>

      </div>
    </div>
  </section>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
</body>
</html>
