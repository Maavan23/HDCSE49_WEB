<?php
include '../config.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit();
}

$id = $_GET['id'];

$stmt = $conn->prepare("UPDATE employee SET is_enable = NOT is_enable WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../dashboards/admin.php");

?>
