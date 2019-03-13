<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Login</title>

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
</head>

<body>
<div class="tengah">
	<section id="hero" class="hero-section bg1 bg-cover window-height">
			<div class="container">
          <br><br><br><br>
					<center><a href="<?php echo base_url();?>pitchfirst"><img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" alt="" width="150" class="img-responsive" /></a></center><br>
					<center><h4 style="font-family: Avenir Next; color: white;">Participant Login</h4></center>
					 <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
							 	<?php //(isset($ref_code_exceed))?$ref_code_exceed:''
		                              if (isset($error_message)){
		                              ?>
		                        		<font color="yellow"><center><b><?php
		                              //echo var_dump($message);
		                              echo "$error_message";
		                              }
		                        ?></font></b></center>

                              <?php echo form_open("pitchfirst/user_login_process"); ?>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="email" style="color: #fff;" >Email</label>
                                          <input style="color: #fff;" type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
                                          <?php echo form_error('email', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                                    <div class="input-field col s12 l12">
                                          <label for="password" style="color: #fff;" >Password</label>
                                          <input style="color: #fff;"  type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                                          <?php echo form_error('password', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                              </div>
                              <p align="center" style="color: #fff"><b>Don't have an account? <a href="<?php echo base_url();?>pitchfirst/registration">Sign Up</a></b></p>
                              <div class="row">
                                    <center><input type="submit" value="Login" class="btn" value="submit"></center>
                              </div><br><br>
                              <br><br><br><br><br>
                        <?php echo form_close(); ?>
                    <br>
            </div>
			</div>
	</section>
</div>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
</body>
</html>
