<?php
define('HOST', 'localhost');
define('DB', 'imdb_full');
define('USER', 'admin');
define('PASS', 'workmakesmehappee');
echo "yo yo yo";
$con=mysqli_connect(HOST,USER,PASS, DB) or die("Failed to connect to MySQL: " . mysql_error());
mysqli_select_db('imdb_full');
$query="select * from movies";
$records=mysqli_query($query);
while($row=mysql_fetch_assoc($records))
{
    echo "yo row yolo";
    echo $row['title'];
}
        
?>