<?php
include 'db.php';

if(isset($_POST['submit'])){
    
     $name = $_POST['name'];    
     $email = $_POST['email'];    
     $position = $_POST['position'];    
     $salary = $_POST['salary'];    
}
//prepared statement
$stmt = $conn->prepare("INSERT INTO employees (name,email,position,salary) VALUES (?,?,?,?)");
$stmt->bind_param("sssd", $name, $email, $position, $salary);

if($stmt->execute()){
    header("Location: index.php?success=1");
} else {
    echo "Error: " . $conn->error;
}

?>