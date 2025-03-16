<?php
include 'db.php';

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['age'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
