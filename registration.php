<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "main";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Amjilttai xD";




if(isset($_POST['email'])) {
    print_r($_POST);
}
?>