<?php
require_once '../../controllers/OfferController.php';
$controller = new OfferController();
$controller->compareOffers($_GET['property_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Offer Comparison</title>
</head>
<body>
    <h2>Offer Comparison</h2>
    <table border="1">
        <tr>
            <th>Offer Price</th>
            <th>Buyer's Agent</th>
            <th>Financing Type</th>
            <th>Earnest Money</th>
            <th>Estimated Net Proceeds</th>
        </tr>
        <?php foreach ($offers as $offer): ?>
        <tr>
            <td><?= $offer['offer_price'] ?></td>
            <td><?= $offer['buyer_agent'] ?></td>
            <td><?= $offer['financing_type'] ?></td>
            <td><?= $offer['earnest_money'] ?></td>
            <td><?= $offer['estimated_net_proceeds'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
