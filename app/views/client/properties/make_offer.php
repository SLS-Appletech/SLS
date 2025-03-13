<?php
require_once '../../controllers/ClientPropertyController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new ClientPropertyController();
    $controller->makeOffer();
}
?>
