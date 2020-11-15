<?php
// mail(to,subject,message,headers,parameters);
// Input names
// to_mail
// mail_subject
// mail_body
// mail_submit

echo "Hello Bangladesh";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mailing System</title>
</head>
<body>
<h1>Please Send a Email from below</h1>
<form action="#" method="post">
    <input type="email"name="to_mail" placeholder="To ex.rana@gmail.com"> <br> <br>
    <input type="text" name="mail_subject" placeholder="Subject"> <br> <br>
    <textarea name="mail_body" placeholder="Message" id="mail_body" cols="30" rows="10"></textarea> <br> <br>
    <input name="mail_submit" type="submit" value="Send mail">
</form>
</body>
</html>
