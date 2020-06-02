<?php
    $marks = 36;
    if ($marks < 0 || $marks >100) {
        $result_description = "Invalid Input. 😑";
    }
    elseif ($marks < 33) {
        $result_description = "You failed the exam. 😶";
    } elseif ($marks >= 33 && $marks < 40) {
        $result_description = "You passed the exam with D grade. 😁";
    } elseif ($marks >= 40 && $marks <50) {
        $result_description = "You passed the exam with C grade. 😁";
    } elseif ($marks >= 50 && $marks <60) {
        $result_description = "You passed the exam with B grade. 😍";
    } elseif ($marks >= 60 && $marks <70) {
        $result_description = "You passed the exam with A- grade. 😍";
    } elseif ($marks >= 70 && $marks <80) {
        $result_description = "You passed the exam with A grade. 😍";
    } elseif ($marks >= 80 && $marks <90) {
        $result_description = "You passed the exam with A+ grade. 😎";
    } elseif ($marks >= 90 && $marks <100) {
        $result_description = "You passed the exam with Golden A+ grade. 😎";
    }

    echo sprintf($result_description);

