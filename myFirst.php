<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Yash</h2>
    <p>
        %b - binary                         %h
        %c                                  %s

        %d or %i - integer(4byte)           %o - octal representation
        %e -expotential                                 %x
        %f -float value                                 %ld
        %g  - gravita                                %lf
        %lld
    </p>
<?php
    //$num;
    //var_dump($num);
    $val1 = 2;
    $val2 = 3;
    $result = $val1 + $val2;
    print"the addition of two numbers $val1 and $val2 is : $result";
    
?> 
<br>
<br>

<?php
    $value = "hello";
    //echo(print(print("hello $value")));
    // echo(print(print(printf("%d",11))));
    // echo(print(print(printf("%d","my name is Yash"))));
    echo(print(print(printf("%o",printf("my name is Yash ")))));
?>
</body>
</html>
