<?php
require_once '../../controllers/AgentPropertyController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new AgentPropertyController();
    $controller->addProperty();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Property</title>
</head>
<body>
    <h2>Add New Property</h2>
    <form method="POST">
        <label>Title:</label> <input type="text" name="title" required><br>
        <label>Description:</label> <textarea name="description"></textarea><br>
        <label>Price:</label> <input type="number" name="price" required><br>
        <label>Location:</label> <input type="text" name="location" required><br>
        <button type="submit">Add Property</button>
    </form>
</body>
</html>

