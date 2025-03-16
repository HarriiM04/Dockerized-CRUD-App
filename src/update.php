<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM Student WHERE id=$id");
    $student = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "UPDATE Student SET name='$name', age='$age' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">
    Name: <input type="text" name="name" value="<?= $student['name'] ?>" required><br>
    Age: <input type="number" name="age" value="<?= $student['age'] ?>" required><br>
    <button type="submit">Update</button>
</form>
