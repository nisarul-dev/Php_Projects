<?php
session_start();

echo $_SESSION['name']."<br><br>";
print_r($_SESSION);

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
<br>
<br><br>
go to <a href="admin.php">admin.php</a>
<br>
go to <a href="logout.php">logout.php</a>
</body>
</html>

