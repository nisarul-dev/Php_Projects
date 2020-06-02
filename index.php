<?php


//$_GET['name'] = "Nisarul Amin Naim";
$name = isset($_GET["name"]) ? $_GET["name"] : NULL;
echo $name;

echo '<br>'.'<br>';
var_dump( $_GET);