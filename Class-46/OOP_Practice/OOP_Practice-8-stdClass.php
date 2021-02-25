<?php

// stdClass = standard class; stdClass is a empty class where we can create objects and properties.
$employee_object = new stdClass;
$employee_object->name = "John Doe";
$employee_object->position = "Software Engineer";
$employee_object->address = "53, nth street, city";
$employee_object->status = "Best";

print_r($employee_object);
