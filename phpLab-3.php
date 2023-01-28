<?php
    // $data = "Welcome Class";
    // $data_new = 'section f';
    // var_dump($data);
    // echo "<br>";
    // var_dump($data_new);
    // echo "<br>";
    // echo "hello \n welcome  $data";
    // echo "<br>";
    // echo 'hello \n welcome $data_new';

// echo 'Welcome to tutorial\'s php';
// echo "<br>";
// echo "Welcome \"to\" tutorial's php";
// echo"<br>";

// //doc syntax type string
// $data = <<<myString
// Hello class'es \n "we"lcome
// myString;
// echo $data;
// echo "<br>";
// //1.now syntax type string
// $data = <<<'myString'
// Hello class'es \n "we"lcome
// myString;
// echo $data;

// echo "<br>";
// //2.here Syntax type string
// $data = <<<"myString"
// Hello class'es \n "we"lcome
// myString;
// echo $data;

// types of function

//1. addcslashes
echo addcslashes("hello class","s,e");

echo "<br>";
echo "<br>";

//2. addslashes
echo addslashes("hello cla'ss"); //add backslashes before predifined character like ' and "

echo "<br>";
echo "<br>";

//3. binary to hexadecimal - bin2hex
echo bin2hex("hello");

echo "<br>";
echo "<br>";

//4. remove unwanted white space - chop function
// it works by right side or by ending character or we can say that it remove the right end white space
$var = " php";
$var_new = chop($var,"p");
var_dump($var);
echo "<br>";
var_dump($var_new);
echo "<br>";
echo chop("hello class", 'salc');

echo "<br>";
echo "<br>";

//5. chunk_split( string,length,separater )
echo chunk_split("hello", 2,":");

echo "<br>";
echo "<br>";

//6. convert_uuencode
echo convert_uuencode("akash");
$name = convert_uuencode("akash");

echo "<br>";
echo "<br>";

//7. convert_uudecode
echo convert_uudecode($name);

echo "<br>";
echo "<br>";

//8. chr and ord 
echo chr(112);
echo ord('A');

echo "<br>";
echo "<br>";

//9. count chars   there 256 total character from ascii value 0-255";
echo "<br>";
print_r(count_chars("hello",3));//for value 1 it print the array of ascci character given in string and by 2 it work like default i.e give all the ascci character value array

echo "<br>";
echo "<br>";

//10. crypt
echo crypt("hello", 1);
echo "<br>";
echo crc32("h");

echo "<br>";
echo "<br>";

//11. explode
echo "//11. explode -- this function separte the string by given separator and print the output in the array indexes";
echo "<br>";
print_r(explode("e", "hello welcome"));

echo "<br>";
echo "<br>";

//12. implode or join -- this function join the sepaarted set of characters and form a single string
print_r(implode('', ['h', 'e', 'l', 'l', 'o']));

echo "<br>";
echo "<br>";

//13. HTMLENTITIES
echo htmlentities("<a href=www.google.com>go</a>");
echo html_entity_decode("<a href=https://leadcoding.in/dsa-sheet/> CLICK HERE </a>");

//14. uc words  

//15. lcfirst

//16. ucfirst

//17. strtoupper() --> change string to upper case

//18. strtolower() --> change string to lower case

//19. ltrim --> similar working like chop but it work from left 

//20. rtrim --> similar working like chop but it work from right

//21. md5() --> to encode the string   or md_file() --> to encode the whole file at a time
echo "<br>";
print_r(md5("yash"));
//22. metaphonefirst() -->
echo "<br>";
//23. number_format --> 

print_r(number_format(10.23928920, 2));

//24. sha() --> hashing algorithm // 

echo "<br>";
echo sha1("yash");

echo "<br>";
//25. str_replace --> case sensitive  // str_ireplace --> case insensitive   // str_repeat --> no. of yime string print
echo str_replace("w", "d","words");
echo "<br>";
echo str_ireplace("W", "d","words");
echo "<br>";
echo str_repeat("hello","5");
echo "<br>";

//26. str_pad --> padded the length of string
echo str_pad("hello","10","o");

//27. str_shuffle

//28. str_word_count() --> count the no. of words in a string

echo "<br>";
//29. str_cmp --->  give 3 output -1,0,1 ; 
// -1  --> when ascii value of second argument greator
// 1 --> when ascii value of first argument greator
// 0 --> when ascii value is equal
echo strcmp("heea", "heej");
echo "<br>";

//30.
echo strcasecmp("heea", "heej");

echo "<br>";

//31.
strlen("yash"); // --> string length

echo "<br>";

//32.
strpos("hello", 4);// ---> string position   stripos --> case insensitive
// stripos();


?> 






























































