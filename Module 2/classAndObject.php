<?php
class stu{
    public $name="akash";
    public $isalive=true;
    public function examconduct(){
         $this->name="rohan";
    }
}
$name=new stu;
$name_two=new stu();
 $name_three=new stu;
 $name_two->examconduct();
 echo $name->name;
 echo $name_two->name;
 echo $name_three->name;

// echo $name_two->name;
// echo $name-> isalive;
// echo $name_three->name="yugal";
// echo $name_two-> name;
// echo $name->name;
?>