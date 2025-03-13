<?php
require_once '../../controllers/AgentPropertyController.php';
$controller = new AgentPropertyController();
$properties = $controller->index();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Properties</title>
</head>
<body>
    <h2>My Property Listings</h2>
    <a href="add.php">Add New Property</a>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Location</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($properties as $property): ?>
        <tr>
            <td><?= $property['title'] ?></td>
            <td><?= $property['price'] ?></td>
            <td><?= $property['location'] ?></td>
            <td><?= $property['status'] ?></td>
            <td>
                <a href="edit.php?id=<?= $property['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $property['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
