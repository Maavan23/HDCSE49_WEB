<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "employee_db";

$conn = new mysqli($host,$user,$password,$database);

if($conn -> connect_error){
    die("CONNECTION FAILED" . $conn->connect_error);
}

?>