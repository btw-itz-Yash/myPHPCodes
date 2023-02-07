<?php
    // grouping statement in php
    //entry controlled loops --> 1. for  2. while
    //exit controlled loop --> do while loop
    echo "<table style='border:2px solid red;background-color:blue'>";
    echo "<tr >";
    $temp = 0;
    for($count = 1 ; $count<=10;$count++){
        for ($count_c = 1; $count_c <= 10; $count_c++) {
            if($count==1){
                echo "<td style='border:2px solid black;height:45px;width:45px;background-color:white'>0$temp</td>";
                $temp++;
            }
            else{
                echo "<td style='border:2px solid black;height:45px;width:45px; background-color:white'>$temp</td>";
                $temp++;
            }  
        }  
        echo "<tr>";
    }
    echo "</tr></table>";
?>

