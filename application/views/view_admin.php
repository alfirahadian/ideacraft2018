<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Admin Page</title>

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
         <div class="col-sm-10 col-xs-12 navigation-container">
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="navigation-list pull-right light-text">
              <li class="navigation-item"><a href="" class="navigation-link">Home</a></li>
              <li class="navigation-item"><a href="./logout" class="navigation-link">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  
	<section class="bg2 bg-cover window-height">
    <div class="container">
    <h4><font style="font-family: MONTSERRAT EXTRA BOLD"></font>Admin Dashboard</h4>
    </div>
    <div class="table-sliding">
    <table>
          <th align="center"><center>Team Name</center></th>
          <th align="center"><center>University</center></th>
          <th align="center"><center>Billing</center></th>
          <th align="center"><center>Payment Proof</center></th>
          <th align="center"><center>ID Card 1</center></th>
          <th align="center"><center>ID Card 2</center></th>
          <th align="center"><center>Student Ack Letter</center></th>
          <th align="center"><center>Executive Summary</center></th>
          <th align="center"><center>IG Profile</center></th>
          <th align="center"><center>IG Video Link</center></th>
          <th align="center"><center>Deadline</center></th>
          <th align="center"><center>Status</center></th>
          <th align="center"><center>Reset Billing</center></th>
          <th align="center"><center>View Detail</center></th>
          <th align="center"><center>Delete</center></th>
  <?php 
    //error_reporting(0);
    if (is_array($row)){
      foreach ($row as $key ) {
        $id = $key->id;
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
            <tr>
            <td><center><?php echo $team_name; ?></center></td>
            <td><center><?php echo $university; ?></center></td>
            <td><?php echo $billing; ?></td>
            <td><center><?php if (!empty($payment_proof)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $payment_proof ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio1_id_card)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio1_id_card ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio2_id_card)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio2_id_card ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } 
                          elseif ((empty($bio2_name))){
                          ?>
                          <b>-</b>
                          <?php
                          }
                          else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($student_letter)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $student_letter ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($executive_summary)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $executive_summary ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($username_ig)) { ?>
                          <a href="<?php echo $username_ig ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($video_ig)) { ?>
                          <a href="<?php echo $video_ig ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php echo $deadline_date ?></center>
            </td>
             <td><center>
              <?php if (($status == '0')) { ?>
              <a href="<?php echo base_url(); ?>pitchfirst/update_status/<?php echo $id; ?>" onclick="return confirm('Are you sure?')"><button class="btn-small green">ACTIVATE</button></a> 
              <?php 
              } else {
              ?>
                <a href="<?php echo base_url(); ?>pitchfirst/update_status_off/<?php echo $id; ?>" onclick="return confirm('Are you sure?')"><button class="btn-small red">DEACTIVATE!</button></a> 
              <?php } ?></center>
            </td>
            <td><center>
              <?php if (($billing == '0')) { ?>
              -
              <?php 
              } else {
              ?>
                <a href="<?php echo base_url(); ?>pitchfirst/reset_billing/<?php echo $id; ?>" onclick="return confirm('Are you sure?')"><button class="btn-small purple">RESET!</button></a> 
              <?php } ?></center>
            </td>
            <td><center>
              <a href="<?php echo base_url(); ?>pitchfirst/user/<?php echo $ref_code_gen; ?>" class="btn-small blue" target="_blank">VIEW</button></a> 
            </td>
            <td><center>
                <a href="<?php echo base_url(); ?>pitchfirst/delete_by_id/<?php echo $id; ?>" onclick="return confirm('Are you sure delete?')"><button class="btn-small black">Delete!</button></a> 
              </center>
            </td>
  <?php
      }
  }
  ?> 
  </tr>
    </table>
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
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
