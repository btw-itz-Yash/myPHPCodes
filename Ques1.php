<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name = $_POST["svalue"];
            if(isset($_POST['Chunk_string']))
            {
                $ans = chunk_split("$name",2);
                // echo chunk_split("$name",2);
            }
        }
    ?>
    <div class="container">
        <form action="" method="post">
        <input type="text" placeholder="Enter a string" name="svalue">
        <br><br>
        <input type="submit" value="Chunk_string" name="Chunk_string">
        <input type="submit" value="string repitition" name="string repitition">
        <input type="submit" value="string to binary conversion" name="string to binary conversion">
        <input type="submit" value="convert_uuncode" name="convert_uuncode">
        <input type="submit" value="stringreverse" name="stringreverse">
        <br><br>
        <input type="text" value="<?php echo $ans?>">
        </form>
    </div>
</body>
</html>