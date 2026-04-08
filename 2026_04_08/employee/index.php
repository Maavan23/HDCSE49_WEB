<?php include 'fetch.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Employee Registration</h2>

<?php
if (isset($_GET['success'])) {
    echo "<div class='alert alert-success'>Employee Added Successfully!</div>";
}
?>

<form method="POST" action="insert.php">

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Position</label>
        <input type="text" name="position" class="form-control">
    </div>

    <div class="mb-3">
        <label>Salary</label>
        <input type="number" name="salary" class="form-control">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<hr>

<h3>Employee List</h3>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Created At</th>
    </tr>

<?php
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['position']}</td>
        <td>{$row['salary']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}
?>

</table>

</body>
</html>

