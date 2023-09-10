<?php
// Free Bootstrap Themes : www.Zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">
	
    <title>PhotoGrap | Free Bootstrap Themes</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="fonts/stylesheet.css">
	<link href="css/mb-comingsoon-iceberg.css" rel="stylesheet" />
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/modernizr.custom.97074.js"></script>

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sub-page">
	
	<header class="sub-header">
	
		<!-- /////////////////////////////////////////Navigation -->
		<nav id="menu" class="navbar container">
				<div class="">
					<div class="navbar-header">
						<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
						<a href="index.html" class="navbar-brand visible-xs">PhotoGrap</a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li class="dropdown"><a href="archive.html" class="dropdown-toggle" data-toggle="dropdown">Categories <i class="fa fa-chevron-down"></i></a>
								<div class="dropdown-menu" style="margin-left: -203.625px;">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li><a href="#">Text 301</a></li>
											<li><a href="#">Text 302</a></li>
											<li><a href="#">Text 303</a></li>
											<li><a href="#">Text 304</a></li>
											<li><a href="#">Text 305</a></li>
										</ul>
										<ul class="list-unstyled">
											<li><a href="#">Text 306</a></li>
											<li><a href="#">Text 307</a></li>
											<li><a href="#">Text 308</a></li>
											<li><a href="#">Text 309</a></li>
											<li><a href="#">Text 310</a></li>
										</ul>
										<ul class="list-unstyled">
											<li><a href="#">Text 311</a></li>
											<li><a href="#">Text 312</a></li>
											<li><a href="#">Text 313</a></li>
											<li><a href="#">Text 314</a></li>
											<li><a href="#">Text 315</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="archive.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		<!-- Navigation -->
		
		<div class="crumbs">
			<div class="container">
			<h2><a href="contact.html">Contact</a></h2>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<div class="row">
						
						<div class="col-md-6" style="margin-bottom: 20px;">
							<h1>CONTACT US</h1>
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<form name="form1" id="ff" method="post" action="contact.php">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="Please enter your name.">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject *" name="subject" id="subject" required data-validation-required-message="Please enter subject.">
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Your Message *" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
								</div>
								<button type="submit" class="btn btn-skin" id="submitcontact" name="submitcontact">Send Message</button>
							</form>
						</div>
						<div class="col-md-6">
							<h1>WE ARE HERE</h1>
							<p><span class="glyphicon glyphicon-home"></span> California, United States 3000009</p>
							<p><span class="glyphicon glyphicon-earphone"></span> +6221 888 888 90 , +6221 888 88891</p>
							<p><span class="glyphicon glyphicon-envelope"></span> info@yourdomain.com</p>
							<!--Start Map-->
							<div id="map" style="height: 230px;"></div>
							<!--End Map-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<div class="copyright">
						<p>Copyright 20xx - Designed by <a href="https://www.Zerotheme.com" target="_blank">Zerotheme</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- Core JavaScript Files -->
   	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Google Map -->
	<script>
	  var marker;
	  var image = 'images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
</body>

</html>


