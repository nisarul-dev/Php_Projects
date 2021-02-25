<?php

class Robot{
    public $name;
    public $color;
    public $weight;

    function __construct($n, $c, $w) {
        $this->name = $n;
        $this->color = $c;
        $this->weight = $w;
    }
}

$r1 = new Robot("Robo-bro", "Green", 40);

echo $r1->name." ".$r1->color." ".$r1->weight."\n";