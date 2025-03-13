<?php require 'header.php'; ?>
<form method="post" action="../controllers/authController.php">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit" name="login">Login</button>
</form>
<?php require 'footer.php'; ?>
