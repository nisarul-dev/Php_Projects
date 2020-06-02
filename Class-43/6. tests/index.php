<?php

//gettype, print_r, var_dump
// For Variable
$hello = "Hello Bangladesh";

print_r($hello);
echo "<br>";

echo gettype($hello);
echo "<br>";

var_dump($hello);

echo "<br><br>";

// For Array
$ara = array(10, 20, 30, 40, 50);
print_r($ara);
echo "<br>";

echo gettype($ara);
echo "<br>";

var_dump($ara);
echo "<br><br>";


// For Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}