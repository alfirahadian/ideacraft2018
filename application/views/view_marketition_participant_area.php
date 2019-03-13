<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Participant Area</title>

	<meta name="description" content="PSD to HTML5+CSS3 conversion.">
	<meta name="keywords" content="PSD, HTML5, CSS3">
	<meta name="author" content="Alfi Rahadian">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon_marketition.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-berry-color.css" />
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
  <section class="section bg2 light-text align-center">
    <div class="container">

      <header class="header header-black">
    <div class="header-wrapper">
      <div class="container">
        <div class="col-sm-2 col-xs-12 navigation-header">
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
          <a href="" class="logo">
            <img src="<?php echo base_url();?>assets/img/logo-marketition.png" alt="Marketition 2018" width="78" height="55" class="retina-show">
          </a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="col-sm-10 col-xs-12 navigation-container hidden-lg hidden-md">
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="navigation-list pull-right light-text">
              <li class="navigation-item"><a href="<?php echo base_url();?>marketition"" class="navigation-link">Home</a></li>
              <?php if(isset($this->session->userdata['logged_in'])){ ?>
                <li class="navigation-item"><a href="<?php echo base_url();?>marketition/logout" class="navigation-link" style="font-family: Avenir Next; color: #FCE200;">Logout</a></li>
              <?php
              }else{ ?>
                <li class="navigation-item"><a href="<?php echo base_url();?>marketition/login" class="navigation-link" style="font-family: Avenir Next; color: #FCE200;">Login</a></li>
              <?php 
              } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
        <center><a href="<?php echo base_url();?>marketition"><img src="<?php echo base_url();?>assets/img/LogoMarketition.png" alt="" width="600" class="img-responsive" /></a></center><br><br>
    </div>
  </section>
  <img src="<?php echo base_url();?>assets/img/masthead-bottom.png">

	<section class="window-height" style="color: #666">
  <?php 
    //error_reporting(0);
    if (is_array($row)){
      foreach ($row as $key ) {
        $email = $key->email;
        $team_name = $key->team_name;
        $university = $key->university;
        $country = $key->country;
        $bio1_name = $key->bio1_name;
        $bio1_major = $key->bio1_major;
        $bio1_phone = $key->bio1_phone;
        $bio1_company = $key->bio1_company;
        $bio1_address = $key->bio1_address;
        $bio1_id_card = $key->bio1_id_card;
        $bio1_id_card_employee = $key->bio1_id_card_employee;
        $bio1_ack_letter = $key->bio1_ack_letter;
        $bio1_ack_letter_employee = $key->bio1_ack_letter_employee;
        $bio2_name = $key->bio2_name;
        $bio2_major = $key->bio2_major;
        $bio2_phone = $key->bio2_phone;
        $bio2_company = $key->bio2_company;
        $bio2_address = $key->bio2_address;
        $bio2_id_card = $key->bio2_id_card;
        $bio2_id_card_employee = $key->bio2_id_card_employee;
        $bio2_ack_letter = $key->bio2_ack_letter;
        $bio2_ack_letter_employee = $key->bio2_ack_letter_employee;
        $bio3_name = $key->bio3_name;
        $bio3_major = $key->bio3_major;
        $bio3_phone = $key->bio3_phone;
        $bio3_company = $key->bio3_company;
        $bio3_address = $key->bio3_address;
        $bio3_id_card = $key->bio3_id_card;
        $bio3_id_card_employee = $key->bio3_id_card_employee;
        $bio3_ack_letter = $key->bio3_ack_letter;
        $bio3_ack_letter_employee = $key->bio3_ack_letter_employee;
        $bio4_name = $key->bio4_name;
        $bio4_major = $key->bio4_major;
        $bio4_phone = $key->bio4_phone;
        $bio4_company = $key->bio4_company;
        $bio4_address = $key->bio4_address;
        $bio4_id_card = $key->bio4_id_card;
        $bio4_id_card_employee = $key->bio4_id_card_employee;
        $bio4_ack_letter = $key->bio4_ack_letter;
        $bio4_ack_letter_employee = $key->bio4_ack_letter_employee;
        $bio5_name = $key->bio5_name;
        $bio5_major = $key->bio5_major;
        $bio5_phone = $key->bio5_phone;
        $bio5_company = $key->bio5_company;
        $bio5_address = $key->bio5_address;
        $bio5_id_card = $key->bio5_id_card;
        $bio5_id_card_employee = $key->bio5_id_card_employee;
        $bio5_ack_letter = $key->bio5_ack_letter;
        $bio5_ack_letter_employee = $key->bio5_ack_letter_employee;
        $participant_1_2_3 = $key->participant_1_2_3;
        $participant_4 = $key->participant_4;
        $participant_5 = $key->participant_5;
        $add_4th_participant = $key->add_4th_participant;
        $add_5th_participant = $key->add_5th_participant;
        $billing = $key->billing;
        $status = $key->status;
        $payment_proof = $key->payment_proof;
        $deadline_date = $key->deadline_date;
        $register_date = $key->register_date;
        $ack_letter_university = $key->ack_letter_university;
?>
      <center><h4 style="color: #666; letter-spacing: 5px;">Welcome <?php echo $team_name;?></h4></center>
			<div class="container"><br>
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
              <td>Country:</td>
              <td><?php echo $country; ?></td>
            </tr>
            <tr>
              <td>Submission Deadline of Executives Summary</td>
              <td>October 5, 2018</td>
            </tr>
          </table> 
      </div><br>

      <!-- BILLING PROOF -->
      <h5 style="color: #666; letter-spacing: 5px;">Billing & Payment Proof</h5>
      <div id="payment_proof" class="row">
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Billing:</td>
              <td>
                <?php if($country !== 'Indonesia')
                  { 
                    echo "USD ";
                  }
                  else {
                    echo "Rp ";
                  } ?>
                  <?php echo $billing; ?></td>
            </tr>
            <tr>
            <tr>
              <td>Payment Proof:</td>
              <?php 
                if($payment_proof == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_payment_proof#payment_proof');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="jpg/jpeg/png">
                    </div>
                  </div>
                  <input type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                 <a href="<?php echo base_url();?>uploads/marketition/<?php echo $payment_proof;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div><br>

      <?php if ($status == '1') { ?>
      <!-- Participant Details -->
      <center><h5 style="color: #666; letter-spacing: 5px;">Participant Details</h5></center>
      <!-- PARTICIPANT 1 -->
      <div id="participant_1_2_3" class="row">
      <h5 style="color: #666; letter-spacing: 5px;">1st Participant</h5>
      <?php if($participant_1_2_3 == '1'){ ?>
      <a href="<?php echo base_url();?>marketition/edit_participant_1" class="btn-small red" value="Edit">Edit</a>
      <?php } ?>
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <?php echo form_open("marketition/do_register_participant_1_2_3_marketition#participant_1_2_3"); ?>
            <tr>
              <td>Name:</td>
                <?php 
                if($bio1_name == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio1_name" name="bio1_name" value="<?php echo set_value('bio1_name'); ?>" />
                     <?php echo form_error('bio1_name', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>                  
                 <?php echo $bio1_name; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Mobile Phone Number:</td>
                <?php 
                if($bio1_phone == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio1_phone" name="bio1_phone" value="<?php echo set_value('bio1_phone'); ?>" />
                      <?php echo form_error('bio1_phone', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio1_phone; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Previous Major / Background:</td>
             <?php 
                if($bio1_major == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio1_major" name="bio1_major" value="<?php echo set_value('bio1_major'); ?>" />
                      <?php echo form_error('bio1_major', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio1_major; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <?php if ($participant_1_2_3 !== '1') { ?>
            <tr>
              <td>I am currently employed</td>
              <td> 
                <label>
                  <input type="checkbox" data-toggle="collapse" data-target="#collapseOne" name="bio1_tick" value="1"/>
                  <span></span>
                </label>
              </td>
            </tr>
            <?php } ?>
              <tr <?php if ($participant_1_2_3 !== '1') { ?> id="collapseOne" class="panel-collapse collapse out" <?php } ?>>
                <td><div>The company name (employees only):</div></td>
                <?php 
                  if($bio1_company == ''){
                 ?>
                 <td>
                    <div class="input-field col s12 l12">
                        <input style="color: #666;" type="text" id="bio1_company" name="bio1_company" value="<?php echo set_value('bio1_company'); ?>" />
                        <?php echo form_error('bio1_company', '<div class="error" style="color: red;">', '</div>'); ?>
                  </div>
                  </td>
                  <?php 
                  }
                  else {
                  ?>
                  <td>
                   <?php echo $bio1_company; ?>
                </td>
                <?php 
                    } 
                ?>
              </tr>
          </table>
          </div>
      <!-- PARTICIPANT 2 -->
      <br><br>
      <div class="row">
        <h5 style="color: #666; letter-spacing: 5px;">2nd Participant</h5>
      <?php if($participant_1_2_3 == '1'){ ?>
       <a href="<?php echo base_url();?>marketition/edit_participant_2" class="btn-small red" value="Edit">Edit</a>
      <?php } ?>
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Name:</td>
                <?php 
                if($bio2_name == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio2_name" name="bio2_name" value="<?php echo set_value('bio2_name'); ?>" />
                     <?php echo form_error('bio2_name', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio2_name; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Mobile Phone Number:</td>
                <?php 
                if($bio2_phone == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio2_phone" name="bio2_phone" value="<?php echo set_value('bio2_phone'); ?>" />
                      <?php echo form_error('bio2_phone', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio2_phone; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Previous Major / Background:</td>
             <?php 
                if($bio2_major == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio2_major" name="bio2_major" value="<?php echo set_value('bio2_major'); ?>" />
                      <?php echo form_error('bio2_major', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio2_major; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <?php if ($participant_1_2_3 !== '1') { ?>
             <tr>
              <td>I am currently employed</td>
              <td> 
                <label>
                  <input type="checkbox" data-toggle="collapse" data-target="#collapseTwo" name="bio2_tick" value="1"/>
                  <span></span>
                </label>
              </td>
            </tr>
          <?php } ?>
              <tr <?php if ($participant_1_2_3 !== '1') { ?> id="collapseTwo" class="panel-collapse collapse out" <?php } ?>>
              <td>The company name (employees only):</td>
              <?php 
                if($bio2_company == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio2_company" name="bio2_company" value="<?php echo set_value('bio2_company'); ?>" />
                      <?php echo form_error('bio2_company', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio2_company; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 2 -->
       <!-- PARTICIPANT 3 -->
      <br><br>
      <div class="row">
       <h5 style="color: #666; letter-spacing: 5px;">3rd Participant</h5>
       <?php if($participant_1_2_3 == '1'){ ?>
       <a href="<?php echo base_url();?>marketition/edit_participant_3" class="btn-small red" value="Edit">Edit</a>
      <?php } ?>
          <table class="col-lg-12">
          <col style="width:30%" span="5" />
            <tr>
              <td>Name:</td>
                <?php 
                if($bio3_name == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio3_name" name="bio3_name" value="<?php echo set_value('bio3_name'); ?>" />
                     <?php echo form_error('bio3_name', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio3_name; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Mobile Phone Number:</td>
                <?php 
                if($bio3_phone == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio3_phone" name="bio3_phone" value="<?php echo set_value('bio3_phone'); ?>" />
                      <?php echo form_error('bio3_phone', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio3_phone; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Previous Major / Background:</td>
             <?php 
                if($bio3_major == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio3_major" name="bio3_major" value="<?php echo set_value('bio3_major'); ?>" />
                      <?php echo form_error('bio3_major', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio3_major; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr> 
            <?php if ($participant_1_2_3 !== '1') { ?>
            <tr>
              <td>I am currently employed</td>
              <td> 
                <label>
                  <input type="checkbox" data-toggle="collapse" data-target="#collapseThree" name="bio3_tick" value="1"/>
                  <span></span>
                </label>
              </td>
            </tr>
            <?php } ?>
              <tr <?php if ($participant_1_2_3 !== '1') { ?> id="collapseThree" class="panel-collapse collapse out" <?php } ?>>
              <td>The company name (employees only):</td>
              <?php 
                if($bio3_company == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio3_company" name="bio3_company" value="<?php echo set_value('bio3_company'); ?>" />
                      <?php echo form_error('bio3_company', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio3_company; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 3-->

      <?php if($participant_1_2_3 !== '1') { ?>
      <center style="float: center"><input type="submit" value="Submit" class="btn-large blue darken-1" value="submit"></center>
      <?php } ?>
      <?php echo form_close(); ?>

      <br><br>

      <!-- ADD 4TH PARTICIPANT BUTTON -->      
      <?php if($add_4th_participant !== '1' AND $participant_1_2_3 == '1') { ?>
          <?php echo form_open("marketition/add_4th_participant"); ?>
          <center style="float: center"><input type="submit" value="Add New Participant" class="btn-large blue darken-4" value="submit"></center>
          <?php echo form_close(); ?>
      <?php } else { ?>
         <center style="float: center; <?php if ($add_4th_participant == '1') { ?>display:none <?php } ?>"><input type="submit" value="Add New Participant" class="btn-large blue darken-4 disabled" value="submit"></center>
      <?php } ?>
      

      <!-- PARTICIPANT 4 -->
      <br><br>
      <div id="bio4" class="row" <?php if($add_4th_participant !== '1') { ?>  style="display: none" <?php } ?>>
       <h5 style="color: #666; letter-spacing: 5px;">4th Participant</h5>
       <?php if($participant_4 == '1'){ ?>
       <a href="<?php echo base_url();?>marketition/edit_participant_4" class="btn-small red" value="Edit">Edit</a>
        <?php } ?>
          <table class="col-lg-12">
          <col style="width:30%" span="5" />
            <?php echo form_open("marketition/do_register_participant_4_marketition#bio4"); ?>
            <tr>
              <td>Name:</td>
                <?php 
                if($bio4_name == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio4_name" name="bio4_name" value="<?php echo set_value('bio4_name'); ?>" />
                     <?php echo form_error('bio4_name', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio4_name; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Mobile Phone Number:</td>
                <?php 
                if($bio4_phone == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio4_phone" name="bio4_phone" value="<?php echo set_value('bio4_phone'); ?>" />
                      <?php echo form_error('bio4_phone', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio4_phone; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Previous Major / Background:</td>
             <?php 
                if($bio4_major == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio4_major" name="bio4_major" value="<?php echo set_value('bio4_major'); ?>" />
                      <?php echo form_error('bio4_major', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio4_major; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
             <?php if ($participant_4 !== '1') { ?>
            <tr>
              <td>I am currently employed</td>
              <td> 
                <label>
                  <input type="checkbox" data-toggle="collapse" data-target="#collapseFour" name="bio4_tick" value="1"/>
                  <span></span>
                </label>
              </td>
            </tr>
            <?php } ?>
              <tr  <?php if ($participant_4 !== '1') { ?> id="collapseFour" class="panel-collapse collapse out" <?php } ?>>
              <td>The company name (employees only):</td>
              <?php 
                if($bio4_company == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio4_company" name="bio4_company" value="<?php echo set_value('bio4_company'); ?>" />
                      <?php echo form_error('bio4_company', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio4_company; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 4-->

      <?php if($participant_4 !== '1' AND $add_4th_participant == '1') { ?>
      <center style="float: center"><input type="submit" value="Submit" class="btn-large blue darken-1" value="submit"></center>
      <?php } ?>
      <?php echo form_close(); ?>

      <br><br>

       <!-- ADD 5TH PARTICIPANT BUTTON -->      
      <?php if($add_5th_participant !== '1' AND $participant_4 == '1') { ?>
          <?php echo form_open("marketition/add_5th_participant"); ?>
          <center style="float: center"><input type="submit" value="Add New Participant" class="btn-large blue darken-4" value="submit"></center>
          <?php echo form_close(); ?>
      <?php } else { ?>
         <center style="float: center; <?php if ($add_5th_participant !== '1' AND $add_4th_participant !== '1' OR $add_5th_participant == '1') { ?>display:none <?php } ?>"><input type="submit" value="Add New Participant" class="btn-large blue darken-4 disabled" value="submit"></center>
      <?php } ?>

      <!-- PARTICIPANT 5 -->
      <br><br>
      <div id="bio5" class="row" <?php if($add_5th_participant !== '1') { ?>  style="display: none" <?php } ?>>
       <h5 style="color: #666; letter-spacing: 5px;">5th Participant</h5>
       <?php if($participant_5 == '1'){ ?>
       <a href="<?php echo base_url();?>marketition/edit_participant_5" class="btn-small red" value="Edit">Edit</a>
      <?php } ?>
          <table class="col-lg-12">
          <col style="width:30%" span="5" />
            <?php echo form_open("marketition/do_register_participant_5_marketition#bio5"); ?>
            <tr>
              <td>Name:</td>
                <?php 
                if($bio5_name == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio5_name" name="bio5_name" value="<?php echo set_value('bio5_name'); ?>" />
                     <?php echo form_error('bio5_name', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio5_name; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Mobile Phone Number:</td>
                <?php 
                if($bio5_phone == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio5_phone" name="bio5_phone" value="<?php echo set_value('bio5_phone'); ?>" />
                      <?php echo form_error('bio5_phone', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio5_phone; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Previous Major / Background:</td>
             <?php 
                if($bio5_major == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio5_major" name="bio5_major" value="<?php echo set_value('bio5_major'); ?>" />
                      <?php echo form_error('bio5_major', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio5_major; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <?php if ($participant_5 !== '1') { ?>
             <tr>
              <td>I am currently employed</td>
              <td> 
                <label>
                  <input type="checkbox" data-toggle="collapse" data-target="#collapseFive" name="bio5_tick" value="1"/>
                  <span></span>
                </label>
              </td>
            </tr>
            <?php } ?>
              <tr <?php if ($participant_5 !== '1') { ?> id="collapseFive" class="panel-collapse collapse out" <?php } ?>>
              <td>The company name (employees only):</td>
              <?php 
                if($bio5_company == ''){
               ?>
               <td>
                  <div class="input-field col s12 l12">
                      <input style="color: #666;" type="text" id="bio5_company" name="bio5_company" value="<?php echo set_value('bio5_company'); ?>" />
                      <?php echo form_error('bio5_company', '<div class="error" style="color: red;">', '</div>'); ?>
                </div>
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio5_company; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 5-->

      <?php if($participant_5 !== '1' AND $add_5th_participant == '1') { ?>
      <center style="float: center"><input type="submit" value="Submit" class="btn-large blue darken-1" value="submit"></center>
      <?php } ?>
      <?php echo form_close(); ?>

      <!-- Identity Card and Acknowledgement Letter -->
      <br><br>
      <div class="row">
      <center><h5 style="color: #666; letter-spacing: 5px;">Identity Card and Acknowledgement Letter</h5></center><br>
      <h5 style="color: #666; letter-spacing: 1px;">1st Participant - <?php echo $bio1_name; ?></h5><br>
      <table>
       <tr>
              <td id="bio1_id_card">Student Identity Card:</td>
              <?php 
                if($bio1_id_card == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio1_id_card_marketition#bio1_id_card');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>
                <a href="<?php echo base_url();?>marketition/reset_bio1_id_card#bio1_id_card" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Student Acknowledgement Letter:</td>
              <?php 
                if($bio1_ack_letter == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio1_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio1_ack_letter#bio1_ack_letter" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
           <?php if ($bio1_company !== '-') { ?>
                <tr>
                  <td>Employee Identity Card:</td>
                  <?php 
                    if($bio1_id_card_employee == ''){
                   ?>
                  <td>
                    <?php echo form_open_multipart('marketition/do_upload_bio1_id_card_employee_marketition');?>
                      <div class="file-field input-field">
                        <div class="btn-small">
                          <span>Select</span>
                          <input type="file" name="userfile">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                        </div>
                      </div>
                      <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                    <?php echo "</form>"?>
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio1_id_card_employee#bio1_id_card_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
                  </td>
                  <?php 
                      } 
                  ?>
                </tr>
                <tr>
                  <td>Employee Acknowledgement Letter:</td>
                  <?php 
                    if($bio1_ack_letter_employee == ''){
                   ?>
                  <td>
                    <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio1_employee_marketition');?>
                      <div class="file-field input-field">
                        <div class="btn-small">
                          <span>Select</span>
                          <input type="file" name="userfile">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                        </div>
                      </div>
                      <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                    <?php echo "</form>"?>
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio1_ack_letter_employee#bio1_ack_letter_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
                  </td>
                  <?php 
                      } 
                  ?>
                </tr>
          <?php 
            }
            //tutup dari bio_company
           ?>
          </table>
        </div><br>
        <h5 style="color: #666; letter-spacing: 1px;">2nd Participant - <?php echo $bio2_name; ?></h5>
        <div class="row">
        <table>
            <tr>
              <td id="bio2_id_card">Student Identity Card:</td>
              <?php 
                if($bio2_id_card == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio2_id_card_marketition#bio2_id_card');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio2_id_card#bio2_id_card" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Student Acknowledgement Letter:</td>
              <?php 
                if($bio2_ack_letter == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio2_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio2_ack_letter#bio2_ack_letter" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
             <?php if ($bio2_company !== '-') { ?>
            <tr>
              <td>Employee Identity Card:</td>
              <?php 
                if($bio2_id_card_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio2_id_card_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio2_id_card_employee#bio2_id_card_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Employee Acknowledgement Letter:</td>
              <?php 
                if($bio2_ack_letter_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio2_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio2_ack_letter_employee#bio2_ack_letter_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php } ?>
        </table>
        </div><br>
        <h5 style="color: #666; letter-spacing: 1px;">3rd Participant - <?php echo $bio3_name; ?></h5>
        <div class="row">
        <table>
             <tr>
              <td id="bio3_id_card">Student Identity Card:</td>
              <?php 
                if($bio3_id_card == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio3_id_card_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio3_id_card#bio3_id_card" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Student Acknowledgement Letter:</td>
              <?php 
                if($bio3_ack_letter == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio3_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio3_ack_letter#bio3_ack_letter" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <?php if ($bio3_company !== '-') { ?>
            <tr>
              <td>Employee Identity Card:</td>
              <?php 
                if($bio3_id_card_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio3_id_card_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio3_id_card_employee#bio3_id_card_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Employee Acknowledgement Letter:</td>
              <?php 
                if($bio3_ack_letter_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio3_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio3_ack_letter_employee#bio3_ack_letter_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php } ?>
            </table>
            </div><br>

           <?php if($add_5th_participant !== '1' AND $add_4th_participant == '1' OR $add_5th_participant == '1') { ?>
                <h5 style="color: #666; letter-spacing: 1px;">4th Participant</h5>
                <div class="row">
                <table>
                  <tr>
                  <td id="bio4_id_card">Student Identity Card:</td>
                  <?php 
                    if($bio4_id_card == ''){
                   ?>
                  <td>
                    <?php echo form_open_multipart('marketition/do_upload_bio4_id_card_marketition');?>
                      <div class="file-field input-field">
                        <div class="btn-small">
                          <span>Select</span>
                          <input type="file" name="userfile">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                        </div>
                      </div>
                      <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                    <?php echo "</form>"?>
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio4_id_card#bio4_id_card" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
                  </td>
                  <?php 
                      } 
                  ?>
                </tr>
                <tr>
                  <td>Student Acknowledgement Letter:</td>
                  <?php 
                    if($bio4_ack_letter == ''){
                   ?>
                  <td>
                    <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio4_marketition');?>
                      <div class="file-field input-field">
                        <div class="btn-small">
                          <span>Select</span>
                          <input type="file" name="userfile">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                        </div>
                      </div>
                      <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                    <?php echo "</form>"?>
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio4_ack_letter#bio4_ack_letter" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
                  </td>
                  <?php 
                      } 
                  ?>
                </tr>
                 <tr>
               <?php if ($bio4_company !== '-') { ?>
              <td>Employee Identity Card:</td>
              <?php 
                if($bio4_id_card_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio4_id_card_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio4_id_card_employee#bio4_id_card_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a> 
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Employee Acknowledgement Letter:</td>
              <?php 
                if($bio4_ack_letter_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio4_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio4_ack_letter_employee#bio4_ack_letter_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php } ?>
                 </table>
                </div><br>
            <?php } ?>
            <?php if($add_4th_participant == '1' AND $add_5th_participant == '1') { ?>
            <h5 style="color: #666; letter-spacing: 1px;">5th Participant</h5>
            <div class="row">
            <table>
            <tr>
              <td id="bio5_id_card">Student Identity Card:</td>
              <?php 
                if($bio5_id_card == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio5_id_card_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio5_id_card#bio5_id_card" class="btn-small red" value="Edit"><i class="material-icons" onclick="return confirm('Are you sure to reupload?')">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Student Acknowledgement Letter:</td>
              <?php 
                if($bio5_ack_letter == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio5_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a> <a href="<?php echo base_url();?>marketition/reset_bio5_ack_letter#bio5_ack_letter" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php if ($bio5_company !== '-') { ?>
            <td>Employee Identity Card:</td>
              <?php 
                if($bio5_id_card_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_bio5_id_card_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio5_id_card_employee#bio5_id_card_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Employee Acknowledgement Letter:</td>
              <?php 
                if($bio5_ack_letter_employee == ''){
               ?>
              <td>
                <?php echo form_open_multipart('marketition/do_upload_ack_letter_bio5_employee_marketition');?>
                  <div class="file-field input-field">
                    <div class="btn-small">
                      <span>Select</span>
                      <input type="file" name="userfile">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="doc/docx/pdf/jpg/jpeg/png">
                    </div>
                  </div>
                  <input style="float: right" type="submit" name="submit" value="upload" class="btn-small blue darken-4"> 
                <?php echo "</form>"?>
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">remove_red_eye</i></button></a>  <a href="<?php echo base_url();?>marketition/reset_bio5_ack_letter_employee#bio5_ack_letter_employee" class="btn-small red" value="Edit" onclick="return confirm('Are you sure to reupload?')"><i class="material-icons">edit</i></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php } ?>
        <?php } ?>
        </table>
<?php
    }
  }  
}
?>         

	</section>
  
  <section>
    <img src="<?php echo base_url();?>assets/img/footer-blue.png">
    <div class="footer-base-signup">
      <div class="container">
        <div class="col-md-12 align-center">
          <ul class="socials-nav">
          <li class="socials-nav-item"><a href="https://www.facebook.com/Ideacraftid-123336021550976/" target="_blank"><span class="fa fa-facebook"></span></a></li>
          <li class="socials-nav-item"><a href="https://api.whatsapp.com/send?phone=6285813853750" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
          <li class="socials-nav-item"><a href="https://instagram.com/ideacraft.id" target="_blank""><span class="fa fa-instagram"></span></a></li>
          <li class="socials-nav-item"><a href="mailto:yohanna.001@student.pmbs.ac.id" target="_blank"><span class="fa fa-envelope"></span></a></li>
          </ul>
        </div><br>
        <center style="color: white"><p>Copyright © 2018 Marketition. All Rights Reserved.</p></center>

      </div>
    </div>
  </section>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
