<?php

class Robot {
    public $name;
    public $color;
    public $weight;
    public $language = "English";

}
// Creating a new Robot
$r1 = new Robot();

$r1->name = "Robot Brother";
$r1->color = "Green";
$r1->weight = 40;
$r1->custom_property = "Custom-value";

echo $r1->name . PHP_EOL;
echo $r1->language . PHP_EOL;
echo $r1->custom_property . PHP_EOL . PHP_EOL;

// Creating another robot
$r2 = new Robot();

$r2->name = "Robot Sister";
$r2->color = "Pink";
$r2->weight = 50;
$r2->language = "Bangla";

echo $r2->name . PHP_EOL;
echo $r2->language . PHP_EOL . PHP_EOL;