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
  <style type="text/css">
            .timer {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
      }

      .button {
        margin: 5px;
      }

      .colon {
        position: relative;
        margin: calc(var(--width) + 1vmin);
      }

      .colon::before,
      .colon::after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translate(-50%, 50%);
        width: var(--width);
        height: var(--width);
        background: var(--color);
      }

      .colon::before {
        top: calc(var(--len) / 2);
      }

      .colon::after {
        bottom: calc(var(--len) / 2);
      }

      .digit {
        position: relative;
        width: var(--len);
        margin: calc(var(--len) * 1.5) calc(var(--len) / 2) calc(var(--len) * 1.7);
      }

      .stick {
        --half-width: calc(var(--width) / 2);
        --origin-left: calc(0vmin - var(--half-width));
        --origin-right: calc(var(--len) + var(--half-width));
        position: absolute;
        width: var(--len);
        height: var(--width);
        background: var(--color);
        border-radius: 11% / 15%;
        transition: transform 0.4s;
      }

      .stick::before,
      .stick::after {
        content: '';
        position: absolute;
        top: 0;
        border: var(--half-width) solid transparent;
      }

      .stick::before {
        right: 98%;
        border-right: var(--half-width) solid var(--color);
      }

      .stick::after {
        left: 98%;
        border-left: var(--half-width) solid var(--color);
      }

      .stick.one {
        transform-origin: var(--origin-right) 50%;
        transform: rotate(90deg);
      }

      .stick.two {
        transform-origin: var(--origin-right) 50%;
        transform: rotate(270deg);
      }

      .stick.three {
        transform-origin: var(--origin-left) 50%;
        transform: rotate(90deg);
      }

      .stick.four {
        transform-origin: var(--origin-left) 50%;
        transform: rotate(270deg);
      }

      .stick.five {
        transform-origin: var(--origin-right) 50%;
        transform: rotate(270deg);
      }

      .stick.six {
        transform-origin: var(--origin-right) 50%;
        transform: rotate(0deg);
      }

      .stick.seven {
        transform-origin: var(--origin-right) 50%;
        transform: rotate(90deg);
      }
    </style>
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
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/timer.js"></script>
</head>

<body>
<div class="tengah">
	<section id="hero" class="hero-section bg1 bg-cover window-height">
			<div class="container">
          <br><br><br><br>
					<center><a href="<?php echo base_url();?>pitchfirst"><img src="<?php echo base_url();?>assets/img/logo-pitchfirst.png" alt="" width="150" class="img-responsive" /></a></center><br>
					<center><h4 style="font-family: Avenir Next; color: white;">Participant Login</h4></center>
					 <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
							 <div class="hero is-info is-fullheight is-bold">
                  <div id="app" class="hero-body"></div>
                </div>
                    <br><br><br><br><br><br>
            </div>
			</div>
	</section>
</div>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js?ver=1"></script>
</body>
</html>
