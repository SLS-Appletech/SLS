<?php
require_once '../middleware/authMiddleware.php';

if (!isAgent()) { 
    header("Location: ../views/login.php");
    exit();
}

echo "<h2>Welcome to the Agent Dashboard</h2>";
echo "<a href='addProperty.php'>Add New Property</a>";
?>
