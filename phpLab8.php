<?php
    declare(strict_types=1);
    //1. function without argument and without returntype
    function add(){
        $var=26;
        $var1=28;
        $ress=$var+$var1;
        echo $ress;
    }
    // add();

    //2. function without argument and with returntype
    function add_n():int{
        $var=26;
        $var1=28;
        $ress=$var+$var1;
        echo $ress;
        return 20;
    }
    // $result =add_n();
    // echo $result;

    //3. function with argument and without returntype
    function add_ne($var,$var1){
        $ress=$var+$var1;
        echo $ress;
    }
    // add_ne(20,32);

    //4. function with argument and with returntype
    function add_new($var,$var1){
        $ress=$var+$var1;
        echo $ress;
    }
    // add_new("20",32,);

    //Q. write a php script which consists a userdefined function along with one fixed string arguments during the excution of the
    //function you have to break the given string as an array and return it back to the calling side.
    function add_new1(string $var,$var1){
        $ress=$var+$var1;
        echo $ress;
    }
    add_new1("hello",32);

    //Q. you have to design a function with a given name adamcheck that must read integer value now you have to check
    // whether the given value is adam number or not, return the value 

    function adamcheck(int $val){
        $sq = $val*$val;
        $rev=0;
        while($sq!=0){
            $digit = $sq%10;
            $rev =($rev *10)+$digit;
            $digit/=10;
        }
    }
    echo adamcheck(12);

    //Q. you have to design a function that must have two integer parameter named as start coumt, end_count . you have to dsplay
    // the value of counter if the counter is multiple of 3 . you have to display yash instead of its counter value. if the counter
    // value is grater then 5 display sushobhit. and if counter is multiple of both 3 and 5 display arun. other wise value of counter

    function count(int $start,int $end){
        while($start<count){
            if($start%3==0 && $end%3==0){
                echo"Yash";
                $start++;
                
            }else if()
        }
       

    }
    $count(15,25);
?>

