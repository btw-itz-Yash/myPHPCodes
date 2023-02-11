<?php
    // grouping statement in php
    //entry controlled loops --> 1. for  2. while
    //exit controlled loop --> do while loop
    echo "<table style='border:2px solid red;background-color:blue'>";
    echo "<tr >";
    
    for($count = 2 ; $count<=20;$count++){
    for ($count_c = 1; $count_c <= 10; $count_c++) {
        $temp = $count * $count_c;
        echo "<td style='border:2px solid black;height:45px;width:45px;background-color:white'>$count*$count_c=$temp</td>";
    }
            echo "<tr>";
    }
    echo "</tr></table>";
?>

