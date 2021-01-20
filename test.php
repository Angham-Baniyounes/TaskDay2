<?php
    echo "<table style='border: 1px solid black; width: 100%; border-collapse: collapse;'>
    <thead>
        <tr style='border: 1px solid black;'>
            <th  style='border: 1px solid black;'>Letter</th>
            <th  style='border: 1px solid black;'>Number</th>
            <th  style='border: 1px solid black;'>Patern 1</th>
        </tr>
    </thead>
    <tbody>
    ";
    $k = 1;
    for($i = ord('a'); $i <= ord('z'); $i++) {
        echo "<tr><td  style='border: 1px solid black;'>".strtoupper(chr($i))."</td>";
        echo "<td  style='border: 1px solid black;'>".$k."</td>";
        echo "<td style='color: blue; border: 1px solid black;'>".str_repeat(strtoupper(chr($i)), $k);
        echo str_repeat($k, $k)."</td></tr>";
        $k++;
    }
    echo "
    </tbody>
    </table>";
?>