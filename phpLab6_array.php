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

//     echo "<br>";

//     $arr_n = ["rohit"=>10,20,30];
//     foreach($arr_n as $index=>$value){
//     echo "the value of $index is $value";
//     echo "<br>";
//     }

// echo "<br>";
// $students_Marks = [
//     "Rohit" => ["dip" => 91, "tafl" => 81, "php" => 85, "bd" => 82, "cloud" => 95],
//     "Mohit" => ["dip" => 91, "tafl" => 81, "php" => 85, "bd" => 82, "cloud" => 95],
//     "Aryan" => ["dip" => 91, "tafl" => 81, "php" => 85, "bd" => 82, "cloud" => 95]
// ];
// foreach ($students_Marks as $name => $value){
//     echo "the marks of $name is  : <br>";
//     foreach ($value as $subject => $marks){
//         echo"&nbsp&nbsp&nbsp&nbsp&nbsp";
//         $subject = strtoupper($subject);
//         echo"Marks in $subject : $marks";
//         echo"<br>";
//     }
// }


/// 1. array_change_key_case()
// 2. array_chunk() --> divide arrya in the given partion 
// 3. array_column() --> 


//4 . array_combine() --> two parameters need both arry , no. of elemenys in both arrya will be same, 
//in 1st arrya all element are string, in 2nd any kind of data
//it create associative array 
// $arry = ["a","b","c"];
// $array_n = [1,2,3];
// print_r(array_combine($arry,$array_n));


//5. array_count_values();
$array = [10, 20, 30, 40, 50,10,20];
print_r(array_count_values($array));

//6. array_diff

//7. array_diff_key

//8 .array_diff_assoc()

?>

