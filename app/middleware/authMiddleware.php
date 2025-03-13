<?php
session_start();

class AuthMiddleware {
    public static function checkAuthenticated() {
        if (!isset($_SESSION['user'])) {
            header("Location: /views/login.php");
            exit();
        }
    }
}
?>
