<?php
include '../config.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit();
}

$result = $conn->query("SELECT * FROM employee");
?>

<h1>Admin Dashboard</h1>
<p>Welcome <?= $_SESSION['name'] ?></p>

<a href="../index.php">Back</a> | <a href="../logout.php">Logout</a> //Now when you click "Back" on the admin dashboard, it will take you to the login page

<h2>User Management</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['role'] ?></td>
    <td><?= $row['is_enable'] ? 'Enabled' : 'Disabled' ?></td>
    <td>
        <a href="../actions/toggle_user.php?id=<?= $row['id'] ?>">
            <?= $row['is_enable'] ? 'Disable' : 'Enable' ?>
        </a>
    </td>
</tr>
<?php } ?>

</table>


