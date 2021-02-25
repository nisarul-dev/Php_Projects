<?php

class Robot {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function introduce() {
        return "Hello, My Name is {$this->name}. And my color is {$this->color}.";
    }
}

$r1 = new Robot("Robo-bro", "Green");
$r2 = new Robot("Robo-sis", "Pink");

$r1_copy = $r1;
$r2_clone = clone $r2;

$r1_copy->color = "Black";
$r2_clone->color = "Black";


print_r($r1);
echo "\n";
print_r($r1_copy);
echo "\n";
print_r($r2);
echo "\n";
print_r($r2_clone);