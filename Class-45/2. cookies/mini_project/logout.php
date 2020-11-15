<?php
session_start();
session_destroy();

setcookie("login_success", "", time() - 365*24*60*60);

header("Location: index.php");