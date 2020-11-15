<?php

// ##### Local Scope #####
$i = 5; // global

function make_it_learger() {
    $i++; // local (Notice on line 7: $i = $i + 1; it cannot recognize the i right side of the equal(=) sign )
}

make_it_learger();

echo $i; // global
echo "<br>" . "<br>";


// ##### Global Scope #####
$j = 5; // global

function make_it_learger_2() {
    global $j; // making $j global
    $j++; // global
}

make_it_learger_2();

echo $j;