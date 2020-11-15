<?php

$email = "rh.nisarul@gmail.com";

echo filter_var($email, FILTER_VALIDATE_EMAIL) ? $email." is a valid email" : $email." is a invalid email" ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter which works like isset</title>
</head>
<body>
    
</body>
</html>