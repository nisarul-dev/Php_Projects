<?php
session_start();

print_r($_SESSION);

echo "<br>";

print_r($_COOKIE);

echo "<br>";
echo isset($_COOKIE['login_success']);