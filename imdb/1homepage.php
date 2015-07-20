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
$random1=mt_rand(1,35);
$random2=mt_rand(1,21);
$sql = "SELECT * FROM artist where aid=$random1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {?>
     

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
							<li><a href="1homepage.php">Homepage</a></li>
							<li><a href="1movies.php">Movie info</a></li>
							<li><a href="1artists.php">Artist info</a></li>
							<li><a href="1recentreleases.php">Recent Releases</a></li>
							<li><a href="1highestrated.php">Highest Rated Movies</a></li>
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
									<h2>Artist Of the day<br><br><?php echo $row["name"];?></h2>
									<span class="byline"><p>famous for:<br><?php echo $row["famous_for"];?></p>
									
								<?php 
								echo  '<img align="left" height=200 width=200 src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'"/>';
								echo "Gender: " . $row["gender"]."<br>"."Marital Status:  " . $row["marital_status"]."<br>"."Born at: ". $row["hometown"] ."<br>";
    }
} else {
    echo "0 results";
}
?></p></span>
									
								</header>							
							</section>
						</div>
					<!-- Sidebar -->
				
					<!-- Content -->
						<div id="content" class="6u skel-cell-important">
							<section>
								<header>
									
									<span class="byline">A project by</span>
								</header>
								<p><a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a></p>
								<p>Credits [in alphabetical order]</p>
                                <p>Diwakar</p>
                                <p>Guhan</p>
                                <p>Ravindranathan</p>
                                <p>Sri Hari Krishna</p>
                                
							</section>
						</div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="3u">
							<section>
								<?php
							 $sql = "SELECT * FROM movies where mid=$random2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){  ?>
								<header>
									<h2>Movie of the day <br><br>
										<?php 
										echo $row["title"]; ?></h2>
				
				<span class="byline">
									
								<?php 
								echo "date of release"."$row[date_of_release]"."<br>";
								echo  '<img align="left" height=200 width=200 src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'"/>';
								echo "Directed by: " . $row["director"]."<br>"."Rating:  " . $row["rating"]."<br>"."Total box office revenue(in millions): "."<br>". $row["box_office_collection"] ."<br>";
    }
} else {
    echo "0 results".$random2;
}
?></p></span>
								</header>
								
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