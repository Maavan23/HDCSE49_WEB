<?php
include('config.php'); ?>

<?php
if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $is_enable = $role === 'admin' ? 1 : 0;

    $stmt = $conn->prepare("INSERT INTO employee (name, email, password, role, is_enable) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $password, $role, $is_enable);

    if ($stmt->execute()) {
        $msg = $is_enable ? "Registered and enabled as admin." : "Registered! Wait for admin approval.";
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Register</h2>
<p><?= $msg ?? '' ?></p>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <select name="role">
        <option value="customer">Customer</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br>

    <button type="submit" name="register">Register</button>
</form>

<a href="index.php">Login</a>

</body>
</html>

