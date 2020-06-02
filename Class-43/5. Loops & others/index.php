<?php
// While Loop
$init = 1;
while ($init < 10) {
    echo $init."   ";
    $init++;
}
echo "<br><br>";

// Do While Loop
$init = 0;
do {
    echo $init."  ";
    $init++;
} while ($init < -10);
echo "<br><br>";

// For Loop
for ($init = -5; $init < 10; $init++) {
    echo $init."  ";
}
echo "<br><br>";

// Foreach Loop
$ara = array(10, 20, 30, 40, 50);
$bab = 0;
foreach ($ara as $bab) {
    echo $bab.", ";
}

