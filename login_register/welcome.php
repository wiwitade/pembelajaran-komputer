<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: index.html");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

</head>
<body>

<h2>Welcome, <?php echo $_SESSION['login_user']; ?>!</h2>
<a href="logout.php">Logout</a>
<br>
<a href="../index.html">Kembali ke Halaman Utama</a>

</body>
</html>