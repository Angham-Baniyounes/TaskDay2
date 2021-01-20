<?php
    $k = 1;
    for($i = ord('a'); $i <= ord('z'); $i++) {
        echo "<h4 style='color: blue;'>".str_repeat(strtoupper(chr($i)), $k).str_repeat($k, $k)."</h4><hr>";
        $k++;
    }
?>