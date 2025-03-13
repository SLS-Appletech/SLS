<?php
require_once '../middleware/authMiddleware.php';

if (!isClient()) { 
    header("Location: ../views/login.php");
    exit();
}

echo "<h2>Welcome to the Client Dashboard</h2>";
echo "<a href='viewProperties.php'>Browse Listings</a>";
?>
