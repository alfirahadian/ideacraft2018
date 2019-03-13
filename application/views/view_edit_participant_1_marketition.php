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
        <div class="container">
          <div class="col-sm-2 col-xs-12 navigation-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="col-sm-10 col-xs-12 navigation-container">
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="navigation-list pull-right light-text">
                <li class="navigation-item"><a href="" class="navigation-link">Home</a></li>
                <li class="navigation-item"><a href="./logout" class="navigation-link">Logout</a></li>
              </ul>
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
        $bio1_name = $key->bio1_name;
        $bio1_major = $key->bio1_major;
        $bio1_phone = $key->bio1_phone;
        $bio1_company = $key->bio1_company;
        $bio1_address = $key->bio1_address;
        $bio1_id_card = $key->bio1_id_card;
        $bio1_id_card_employee = $key->bio1_id_card_employee;
        $bio1_ack_letter = $key->bio1_ack_letter;
        $bio1_ack_letter_employee = $key->bio1_ack_letter_employee;
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
      <center><h5 style="color: #666">Update Data Participant 1</h5></center>
      <div class="container">
            <!-- PARTICIPANT 1 -->
            <div id="participant_1_2_3" class="row">
            <h5 style="color: #666">1st Participant</h5><br>
                <table class="col-lg-12">
                <col style="width:20%" span="5" />
                  <?php echo form_open("marketition/update_participant_1_marketition"); ?>
                  <tr>
                    <td>Name:</td>
                      <?php 
                      if($bio1_name == ''){
                     ?>
                     <td>
                        -
                      </td>
                      <?php 
                      }
                      else {
                      ?>
                      <td>                  
                       <div class="input-field col s12 l12">
                            <input style="color: #666;" type="text" id="bio1_name" name="bio1_name" value="<?php echo $bio1_name; ?>" />
                           <?php echo form_error('bio1_name', '<div class="error" style="color: red;">', '</div>'); ?>
                      </div>
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
                        -
                      </td>
                      <?php 
                      }
                      else {
                      ?>
                      <td>
                       <div class="input-field col s12 l12">
                            <input style="color: #666;" type="text" id="bio1_phone" name="bio1_phone" value="<?php echo $bio1_phone; ?>" />
                            <?php echo form_error('bio1_phone', '<div class="error" style="color: red;">', '</div>'); ?>
                      </div>
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
                        -
                      </td>
                      <?php 
                      }
                      else {
                      ?>
                      <td>
                       <div class="input-field col s12 l12">
                            <input style="color: #666;" type="text" id="bio1_major" name="bio1_major" value="<?php echo $bio1_major; ?>" />
                            <?php echo form_error('bio1_major', '<div class="error" style="color: red;">', '</div>'); ?>
                      </div>
                    </td>
                    <?php 
                        } 
                    ?>
                  </tr>
                  <tr>
                    <td>I am currently employed</td>
                    <td> 
                      <label>
                        <input type="checkbox" data-toggle="collapse" data-target="#collapseOne" name="bio1_tick" value="1"/>
                        <span></span>
                      </label>
                    </td>
                  </tr>
                    <tr id="collapseOne" class="panel-collapse collapse out">
                      <td><div>The company name (employees only):</div></td>
                        <td>
                         <div class="input-field col s12 l12">
                              <input style="color: #666;" type="text" id="bio1_company" name="bio1_company" value="<?php echo $bio1_company; ?>" />
                              <?php echo form_error('bio1_company', '<div class="error" style="color: red;">', '</div>'); ?>
                        </div>
                      </td>
                    </tr>
                </table>
            </div>
            <center style="float: center"><input type="submit" value="Update" class="btn-large blue darken-1" value="submit"></center>
                <?php echo form_close(); ?>
<?php
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
