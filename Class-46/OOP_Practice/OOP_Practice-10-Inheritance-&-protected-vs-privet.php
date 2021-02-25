<?php

class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }

    private function hello() {
        echo "I am privet.";
    }
}

class Strawberry extends Fruit {
    function message() {
        echo "Am I a fruit or a berry? ";
        $this->intro(); // Ok.
//      $this->hello(); // Error.
    }
}

$strawberry = new Strawberry("Strawberry", "red");
//$strawberry->intro(); // Error.
$strawberry->message(); // Ok.

