<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <style>
        label{
            margin-left:20px ;
        }
        /* input{
            margin-left: 150px;
        } */
    </style>
</head>
<body style="border: 2px solid red; margin:40px 450px 0px 450px;">
    <center style="background-color:aquamarine;opacity:5;"><h3>Login Form</h3></center>
    <form action="../project1/home.php" method="post" style="background-color:aquamarine;opacity:5;">
        <label for="">Enter Your Name</label>
        <input type="text" name="uname" placeholder="Enter Your Name">
        <br><br>
        <label for="">Enter Your Password</label>
        <input type="password" name="upass" placeholder="Enter the password">
        <br><br>
        <center><input type="submit" name="save" value="submit"></center>
        <br>
    </form>
</body>
</html>