<?php
require_once '../../controllers/ClientPropertyController.php';
$controller = new ClientPropertyController();
$properties = $controller->listProperties();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Properties</title>
</head>
<body>
    <h2>Property Listings</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Location</th>
            <th>Details</th>
        </tr>
        <?php foreach ($properties as $property): ?>
        <tr>
            <td><?= $property['title'] ?></td>
            <td><?= $property['price'] ?></td>
            <td><?= $property['location'] ?></td>
            <td><a href="view.php?id=<?= $property['id'] ?>">View</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

