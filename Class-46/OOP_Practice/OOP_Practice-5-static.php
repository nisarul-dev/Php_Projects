<?php
// Static Properties & Methods
class Pi {
    public static $value = 3.1416;

    // Using static Properties inside class methods
    static function the_value() {
        return self::$value;
    }
}
// Using static Properties outside class
echo Pi::$value; // Property
echo "\n";
echo Pi::the_value(); // Methods
echo "\n";

// Another Class
class Pi_2 extends Pi {
    // Using static Property of parent class
    static function the_value_2() {
        return parent::$value;
    }
}

echo Pi_2::$value; // Property
echo "\n";
echo Pi_2::the_value_2(); // Methods
echo "\n";
