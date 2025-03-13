<?php
session_start();

class RoleMiddleware {
    public static function checkRole($allowedRoles) {
        if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $allowedRoles)) {
            echo "Access Denied!";
            exit();
        }
    }
}
?>
