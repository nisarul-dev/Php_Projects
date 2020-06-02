<?php
// Get Works With Query String in the Url
$name = isset($_GET["name"]) ? $_GET["name"] : "Please Enter Your Name";
$email = isset($_GET["email"]) ? $_GET["email"] : "Please Enter Your E-mail";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="get">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="E-mail">
    <input type="submit" name="" value="Sign Up">
</form>
<br>
Name: <?php echo $name; ?>
<br>
E-mail: <?php echo $email; ?>
</body>
</html>
