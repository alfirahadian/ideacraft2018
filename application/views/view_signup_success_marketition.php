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
        </div>
      </div>
    </div>
  </header>
        <center><a href="<?php echo base_url();?>marketition"><img src="<?php echo base_url();?>assets/img/LogoMarketition.png" alt="" width="600" class="img-responsive" /></a></center><br><br>
    </div>
  </section>
  <img src="<?php echo base_url();?>assets/img/masthead-bottom.png">

  <section class="window-height" style="color: #666">
      <div class="col l8 s12 m8"><br>
          <div class="container">
                <left><h5 style="color: #666">Registration successed, <?php echo $data['team_name']; ?></h5></left>
                <p style="font-family: Avenir Next; color: black;">
                Thank you for completing the registration process and let us officially welcome you to <b>Marketition 2018</b>! <br>We sincerely hope you will enjoy and get challenging yet remarkable experiences during the competition. <br><br>
                Here is the next step you need to do.
                <br>
                Secure your seat by paying the registration fee as detailed below. <br><br>
                <b>Total amount is <?php if($data['country'] !== 'Indonesia')
                  { 
                    echo "USD ";
                  }
                  else {
                    echo "Rp ";
                  } ?>
                  <?php echo $data['billing']; ?></b> <br><br>
                For participants from Indonesia, payments is to be transferred to the following beneficiary’s bank account:<br><br>
                <b>Yayasan Prasetiya Mulya
                <br>BCA KCU SCBD, Jakarta
                <br>
                006-309-3669
                <br><br>
                </b>
                And for international participants, payments is to be transferred to the following beneficiary’s Paypal account:<br><b><br>
                1. Login to your PayPal account<br>
                2. Using payment url: <a href="https://www.paypal.me/alfirahadian">https://www.paypal.me/alfirahadian</a><br>
                3. Enter the billing amount  <?php if($data['country'] !== 'Indonesia')
                  { 
                    echo "USD ";
                  }
                  else {
                    echo "Rp ";
                  } ?>
                  <?php echo $data['billing']; ?><br>
                4. Click “Next”<br>
                5. Add a note: Your team name<br>
                6. Uncheck list the “Paying for goods or a service? Select the checkbox
                and your eligible purchases may be covered by Paypal Buyer
                Protection”<br>
                7. Click “Send payment now”<br></b>
                <br>
                Please complete payment within 48 hours and upload your payment proof on your <font color="#344F6E"><b><a href="./login">Marketition Account</a></b></font> for account activation. Remember that you will not be able to submit your files before your payment is verified by our team. 
                </p>
                <br>
                <p style="font-family: Avenir Next; color: black; text-align: justify;">
                <b>Check your email for payment confirmation guideline and further information.</b> <br>If you do not receive the confirmation message within a few minutes of signing up, please check your Spam.<br><br>
                </p>
          </div>
      </div>
  
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
