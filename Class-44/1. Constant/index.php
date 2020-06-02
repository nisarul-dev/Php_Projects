<?php
// Variable Declaration
$is_var = "I'm Variable and I'm changeable.";
echo $is_var;
echo "<br><br>";

$is_var = "I changed.";
echo $is_var;

echo "<br><br>==================================================<br><br>";

// Constant Declaration
define("IS_CONST", "I'm a constant and I'm not changeable.");
echo IS_CONST;
echo "<br><br>";

define("IS_CONST", "I cannot change.");
echo IS_CONST;