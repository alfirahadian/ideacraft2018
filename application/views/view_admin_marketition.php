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
    <style type="text/css">
      table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
      }
    </style>
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
  
	<section class="bg-cover window-height">
    <div class="container">
    <center><h4 style="color: #111"><font style="font-family: MONTSERRAT EXTRA BOLD"></font>Admin Dashboard</h4></center>
    </div>
    <div class="table-sliding">
    <table style="color: #111">
          <th align="center"><center>ID</center></th>
          <th align="center"><center>Team Name</center></th>
          <th align="center"><center>University</center></th>
          <th align="center"><center>Country</center></th>
          <th align="center"><center>Billing</center></th>
          <th align="center"><center>Payment Proof</center></th>
          <th align="center"><center>Deadline</center></th>
          <th align="center"><center>Status</center></th>
          <th align="center"><center>View Detail</center></th>
          <th align="center"><center>Bio 1 ID</center></th>
          <th align="center"><center>Bio 1 Ack</center></th>
          <th align="center"><center>Bio 1 ID Emp</center></th>
          <th align="center"><center>Bio 1 Ack Emp</center></th>
          <th align="center"><center>Bio 2 ID</center></th>
          <th align="center"><center>Bio 2 Ack</center></th>
          <th align="center"><center>Bio 2 ID Emp</center></th>
          <th align="center"><center>Bio 2 Ack Emp</center></th>
          <th align="center"><center>Bio 3 ID</center></th>
          <th align="center"><center>Bio 3 Ack</center></th>
          <th align="center"><center>Bio 3 ID Emp</center></th>
          <th align="center"><center>Bio 3 Ack Emp</center></th>
          <th align="center"><center>Bio 4 ID</center></th>
          <th align="center"><center>Bio 4 Ack</center></th>
          <th align="center"><center>Bio 4 ID Emp</center></th>
          <th align="center"><center>Bio 4 Ack Emp</center></th>
          <th align="center"><center>Bio 5 ID</center></th>
          <th align="center"><center>Bio 5 Ack</center></th>
          <th align="center"><center>Bio 5 ID Emp</center></th>
          <th align="center"><center>Bio 5 Ack Emp</center></th>
          <th align="center"><center>Delete</center></th>
  <?php 
    //error_reporting(0);
    if (is_array($row)){
      foreach ($row as $key ) {
        $id = $key->id;
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
            <tr>
            <td><center><?php echo $id; ?></center></td>
            <td><center><?php echo $team_name; ?></center></td>
            <td><center><?php echo $university; ?></center></td>
            <td><center><?php echo $country; ?></center></td>
            <td><?php echo $billing; ?></td>
            <td><center><?php if (!empty($payment_proof)) { ?>
                          <a href="<?php echo base_url();?>uploads/marketition/<?php echo $payment_proof ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php echo $deadline_date ?></center>
            <td><center>
              <?php if (($status == '0')) { ?>
              <a href="<?php echo base_url(); ?>marketition/update_status/<?php echo $id; ?>" onclick="return confirm('Are you sure?')"><button class="btn-small green">ACTIVATE</button></a> 
              <?php 
              } else {
              ?>
                <a href="<?php echo base_url(); ?>marketition/update_status_off/<?php echo $id; ?>" onclick="return confirm('Are you sure?')"><button class="btn-small red">DEACTIVATE!</button></a> 
              <?php } ?></center>
            </td>
            <td><center>
              <a href="<?php echo base_url(); ?>marketition/user/<?php echo $id; ?>" class="btn-small blue" target="_blank">VIEW</button></a> 
            </td>
            <td><center><?php if (!empty($bio1_id_card)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio1_id_card ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio1_ack_letter)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio1_ack_letter ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if($bio1_company !== '-') { ?>
                          <?php if (!empty($bio1_id_card_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio1_id_card_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
                        <?php } else { ?>
                          <i class="small material-icons">close</i>
                        <?php } ?>
            </td>
            <td><center><?php if (!empty($bio1_ack_letter_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio1_ack_letter_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio2_id_card)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio2_id_card ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio2_ack_letter)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio2_ack_letter ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio2_id_card_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio2_id_card_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio2_ack_letter_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio2_ack_letter_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio3_id_card)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio3_id_card ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio3_ack_letter)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio3_ack_letter ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio3_id_card_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio3_id_card_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio3_ack_letter_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio3_ack_letter_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio4_id_card)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio4_id_card ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio4_ack_letter)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio4_ack_letter ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio5_id_card_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio5_id_card_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio5_ack_letter_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio5_ack_letter_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio5_id_card)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio5_id_card ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio5_ack_letter)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio5_ack_letter ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio5_id_card_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio5_id_card_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center><?php if (!empty($bio5_ack_letter_employee)) { ?>
                          <a href="<?php echo base_url();?>uploads/<?php echo $bio5_ack_letter_employee ?>" target="_blank"><i class="small material-icons">cloud_done</i></a>  
                          <?php } else { ?>
                          <i class="small material-icons">close</i>
                          <?php
                          }?></center>
            </td>
            <td><center>
                <a href="<?php echo base_url(); ?>marketition/delete_by_id/<?php echo $id; ?>" onclick="return confirm('Are you sure delete?')"><button class="btn-small black">Delete!</button></a> 
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
          <p class="text-alt" style="color: #fff"><small>All Rights Reserved © 2018</small></p>
        </div>
      </div>
    </div>
  </section>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
