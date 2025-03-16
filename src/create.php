<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    $sql = "INSERT INTO Student (name, age, password) VALUES ('$name', '$age', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Add Student</button>
</form>
