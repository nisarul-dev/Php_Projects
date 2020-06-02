<?php
session_start();

if (isset($_SESSION['login_success'])) {
    header("location: admin.php");
}

define("USERNAME", "nisarul");
define("USERNAME2", "bappy");
define("PASSWORD", "1234");

if (isset($_POST["login"])) {
    $username = $_POST["name"];
    $password = $_POST["password"];

    if ($username == USERNAME || $username == USERNAME2 && $password == PASSWORD) {
        $_SESSION['login_success'] = true;
        header("location: admin.php");
        $_SESSION['name'] = $username;
    } else {
        $error_login = "Username or Password is Incorrect.";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Username" id="name" required>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" name="login" value="Login" id="login">
    </form>
    <br><br>
    <?php echo isset($error_login) ? $error_login : "Please Login."; ?>
</body>
</html>

