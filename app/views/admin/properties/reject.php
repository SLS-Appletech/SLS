<?php
require_once '../../controllers/PropertyController.php';
$propertyController = new PropertyController();
$propertyController->reject($_GET['id']);
?>
