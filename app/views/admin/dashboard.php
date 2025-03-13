<?php
require_once '../middleware/authMiddleware.php';
require_once '../config/database.php';

// Ensure only Admins can access
if (!isAdmin()) { 
    header("Location: ../views/login.php");
    exit();
}

// Fetch all users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome to the Admin Dashboard</h2>
    <h3>User Management</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php while ($user = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['role'] ?></td>
            <td>
                <a href="editUser.php?id=<?= $user['id'] ?>">Edit</a> | 
                <a href="deleteUser.php?id=<?= $user['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
