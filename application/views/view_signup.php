<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Sign Up</title>

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
	<section id="hero" class="hero-section bg1 bg-cover window-height">
			<div class="container"><br><br>
					<center><a href="<?php echo base_url();?>pitchfirst"><img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" alt="" width="150" class="img-responsive" /></a></center><br>
					<center><h4 style="font-family: Avenir Next; color: white;">Registration</h4></center>
					 <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
							 	<?php //(isset($ref_code_exceed))?$ref_code_exceed:''
		                              if (isset($message)){
		                              ?>
		                        		<font color="yellow"><center><b><?php
		                              //echo var_dump($message);
		                              echo "$message";
		                              }
		                        ?></font></b></center>

                              <?php echo form_open("pitchfirst/registration_pitch_first"); ?>
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
                                    <p align="justify">Remember your e-mail and password, because it will be used for login and to upload your executive summary.</p>
                              </div>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="team_name" style="color: #fff;" >Team Name</label>
                                          <input style="color: #fff;"  type="text" id="team_name" name="team_name" value="<?php echo set_value('team_name'); ?>" />
                                          <?php echo form_error('team_name', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                              </div>
                               <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="university" style="color: #fff;" >University Name</label>
                                          <input style="color: #fff;"  type="text" id="university" name="university" value="<?php echo set_value('university'); ?>" />
                                          <?php echo form_error('university', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                              </div><br>
                              <div class="row">
                                    <h6 style="color: #fff;" >Participant Biodata 1</h6>
                              </div>
                               <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio1_name" style="color: #fff;" >Full Name</label>
                                          <input style="color: #fff;"  type="text" id="bio1_name" name="bio1_name" value="<?php echo set_value('bio1_name'); ?>" />
                                          <?php echo form_error('bio1_name', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio1_phone" style="color: #fff;" >Phone Number</label>
                                          <input style="color: #fff;"  type="text" id="bio1_phone" name="bio1_phone" value="<?php echo set_value('bio1_phone'); ?>" />
                                          <?php echo form_error('bio1_phone', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio1_major" style="color: #fff;" >Major</label>
                                          <input style="color: #fff;"  type="text" id="bio1_major" name="bio1_major" value="<?php echo set_value('bio1_major'); ?>" />
                                          <?php echo form_error('bio1_major', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio1_address" style="color: #fff;" >Address</label>
                                          <input style="color: #fff;"  type="text" id="bio1_address" name="bio1_address" value="<?php echo set_value('bio1_address'); ?>" />
                                          <?php echo form_error('bio1_address', '<div class="error" style="color: yellow;">', '</div>'); ?>
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                    <h6 style="color: #fff;" >Participant Biodata 2</h6>
                              </div>
                               <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio2_name" style="color: #fff;" >Name</label>
                                          <input style="color: #fff;" type="text" id="bio2_name" name="bio2_name" value="<?php echo set_value('bio2_name'); ?>" />
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio2_phone" style="color: #fff;" >Phone Number</label>
                                          <input style="color: #fff;"  type="text" id="bio2_phone" name="bio2_phone" value="<?php echo set_value('bio2_phone'); ?>" />
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio2_major" style="color: #fff;" >Major</label>
                                          <input style="color: #fff;" type="text" id="bio2_major" name="bio2_major" value="<?php echo set_value('bio2_major'); ?>" />
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s12 l12">
                                          <label for="bio2_address" style="color: #fff;" >Address</label>
                                          <input style="color: #fff;"  type="text" id="bio2_address" name="bio2_address" value="<?php echo set_value('bio2_address'); ?>" />
                                    </div>
                              </div><br>
                              <div class="row">
                              		<h6 style="color: #fff;" >Referral Code</h6>
                                    <div class="input-field col s12 l12">
                                          <input style="color: #fff;"  placeholder="Input Referral Code"  type="text" id="ref_code" name="ref_code" value="<?php echo set_value('ref_code'); ?>" />
                                    </div><br> 
                                    <p align="center"><b>Use referral code to get more discount.</b></p>
                              </div>
                              <input type="hidden" name="status" value="0" />
                              <div class="row">
                                    <center><input type="submit" value="Register" class="btn" value="submit"></center>
                              </div><br><br><br>
                        <?php echo form_close(); ?>
                    </div>
			</div>
	</section>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
</body>
</html>
