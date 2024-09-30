<?php
session_start();
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function redirectToLogin() {
    header("Location: login_register/index.php");
    exit();
}

if (!isLoggedIn()) {
    redirectToLogin();
}
?>