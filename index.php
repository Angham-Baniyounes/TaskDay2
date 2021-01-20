<?php
    $mark = 85;

    if($mark <= 100 && $mark >= 90) {
        echo "A";
    } elseif ($mark <= 89 && $mark >= 80) {
        echo "B";
    } elseif ($mark <= 79 && $mark >= 70) {
        echo "C";
    } elseif ($mark <= 69 && $mark >= 60) {
        echo "D";
    } elseif ($mark <= 50 && $mark >= 0) {
        echo "F";
    } else {
        echo "Invalid Mark";
    }
?>