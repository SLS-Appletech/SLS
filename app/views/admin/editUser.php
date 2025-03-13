<?php
require_once '../middleware/authMiddleware.php';
require_once '../config/database.php';

if (!isAdmin()) { 
    header("Location: ../views/login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'];
    $updateQuery = "UPDATE users SET role='$role' WHERE id='$id'";
    mysqli_query($conn, $updateQuery);
    header("Location: dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User Role</h2>
    <form method="post">
        <label>Role:</label>
        <select name="role">
            <option value="Admin" <?= $user['role'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
            <option value="Agent" <?= $user['role'] == 'Agent' ? 'selected' : '' ?>>Agent</option>
            <option value="Client" <?= $user['role'] == 'Client' ? 'selected' : '' ?>>Client</option>
        </select>
        <button type="submit">Update</button>
    </form>
</body>
</html>
