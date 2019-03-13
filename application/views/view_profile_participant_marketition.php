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
          <div class="col-sm-10 col-xs-12 navigation-container">
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
      <center><h4 style="color: #666"><?php echo $team_name;?> Profile</h4></center>
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
              <td>Submission Deadline of Executives Summary and Video:</td>
              <td><?php echo $deadline_date; ?></td>
            </tr>
          </table> 
      </div><br>

      <!-- BILLING PROOF -->
      <h5 style="color: #666">Billing & Payment Proof</h5>
      <div id="payment_proof" class="row">
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
                 <a href="<?php echo base_url();?>uploads/marketition/<?php echo $payment_proof;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div><br>
      
      <!-- EXECUTIVE SUMMARY -->
     <h5 style="color: #666">Student Acknowledgment Letter (kalo atas nama Univ)</h5>
      <div id="ack_letter_university" class="row">
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Student Ack Letter:</td>
              <?php 
                if($ack_letter_university == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $ack_letter_university;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          </table> 
      </div><br>
      <center><h5 style="color: #666">Participant Details</h5></center>
      <!-- PARTICIPANT 1 -->
      <div id="participant_1_2_3" class="row">
      <h5 style="color: #666">1st Participant</h5>
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
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
                 <?php echo $bio1_name; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Phone Number:</td>
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
                 <?php echo $bio1_phone; ?>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <tr>
              <td>Bachelor Major:</td>
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
                <td><div>Company name (employees only):</div></td>
                <?php 
                  if($bio1_company == ''){
                 ?>
                 <td>
                    -
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
            <tr>
              <td>Address:</td>
              <?php 
                if($bio1_address == ''){
               ?>
               <td>
                  -
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio1_address; ?>
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
          <table class="col-lg-12">
          <col style="width:20%" span="5" />
            <tr>
              <td>Name:</td>
                <?php 
                if($bio2_name == ''){
               ?>
               <td>
                  -
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
              <td>Phone Number:</td>
                <?php 
                if($bio2_phone == ''){
               ?>
               <td>
                 -
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
              <td>Bachelor Major:</td>
             <?php 
                if($bio2_major == ''){
               ?>
               <td>
                  -
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
              <td>Company name (employees only):</td>
              <?php 
                if($bio2_company == ''){
               ?>
               <td>
                  -
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
            <tr>
              <td>Address:</td>
              <?php 
                if($bio2_address == ''){
               ?>
               <td>
                  -
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio2_address; ?>
              </td>
              <?php 
                  } 
              ?>
              </td>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 2 -->
       <!-- PARTICIPANT 3 -->
      <br><br>
      <div class="row">
       <h5 style="color: #666">3rd Participant</h5>
          <table class="col-lg-12">
          <col style="width:30%" span="5" />
            <tr>
              <td>Name:</td>
                <?php 
                if($bio3_name == ''){
               ?>
               <td>
                  -
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
              <td>Phone Number:</td>
                <?php 
                if($bio3_phone == ''){
               ?>
               <td>
                  -
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
              <td>Bachelor Major:</td>
             <?php 
                if($bio3_major == ''){
               ?>
               <td>
                  -
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
              <td>Company name (employees only):</td>
              <?php 
                if($bio3_company == ''){
               ?>
               <td>
                  -
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
            <tr>
              <td>Address:</td>
              <?php 
                if($bio3_address == ''){
               ?>
               <td>
                  -
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio3_address; ?>
              </td>
              <?php 
                  } 
              ?>
              </td>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 3-->

      <br><br>
      
      <!-- PARTICIPANT 4 -->
      <br><br>
      <div id="bio4" class="row" <?php if($add_4th_participant !== '1') { ?>  style="display: none" <?php } ?>>
       <h5 style="color: #666">4th Participant</h5>
          <table class="col-lg-12">
          <col style="width:30%" span="5" />
            <tr>
              <td>Name:</td>
                <?php 
                if($bio4_name == ''){
               ?>
               <td>
                  -
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
              <td>Phone Number:</td>
                <?php 
                if($bio4_phone == ''){
               ?>
               <td>
                  -
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
              <td>Bachelor Major:</td>
             <?php 
                if($bio4_major == ''){
               ?>
               <td>
                  -
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
              <td>Company name (employees only):</td>
              <?php 
                if($bio4_company == ''){
               ?>
               <td>
                  -
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
            <tr>
              <td>Address:</td>
              <?php 
                if($bio4_address == ''){
               ?>
               <td>
                 -
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio4_address; ?>
              </td>
              <?php 
                  } 
              ?>
              </td>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 4-->

      <br><br>

      <!-- PARTICIPANT 5 -->
      <br><br>
      <div id="bio5" class="row" <?php if($add_5th_participant !== '1') { ?>  style="display: none" <?php } ?>>
       <h5 style="color: #666">5th Participant</h5>
          <table class="col-lg-12">
          <col style="width:30%" span="5" />
            <tr>
              <td>Name:</td>
                <?php 
                if($bio5_name == ''){
               ?>
               <td>
                  -
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
              <td>Phone Number:</td>
                <?php 
                if($bio5_phone == ''){
               ?>
               <td>
                 -
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
              <td>Bachelor Major:</td>
             <?php 
                if($bio5_major == ''){
               ?>
               <td>
                  -
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
              <td>Company name (employees only):</td>
              <?php 
                if($bio5_company == ''){
               ?>
               <td>
                  -
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
            <tr>
              <td>Address:</td>
              <?php 
                if($bio5_address == ''){
               ?>
               <td>
                  -
                </td>
                <?php 
                }
                else {
                ?>
                <td>
                 <?php echo $bio5_address; ?>
              </td>
              <?php 
                  } 
              ?>
              </td>
            </tr>
          </table> 
      </div>
      <!-- END PARTICIPANT 5-->

      <!-- ID Card and Acknowledgement Letter -->
      <br><br>
      <div class="row">
      <center><h5 style="color: #666">ID Card and Acknowledgement Letter</h5></center><br>
      <h5 style="color: #666">1st Participant</h5><br>
      <table>
       <tr>
              <td id="bio1_id_card">Student ID Card:</td>
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
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
           <?php if ($bio1_company !== '-') { ?>
                <tr>
                  <td>Employee ID Card:</td>
                  <?php 
                    if($bio1_id_card_employee == ''){
                   ?>
                  <td>
                   Belum upload
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
                   Belum upload
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio1_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
        <h5 style="color: #666">2nd Participant</h5>
        <div class="row">
        <table>
            <tr>
              <td id="bio2_id_card">Student ID Card:</td>
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
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
               Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
             <?php if ($bio2_company !== '-') { ?>
            <tr>
              <td>Employee ID Card:</td>
              <?php 
                if($bio2_id_card_employee == ''){
               ?>
              <td>
               Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio2_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php } ?>
        </table>
        </div><br>
        <h5 style="color: #666">3rd Participant</h5>
        <div class="row">
        <table>
             <tr>
              <td id="bio3_id_card">Student ID Card:</td>
              <?php 
                if($bio3_id_card == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
               Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
            <?php if ($bio3_company !== '-') { ?>
            <tr>
              <td>Employee ID Card:</td>
              <?php 
                if($bio3_id_card_employee == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio3_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php } ?>
            </table>
            </div><br>

           <?php if($add_5th_participant !== '1' AND $add_4th_participant == '1' OR $add_5th_participant == '1') { ?>
                <h5 style="color: #666">4th Participant</h5>
                <div class="row">
                <table>
                  <tr>
                  <td id="bio4_id_card">Student ID Card:</td>
                  <?php 
                    if($bio4_id_card == ''){
                   ?>
                  <td>
                    Belum upload
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
                    Belum upload
                  </td>
                  <?php 
                  } else {
                  ?>
                   <td>
                    <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
                  </td>
                  <?php 
                      } 
                  ?>
                </tr>
                 <tr>
               <?php if ($bio4_company !== '-') { ?>
              <td>Employee ID Card:</td>
              <?php 
                if($bio4_id_card_employee == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
               Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio4_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
            <h5 style="color: #666">5th Participant</h5>
            <div class="row">
            <table>
            <tr>
              <td id="bio5_id_card">Student ID Card:</td>
              <?php 
                if($bio5_id_card == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_id_card;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
               Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_ack_letter;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
              </td>
              <?php 
                  } 
              ?>
            </tr>
          <?php if ($bio5_company !== '-') { ?>
            <td>Employee ID Card:</td>
              <?php 
                if($bio5_id_card_employee == ''){
               ?>
              <td>
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_id_card_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
                Belum upload
              </td>
              <?php 
              } else {
              ?>
               <td>
                <a href="<?php echo base_url();?>uploads/marketition/<?php echo $bio5_ack_letter_employee;?>" target="_blank"><button class="btn-small blue"><i class="material-icons">file_download</i></button></a>
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
