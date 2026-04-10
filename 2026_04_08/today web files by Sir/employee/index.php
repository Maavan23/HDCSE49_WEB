<?php 
include 'db.php';

// Fetch data
$result = $conn->query("SELECT * FROM employees");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Employee Management System</h2>

<!-- Success Messages -->
<?php
if (isset($_GET['success'])) {
    echo "<div class='alert alert-success'>Employee Added Successfully!</div>";
}
if (isset($_GET['updated'])) {
    echo "<div class='alert alert-success'>Employee Updated Successfully!</div>";
}
if (isset($_GET['deleted'])) {
    echo "<div class='alert alert-danger'>Employee Deleted!</div>";
}
?>

<!-- Add Employee Form -->
<div class="card p-4 mb-4">
    <h4>Add Employee</h4>

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

        <button type="submit" name="submit" class="btn btn-primary">
            Add Employee
        </button>

    </form>
</div>

<!-- Employee Table -->
<h4>Employee List</h4>

<table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>

<?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['position']; ?></td>
        <td><?php echo $row['salary']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td>
             <div class="btn-group">
                <!-- Edit Button -->
                <button 
                    class="btn btn-warning btn-sm editBtn"
                    data-id="<?php echo $row['id']; ?>"
                    data-name="<?php echo $row['name']; ?>"
                    data-email="<?php echo $row['email']; ?>"
                    data-position="<?php echo $row['position']; ?>"
                    data-salary="<?php echo $row['salary']; ?>"
                >
                    Edit
                </button>
            </div>
            <div class="btn-group">
                
                <!-- Delete Button -->
                <a href="delete.php?id=<?php echo $row['id']; ?>" 
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure?')">
                   Delete
                </a>

            </div>
           
        </td>
    </tr>
<?php } ?>

</table>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <form method="POST" action="update.php">

        <div class="modal-header">
          <h5 class="modal-title">Edit Employee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <input type="hidden" name="id" id="edit_id">

          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" id="edit_name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" id="edit_email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" id="edit_position" class="form-control">
          </div>

          <div class="mb-3">
            <label>Salary</label>
            <input type="number" name="salary" id="edit_salary" class="form-control">
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" name="update" class="btn btn-success">
              Update
          </button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- Bootstrap + Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Load data into modal
document.querySelectorAll('.editBtn').forEach(button => {
    button.addEventListener('click', function() {

        document.getElementById('edit_id').value = this.dataset.id;
        document.getElementById('edit_name').value = this.dataset.name;
        document.getElementById('edit_email').value = this.dataset.email;
        document.getElementById('edit_position').value = this.dataset.position;
        document.getElementById('edit_salary').value = this.dataset.salary;

        var modal = new bootstrap.Modal(document.getElementById('editModal'));
        modal.show();
    });
});
</script>

</body>
</html>


