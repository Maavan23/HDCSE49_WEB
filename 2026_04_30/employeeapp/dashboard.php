<?php
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

switch ($_SESSION['role']) {
    case 'admin':
        header("Location: dashboards/admin.php");
        break;
    case 'customer':
        header("Location: dashboards/customer.php");
        break;
    default:
        header("Location: dashboards/user.php");
}
