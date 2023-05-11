<?php
    // grouping statement in php
    //entry controlled loops --> 1. for  2. while
    //exit controlled loop --> do while loop
    echo "<table style='border:2px solid red'>";
    echo "<tr >";
    
    for($count = 1 ; $count<=10;$count++){
    for ($count_c = 1; $count_c <= 10; $count_c++) {
        $temp = $count * $count_c;
        echo "<td style='border:2px solid black;height:30px;width:30px'>$temp</td>";
    }
     echo "</tr>";
    
    }
    echo "</table>";
?>

