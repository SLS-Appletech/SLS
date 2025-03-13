<?php
require_once '../../controllers/ClientPropertyController.php';
$controller = new ClientPropertyController();
$offers = $controller->viewOffers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Offers</title>
</head>
<body>
    <h2>My Submitted Offers</h2>
    <table border="1">
        <tr>
            <th>Property ID</th>
            <th>Offer Price</th>
            <th>Status</th>
        </tr>
        <?php foreach ($offers as $offer): ?>
        <tr>
            <td><?= $offer['property_id'] ?></td>
            <td><?= $offer['offer_price'] ?></td>
            <td><?= ucfirst($offer['status']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
