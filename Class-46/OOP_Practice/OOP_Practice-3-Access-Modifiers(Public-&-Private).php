<?php
//Class
class Robot {
    public $name = "Robo-Bro";
    private $id = 15;

    // Methods
    public function get_details() {
        return "Hey there, My name is " . $this->name . ". And my id is " . $this->id;
    }
}

// Creating a new Robot
$r1 = new Robot();

//echo $r1->id; // Fatal Error

echo $r1->get_details();

echo "\n";
echo "\n";
print_r($r1);

// When we use a private property, we cannot set or get the value at global space.
// We'll need to create a set method to set the value and get method to get the value.