<?php
    //Array Printing by for loop which failed on associative array
    $arr = [10,20,30];
    for($index=0;$index<3;$index++){
    echo ($arr[$index]." ");
    }

    echo "<br>";
    //Array Printing by foreach loop which print index as well as value alone.
    // $arr_n = [10=>2,20,30];
    // foreach($arr_n as $value){
    // echo $val." ";
    // }

    echo "<br>";

    $arr_n = ["rohit"=>10,20,30];
    foreach($arr_n as $index=>$value){
    echo "the value of $index is $value";
    echo "<br>";
    }
    
?>