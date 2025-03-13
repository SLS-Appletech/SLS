<?php require 'header.php'; ?>
<form method="post" action="../controllers/authController.php">
    <input type="text" name="name" required placeholder="Full Name">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit" name="register">Register</button>
</form>
<?php require 'footer.php'; ?>
<form method="post" action="../controllers/authController.php">
    <input type="text" name="name" required placeholder="Full Name">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <select name="role">
        <option value="client">Client</option>
        <option value="agent">Agent</option>
        <option value="admin">Admin</option>
    </select>
    <button type="submit" name="register">Register</button>
</form>
