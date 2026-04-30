<?php
$con = new mysqli("localhost","root","","employee_db");
$conn = $con;

if ($con->connect_error) {
    die("Connection failed". $con->connect_error);
}

session_start();
?>