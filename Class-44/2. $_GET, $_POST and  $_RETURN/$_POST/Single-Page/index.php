<?php
$name = isset($_POST["name"]) ? "Name: ".$_POST["name"] : "Please Enter Your Name";
$email = isset($_POST["email"]) ? "E-mail: ".$_POST["email"] : "Please Enter Your E-mail";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter Your Name">
    <input type="email" name="email" id="email" placeholder="Enter Your E-mail">
    <input type="submit" value="Submit">
</form>
<br><br>
<?php echo $name; ?>
<br>
<?php echo $email; ?>
</body>
</html>
