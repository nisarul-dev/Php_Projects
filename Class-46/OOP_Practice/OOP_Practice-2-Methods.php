<?php
//Class
class Robot {
    public $name;
    public $color;
    public $weight;

    // Methods
    function introduce() {
        return "Hey there, My name is " . $this->name;
    }
}

// Creating a new Robot
$r1 = new Robot();

$r1->name = "Robo-Bro";
$r1->color = "Green";
$r1->weight = 60;

// Creating another robot
$r2 = new Robot();

$r2->name = "Robo-Sis";
$r2->color = "Pink";
$r2->weight = 40;

// Applying Methods
echo $r2->introduce();