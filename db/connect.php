<?php
$hostname = "127.0.0.1";
$dbname= "reservation";
$username = "root";
$password = "";
$port=3306;
$conn= new mysqli($hostname,$username,$password,$dbname,$port);
if($conn->connect_error) {
    die("Problemi di connessione " . $conn->connect_error);
}
// echo "Connected successfully";
?>