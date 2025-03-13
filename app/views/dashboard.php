<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<p>Welcome, <?php echo $_SESSION['user_name']; ?>!</p>
<a href="logout.php">Logout</a>

// logout.php
<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>