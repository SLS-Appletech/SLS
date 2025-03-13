<?php
require_once '../../controllers/ClientPropertyController.php';
$controller = new ClientPropertyController();
$controller->viewProperty($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Property Details</title>
</head>
<body>
    <h2><?= $property['title'] ?></h2>
    <p>Price: <?= $property['price'] ?></p>
    <p>Location: <?= $property['location'] ?></p>
    <p>Description: <?= $property['description'] ?></p>

    <h3>Make an Offer</h3>
    <form method="POST" action="make_offer.php">
        <input type="hidden" name="property_id" value="<?= $property['id'] ?>">
        <label>Offer Price:</label>
        <input type="number" name="offer_price" required>
        <button type="submit">Submit Offer</button>
    </form>
</body>
</html>
