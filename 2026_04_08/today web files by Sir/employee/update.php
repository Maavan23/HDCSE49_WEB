<?php
include 'db.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $stmt = $conn->prepare("UPDATE employees SET name=?, email=?, position=?, salary=? WHERE id=?");
    $stmt->bind_param("sssdi", $name, $email, $position, $salary, $id);

    if ($stmt->execute()) {
        header("Location: index.php?updated=1");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


