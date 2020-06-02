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
<form action="details.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter Your Name">
    <input type="email" name="email" id="email" placeholder="Enter Your E-mail">
    <input type="submit" name="" value="Submit">
</form>
    <br><br>
    <?php //echo $name; ?>
    <br>
    <?php //echo $email; // The variable are of details.php page. So it is not working in index.php page. ?>
</body>
</html>
