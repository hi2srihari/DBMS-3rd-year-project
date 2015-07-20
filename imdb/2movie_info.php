<?php
$servername = "localhost";
$username = "admin";
$password = "workmakesmehappee";
$dbname = "imdb_full";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["mid"]. " - Name: " . $row["title"]. " " . " - Director: " . $row["director"]. " -Poster -" . '<img src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'"/>' ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>