<?php

// Setting a cookie on by php
// setcookie("name", "Nisarul Amin Naim", time() + 20);
// echo $_COOKIE['name']. "<br>";
// print_r($_COOKIE);

// Setting a cookie with alocated time
setcookie("name", "Nisarul Amin Naim", time() + 20);
echo $_COOKIE['name']. "<br>";
echo time() . "<br>";
print_r($_COOKIE);