<?php
$val_one = 578;
$val_two = 498;
$val_three = 780;
$val_four = 323;


$max = $val_one>$val_two?$val_one:$val_two;
$max = $max>$val_three?$max:$val_three;
$max = $max>$val_four?$max:$val_four;
echo $max;

?>