<?php
require_once '../../controllers/AgentPropertyController.php';
$controller = new AgentPropertyController();
$controller->deleteProperty($_GET['id']);
?>
