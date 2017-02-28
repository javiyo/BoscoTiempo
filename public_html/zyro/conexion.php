
<?php
$servername = "mysql.hostinger.es";
$database = "u744484237_base1";
$username = "u744484237_cris";
$password = "trabajocris";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);
?>