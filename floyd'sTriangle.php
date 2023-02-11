<?php
    
    
    $temp =1;
    for($count = 1 ; $count<=4;$count++){
        echo "<table style='border:2px solid black;background-color:blue;border-collapse:collapse'>";
        echo "<tr style='border-collapse:collapse'>";
    for ($count_c = 1; $count_c <= $count; $count_c++) {
        echo "<td style='border:2px solid black;height:45px;width:45px;background-color:white;border-collapse:collapse;justify'>$temp</td>";
        $temp++;
    }
            echo "<tr>";
    }
    echo "</tr></table>";
?>