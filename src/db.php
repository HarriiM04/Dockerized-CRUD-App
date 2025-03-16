<?php
$host = "db"; // Container name in docker-compose.yml
$user = "user";
$password = "password";
$dbname = "mydb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Yess Connected with me !!!!!!";
}
?>
