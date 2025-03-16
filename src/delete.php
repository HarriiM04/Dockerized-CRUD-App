<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM Student WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<a href="read.php">Back to List</a>
