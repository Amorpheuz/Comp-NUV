
<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Computers@NUV</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">

	<!-- CSS Files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-kit.css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="style.css">
	<!--Scripts-->
	<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
	<style>
		/*Paralex */

		.parallax1 {
			/* The image used */
			background-image: url('background5.png');
			/* Full height */
			height: 80%;
			font-family: 'Cantarell', sans-serif;
			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			padding: 0px;
		}

		.cntr {
			display: flex;
			/*Flexbox*/
			justify-content: center;
			/* align horizontal */
			align-items: center;
			/* align vertical */
		}
	</style>
	<script>
		$({
			countNum: $('#counter1').text()
		}).animate({
			countNum: 501
		}, {
			duration: 2049,
			easing: 'linear',
			step: function() {
				$('#counter1').text(Math.floor(this.countNum));
			},


		});
		$({
			countNum: $('#counter2').text()
		}).animate({
			countNum: 51
		}, {
			duration: 2049,
			easing: 'linear',
			step: function() {
				$('#counter2').text(Math.floor(this.countNum));
			},


		});
		$({
			countNum: $('#counter3').text()
		}).animate({
			countNum: 16
		}, {
			duration: 2049,
			easing: 'linear',
			step: function() {
				$('#counter3').text(Math.floor(this.countNum));
			},


		});
	</script>
</head>

<body>

	<!-- Navbar will come here -->
	<nav class="navbar navbar-warning navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation" style="color:black">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    		</button>
				<a class="navbar-brand" href="index.html"><b>Computers@NUV</b></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="team.html">Team</a></li>

				</ul>
			</div>

		</div>
	</nav>
	<!-- end navbar -->
	<div class="wrapper parallax1">

		<div class="header" style="padding:65px 20% 10% 20%;" align="center">

			<img src="logo.png" height="30%" width="70%" style="padding-top:5%;">
			<br><br>

			<button class="btn btn-info" style="font-family: 'Share Tech Mono', monospace;font-size:150%;">Join Today!</button><br>

		</div>
		<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-block">
									<h3>About US </h3>
									<p>Computers@NUV is a group of computer enthusiasts where they can get together and work on various projects, host computer related events or just build their knowledge on the IT field out there in the market. We host regular workshops, guest lectures
										and competitive events for the IT loving crowd free of cost. We are based out of students studying at Navrachana University pursuing their careers in various IT related courses.</p>
								</div>
							</div>
						</div>
					</div>
					<br><br>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-block">
									<h3>Our Team!</h3>
									<p>You ask what makes Computers@NUV so fun to be a part of? Its the team! Click on that flashy button down below to find out more about the teams that form Computers@NUV, who knows you might come across one that will make your college life even
										more memorable!</p><br>
									<a href="team.html" class="btn btn-info btn-block" role="button" style="font-family: 'Share Tech Mono', monospace;font-size:150%;">The Core of C@N</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-5">
					<div class="card">
						<div class="card-block">
							<h3>Events</h3>
							<p>
								<h1 align="center"><br><br><small><?php include_once('event/functions.php'); ?></small></h1><br><br><br><br><br><br><br></p>
						</div>
					</div>
				</div>
				<div class="col-md-1">
				</div>

			</div>
			<br><br>
			<div class="row">
				<div class="col-md-2">

				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-block" style="margin:20px 0px 10px 0px;">
							<center>
								<div id="counter2">0</div><br><br>
								<div style="font-size: 300%;">+Lecturers</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card">
						<div class="card-block" style="margin:20px 0px 10px 0px;">
							<center>
								<div id="counter3">0</div><br><br>
								<div style="font-size: 300%;">+Events</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-block" style="margin:20px 0px 10px 0px;">
							<center>
								<div id="counter1">0</div><br><br>
								<div style="font-size: 300%;">+Attendees</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-2">

				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-1">

				</div>
				<div class="col-md-10">
					<script src="http://assets.juicer.io/embed.js" type="text/javascript"></script>
					<link href="http://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
					<ul class="juicer-feed" data-feed-id="computers-nuv" data-pages='1' data-per='15'>
						<h1 class="referral"><a href="http://www.juicer.io"><div class="card card-block">Powered by Juicer</div></a></h1></ul>
					<!--Fourth, if you are developing your site locally, and testing it by just opening the HTML page in your browser, it probably won't work. This is because of how Juicers embed code works. The two ways around this are to run your site on a local server (try something like this) or to change your embed code from: Be careful though, if your site is HTTPS (SSL) as you will run into issues when you deploy (you might want to change the http to https). -->
				</div>
				<div class="col-md-1">

				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-1">

				</div>
				<div class="col-md-4">
					<div class="card">
						<div id="map">
							<iframe frameborder="0" height="325px" width="100%" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJTXUH23fIXzkRMJ-7PwsvY64&key=AIzaSyBVJc0Hg-A7NKo_jYrddVxNWg8R-Jr3ekQ" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-block cntr" style="height: 325px;">
							<h3><p><span class="glyphicon glyphicon-pushpin"></span>&nbsp;Computers @NUV,<br>Navrachana University,<br>Vasna Bhayli Road,<br> Vadodara,<br> Gujarat 391410.</p></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-block">
							<center>
								<div class="row">
									<div class="col-md-12">
										<img src="twitter_color.png" width="20%">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h4>@ComputerAtNUV</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<img src="insta_color.png" width="23%">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h4>ComputersAtNUV</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<img src="facebook_color.png" width="23%">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h4>ComputersAtNUV</h4>
									</div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-1">

					</div>


				</div>
				<br>
				<br>

			</div>
			<br><br>
		</div>
		<!--footer-->
		<footer>
			<p class="p"> &copy; Copyright 2016 - Computers&#64;NUV, Navrachna University, Baroda
				<br> Computers&#64;NUV is an independent group of faculties and students of Navrachna University.</p>

			<a href="https://www.facebook.com/ComputersatNUV-1752470228342074/" target="_blank"><img class="img_height" src="fb_icon.png"></a>
			<a href="https://www.instagram.com/computersatnuv/" target="_blank"> <img class="img_height" src="ig_icon.png"></a>
			<a href="https://twitter.com/ComputersAtNUV" target="_blank"><img class="img_height" src="twitter_icon.png"></a>
			<a href="#"><img class="img_height" src="gplus_icon.png" target="_blank"></a>


		</footer>

	</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>
