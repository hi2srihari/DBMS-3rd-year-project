<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "imdb_full";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM artist order by aid";
$result = mysqli_query($conn, $sql);
?>









<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

	<head>
		<title>Indigenous Movie DataBase</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#"><img src="IMDb_logo.png" width="200" height="100" alt="imdb_logo"></a></h1>
						<span>Yes!...We stole the logo</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="1homepage.html">Homepage</a></li>
							<li><a href="1movies.html">Movie info</a></li>
							<li><a href="1artists.html">Artist info</a></li>
							<li><a href="1recentreleases.html">Recent Releases</a></li>
							<li><a href="1highestrated.html">Highest Rated Movies</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
						<div id="sidebar" class="3u">
							<section>
								<header>
									<h2>Artist of the day</h2>
									<span class="byline">
										<?php
										if (mysqli_num_rows($result) > 0){
    										while($row = mysqli_fetch_assoc($result)) { 
    											echo "Name: " . $row["name"];
    										}
    										}
    									?>
									</span>
								</header>
								<p>Details about today's artist go here...</p>
							</section>
						</div>
					<!-- Sidebar -->
				
					<!-- Content -->
						<div id="content" class="6u skel-cell-important">
							<section>
								<header>
									<h2>Two Sidebars</h2>
									<span class="byline">Praesent lacus at urna congue rutrum</span>
								</header>
								<p><a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a></p>
								<p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem ultricies. Phasellus tempor vehicula justo.</p>
							</section>
						</div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="3u">
							<section>
								<header>
									<h2>Movie of the day</h2>
									<span class="byline">title of today's movie</span>
								</header>
								<p>Details about today's movie go here...</p>
							</section>
						</div>
					<!-- Sidebar -->
				
				</div>
			
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
							<ul class="style1">
								<li><img src="images/pics05.jpg" width="78" height="78" alt="">
									<p>comprehensive coverage of movie details, complete with reviews, cast, plot

synopsis, budget, box office collections etc.</p>
								</li>
								<li><img src="images/pics06.jpg" width="78" height="78" alt="">
							<p>biographies of actors or directors or musicians or script writers along with their respective
filmographies or discographies.</p>
									
								</li>
								<li><img src="images/pics07.jpg" width="78" height="78" alt="">
									<p>film rankings based on a rating algorithm. </p>
									
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
							<ul class="style1">
								<li class="first"><img src="images/pics08.jpg" width="78" height="78" alt="">
									<p>implementation of a fully functional GUI using html,css and PHP to simplify user interaction with the database.</p>
									
								</li>
								<li><img src="images/pics09.jpg" width="78" height="78" alt="">
									<p>a search feature that allows users to search movies by genre, name, contributing artists and year of release. </p>
									
								</li>
								<li><img src="images/pics10.jpg" width="78" height="78" alt="">
									<p>database implemented using MySQL </p>
									
								</li>
							</ul>
						</section>				
					</div>
					<div class="6u">
						<section>
							<header>
								<h2>About Us</h2>
							</header>
							<p>We are comitted to bringing you unmatched updates and expert reviews and analysis on all things movies.</p>
							
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">copyright 
				2014 no rights reserved,but do you really care?</div>
		</div>

	</body>
</html>