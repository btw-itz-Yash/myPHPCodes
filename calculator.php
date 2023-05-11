<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        *{
            padding: auto;
        }
        body{
            background-image: url(./Screenshot\ 2022-04-22\ 002458.jpg);
            background-repeat: y-repeat;
            background-position:center top;
            background-attachment:fixed;
            background-size: 100% 100%;
        }
        .container{
            /* border: solid 2px white; */
            padding-bottom:80px ;
            background: rgba(33, 12, 81, 0.6);
            border-radius: 50px;
            box-shadow: black;
            opacity: 0.8;
            margin: 80px;
            height: 60%;
            display: flex;
            text-align: center;
            justify-content: center;
        }
        .label{
            margin: 15px 55px 5px -100px;
        }
        input{
            color: brown;
        }
        td{
            padding: 5px;
        }
        input:hover{
            background-color: blueviolet;
        }
    </style>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $num_one=$_POST['fnum'];
$num_two=$_POST['snum'];

if(isset($_POST['Add']))
{
    $result = $num_one+$num_two;
    echo"Addition of Two Number is $num_one & $num_two is:". $num_one+$num_two;
}
if(isset($_POST['Sub']))
{
    $result = $num_one-$num_two;
    echo"Subtraction of Two Number is $num_one & $num_two is:". $num_one-$num_two;
}
if(isset($_POST['Mul']))
{
    $result = $num_one*$num_two;
    echo"Mutiply of Two Number is $num_one & $num_two is:". $num_one*$num_two;
}
if(isset($_POST['Div']))
{
    $result = $num_one/$num_two;
    echo"Divide of Two Number is $num_one & $num_two is:". $num_one/$num_two;
}
if(isset($_POST['Mod']))
{
    $result = $num_one%$num_two;
    echo"Modulous of Two Number is $num_one & $num_two is:". $num_one%$num_two;
}
}
?>
    <div class="container">
        <form action="" method="post">
            <h1 style="display: flex; justify-content:center; text-align:center; color:darkred">CALCULATOR</h1>
            <table>
                <tr>
                    <td class="label" style="display: flex; justify-content:center; text-align:center; color:darkred">Enter First Number</td>
                    <td><input type="text" name="fnum"></td>
                </tr>
                <tr>
                    <td class="label" style="display: flex; justify-content:center; text-align:center; color:darkred">Enter Second Number</td>
                    <td><input type="text" name="snum"></td>
                </tr>
                <tr>
                <tr>
                    <td>
                    <input type="submit" name="Add" value="Addition">
                    <input type="submit" name="Sub" value="Subtraction">
                    </td>
                </tr>
                <tr>
                    <td>   
                    <input type="submit" name="Mul" value="Mutiply">
                    <input type="submit" name="Div" value="Divide">
                    <input type="submit" name="Mod" value="Modulous">
                    </td>
                </tr>

            </table>
            <br><br>

            <center style="color: aliceblue;"><label for="" style><?php echo "Result of opertion on two Numer is ".$result; ?></label></center>
        </form>
            
    </div>
</body>
</html>
