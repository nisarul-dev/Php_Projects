<?php
//// UpperCase
//echo strtoupper("Hello Bangladesh") . "\n"; // HELLO BANGLADESH

//// To Lowercase
//echo strtolower("Hello Bangladesh") . "\n"; //hello bangladesh

//// crypt
//$password = "123456";
//$encrypted_password = crypt($password, "Hello Bangladesh");
//echo $encrypted_password; // Hecj0Q5TRreoU

//// MD5
//$password = "123456";
//$encrypted_password = md5($password);
//echo $encrypted_password; // e10adc3949ba59abbe56e057f20f883e

//

function read_more($article, $length) {
    $venge_felsi = explode(" ", $article );
    $slice = array_slice($venge_felsi, 0, $length);
    echo implode(" ", $slice) . "  >> Read More";
}

$article = "Everything we do is connected with pain: intuition, light, art, vision. Fluff white bread immediately, then mix with gold tequila and serve fast in casserole.";
read_more( $article, 6 );

