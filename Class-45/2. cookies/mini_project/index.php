<?php

session_start();
if (isset($_SESSION['login_success']) || isset($_COOKIE['login_success'])) {
    header("Location: admin.php");
}
if(isset($_POST['keeplogged'])) {
    $keeplogged = true;
} else {
    $keeplogged = false;
}

define('USERNAME', 'nisarul');
define('PASSWORD', '1234');

if (isset($_POST['login'])) {
    if($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {
        $_SESSION['login_success'] = true;
        setcookie("login_success", $keeplogged, time() + 365*24*60*60);
        header("Location: admin.php");
    }
    else {
        $error = "Username or Password is Incorrect";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Login panal</title>
</head>
<body>
    <h1>Hey There</h1>
    <h2>Please Log in</h2>
    <form action="" method="post">
    <input type="text" name="username"  id="username" placeholder="Enter Your Username" required><br>
    <input type="password" name="password" id="password" placeholder="Enter Your Password" required><br>
    <input type="checkbox" name="keeplogged" id="keeplogged"><br>
    <input type="submit" value="Log in" name="login">
    </form>
    <p><?php echo isset($error) ? $error : ""; ?></p>
</body>
</html>

