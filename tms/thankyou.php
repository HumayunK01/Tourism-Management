<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>TMS | Confirmation </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<script
		type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		.banner-1 {
			background: url(./images/banner.jpg)no-repeat;
			background-position: center;
			background-attachment: fixed;
			background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
			-ms-background-size: cover;
			-moz-background-size: cover;
			min-height: 350px;
		}

		.banner-1 h1 {
			font-size: 50px;
			margin-bottom: 40px;
			padding: 2.5em 0 0;
			text-align: center;
			color: #ffffff;
		}
	</style>
</head>

<body>
	<?php include('includes/header.php'); ?>
	<div class="banner-1 ">
		<div class="container">
			<h1 class="wow" style="font-weight: 600;">JOURNEY TO EXPLORE INDIA</h1>
		</div>
	</div>
	<!--- /banner-1 ---->
	<!--- contact ---->
	<div class="contact">
		<div class="container">
			<h3> Confirmation</h3>
			<div class="col-md-10 contact-left">
				<div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms"
					style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">


					<h4>
						<?php echo htmlentities($_SESSION['msg']); ?>
					</h4>

				</div>

				<div class="clearfix"></div>
			</div>
		</div>
		<!--- /contact ---->
		<?php include('includes/footer.php'); ?>
		<!-- sign -->
		<?php include('includes/signup.php'); ?>
		<!-- signin -->
		<?php include('includes/signin.php'); ?>
		<!-- //signin -->
		<!-- write us -->
		<?php include('includes/write-us.php'); ?>
		<!-- //write us -->
</body>

</html>