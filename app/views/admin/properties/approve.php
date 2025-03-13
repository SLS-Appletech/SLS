<?php
require_once '../../controllers/PropertyController.php';
$propertyController = new PropertyController();
$propertyController->approve($_GET['id']);
?>

