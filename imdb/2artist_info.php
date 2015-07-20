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
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " - DOB: " . $row["dob"]. " " . " - Gender: " . $row["gender"]. "-Marital Status  " . $row["marital_status"]. " -Most famous for:" . $row["famous_for"] . "-Hometown: ". $row["hometown"] ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>