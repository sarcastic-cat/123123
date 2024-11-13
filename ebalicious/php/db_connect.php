<?php
$servername = filter_var("localhost", FILTER_SANITIZE_STRING); 
$username = filter_var("root", FILTER_SANITIZE_STRING);
$password = filter_var("", FILTER_SANITIZE_STRING); 
$dbname = filter_var("capstone_project", FILTER_SANITIZE_STRING);

$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    error_log("Database connection failed: " . $conn->connect_error);
    die("Connection failed: Please try again later.");
}
?>