<?php
$host = "localhost";
$user = "admin";
$pass = "workmakesmehappee";
$db = "imdb_full";
$sql = mysqli_connect($host, $user, $pass, $db) or die(mysql_error());
if($sql) {
	echo "success";
}
?>