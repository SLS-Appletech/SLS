<?php
require_once '../../controllers/PropertyController.php';
$propertyController = new PropertyController();
$properties = $propertyController->index();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Property Management</title>
</head>
<body>
    <h2>Property Listings</h2>
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
                <a href="approve.php?id=<?= $property['id'] ?>">Approve</a> |
                <a href="reject.php?id=<?= $property['id'] ?>">Reject</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
