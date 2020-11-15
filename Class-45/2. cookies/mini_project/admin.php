<?php
session_start();
if (!isset($_SESSION['login_success']) && !isset($_COOKIE['login_success'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Admin Panel</title>
</head>
<body>
    <h1>Welcome to admin panel</h1>
    <a href="logout.php">Click here to Logout</a>
</body>
</html>