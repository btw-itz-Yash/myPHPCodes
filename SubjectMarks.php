<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <center><form action="" method="post"jy><br><br>
        username : <input type="text" name="user" id=""> <br><br>
        Password : <input type="password" name="pass" id=""> <br><br>
        <input type="submit" value="submit" name = "save">
     </form></center>
</body>
<?php
   if(isset($_POST['save'])){
   $text = $_POST['user'];
    $pass = $_POST['pass'];

$file = fopen("PHPLABASSIGN.txt", "a");
   fwrite($file, $text);
   fwrite($file, $pass);
   fclose($file);
   }
?>
</html>
 