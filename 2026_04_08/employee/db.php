<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "employee_db2";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}


?>