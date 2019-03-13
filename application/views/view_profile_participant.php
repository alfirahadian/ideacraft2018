<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Profile Page</title>

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
<header class="header header-black">
    <div class="header-wrapper">
      <div class="container">
        <div class="col-sm-2 col-xs-12 navigation-header">
          <a href="#">
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
              <li class="navigation-item"><a href="" class="navigation-link">Home</a></li>
              <li class="navigation-item"><a href="../logout" class="navigation-link">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

	<section class="bg2 bg-cover window-height">
  <?php 
    //error_reporting(0);
    if (is_array($row)){
      foreach ($row as $key ) {
        $email = $key->email;
        $team_name = $key->team_name;
        $university = $key->university;
        $bio1_name = $key->bio1_name;
        $bio1_major = $key->bio1_major;
        $bio1_phone = $key->bio1_phone;
        $bio1_address = $key->bio1_address;
        $bio1_id_card = $key->bio1_id_card;
        $bio2_name = $key->bio2_name;
        $bio2_major = $key->bio2_major;
        $bio2_phone = $key->bio2_phone;
        $bio2_address = $key->bio2_address;
        $bio2_id_card = $key->bio2_id_card;
        $ref_code_gen = $key->ref_code_gen;
        $billing = $key->billing;
        $status = $key->status;
        $payment_proof = $key->payment_proof;
        $student_letter = $key->student_letter;
        $deadline_date = $key->deadline_date;
        $register_date = $key->register_date;
        $username_ig = $key->username_ig;
        $video_ig = $key->video_ig;
        $executive_summary = $key->executive_summary;
?>
      <center><h4><?php echo $team_name;?> Profile Page</h4></center>
			<div class="container">
      <h5>Detail Team Info</h5>
      <div class="row">
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Account Status:</td>
              <td><?php if ($status == '0') {
                  echo "<b><font color='red'>INACTIVE</font></b>";
                } elseif ($status == '1') {
                  echo "<b><font color='green'>ACTIVE</font></b>";
                }
                ?>
              </td>
            </tr>
            <tr>
            <tr>
              <td>Team Name:</td>
              <td><?php echo $team_name; ?></td>
            </tr>
            <tr>
              <td>University:</td>
              <td><?php echo $university; ?></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><?php echo $email; ?></td>
            </tr>
            <tr>
              <td>Deadline submit Executives Summary and Video:</td>
              <td><?php echo $deadline_date; ?></td>
            </tr>
          </table> 
      </div><br>

      <!-- BILLING PROOF -->
      <h5>Billing & Payment Proof</h5>
      <div class="row">
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Billing:</td>
              <td>Rp <?php echo $billing; ?></td>
            </tr>
            <tr>
            <tr>
              <td>Payment Proof:</td>
              <?php 
                if($payment_proof == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <img src="<?php echo base_url();?>uploads/<?php echo $payment_proof;?>" width="200">
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div><br>

      <!-- STUDENT LETTER -->
      <h5>Student Acknowldegement Letter</h5>
      <div class="row">
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Student Acknowledgement Letter:</td>
              <?php 
                if($student_letter == ''){
               ?>
              <td>
               Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/<?php echo $student_letter;?>" target="_blank"><button class="btn-small navy">View File</button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div><br>

      <!-- EXECUTIVE SUMMARY -->
      <h5>Executive Summary</h5>
      <div class="row">
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Executive Summary:</td>
              <?php 
                if($executive_summary == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/<?php echo $executive_summary;?>" target="_blank"><button class="btn-small navy">View File</button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div><br>

      <!-- INSTAGRAM -->
      <h5>Instagram</h5>
      <div class="row">
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Link Instagram Profile:</td>
              <?php 
                if($username_ig == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo $username_ig; ?>" target="_blank"><button class="btn-small red">View Profile</button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>

            <tr>
              <td>Link Preliminary Pitch Video (Business Idea):</td>
              <?php 
                if($video_ig == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo $username_ig; ?>" target="_blank"><button class="btn-small orange">View Video</button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div><br>

      <div class="row">
       <h5>Participant 1</h5>
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Name:</td>
              <td><?php echo $bio1_name; ?></td>
            </tr>
            <tr>
              <td>Phone:</td>
              <td><?php echo $bio1_phone; ?></td>
            </tr>
            <tr>
              <td>Major:</td>
              <td><?php echo $bio1_major; ?></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><?php echo $bio1_address; ?></td>
            </tr>
            <tr>
              <td>ID Card Student:</td>
              <?php 
                if($bio1_id_card == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <img src="<?php echo base_url();?>uploads/<?php echo $bio1_id_card;?>" width="200">
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div>
      <div class="row">
       <h5>Participant 2</h5>
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Name:</td>
              <td><?php echo $bio2_name; ?></td>
            </tr>
            <tr>
              <td>Phone:</td>
              <td><?php echo $bio2_phone; ?></td>
            </tr>
            <tr>
              <td>Major:</td>
              <td><?php echo $bio2_major; ?></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><?php echo $bio2_address; ?></td>
            </tr>
            <tr>
              <td>ID Card Student:</td>
              <?php 
                if($bio2_id_card == ''){
               ?>
              <td>
               Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <img src="<?php echo base_url();?>uploads/<?php echo $bio2_id_card;?>" width="200">
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div>
  <?php
      }
  }
  ?> 
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