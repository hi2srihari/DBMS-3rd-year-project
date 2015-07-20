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
$random=mt_rand(1,20);
echo "<h1>$random</h1>";
$sql = "SELECT * FROM movies where mid=$random";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["mid"]. " - Name: " . $row["title"]. " " . " - Director: " . $row["director"]. " -Poster -" . '<img align="left" height=100 width=100 src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'"/>' ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>