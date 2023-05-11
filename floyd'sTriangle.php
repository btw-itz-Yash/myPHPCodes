<?php   
    $temp =1;
    for($count = 7 ; $count>=1;$count--){
        echo "<table style='border:2px solid black;background-color:blue;'>";
        for ($count_c = 1; $count_c <= $count; $count_c++) {
            echo "<td style='border:2px solid black;height:45px;width:45px;background-color:white;'>$temp</td>";
            $temp++;
        }
    }
    echo "</table>";
?>