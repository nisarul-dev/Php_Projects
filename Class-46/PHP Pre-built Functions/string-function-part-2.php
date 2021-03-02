<?php
$file_name = "Hello.txt";

$fp = fopen($file_name, "w");
fprintf($fp, "Hello Bangladesh.");

fclose($fp);
