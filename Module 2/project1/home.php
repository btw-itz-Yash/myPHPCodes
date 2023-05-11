<?php
$username="admin";
$password="admin";
session_start();
if(isset($_SESSION['uname'])){
    echo "Welcome to Home Page";
    echo "<h1>Hello,</h1>" .$_SESSION['uname'];
    echo "<br><a href=product.php>Click Here for Products</a>";
    echo "<br><a href=about.php>Click Here to About</a>";
    echo "<br><button><a href=logout.php style='text-decoration:none;'>Logout</a>";
}
else{
    if($username == $_POST['uname'] && $password == $_POST['upass']){
        $_SESSION['uname']=$username;
        // echo "Session Set";
        header("refresh:2,url=./home.php");
    }else{
        echo "<script>alert('Invalid Username & Password')</script>";
        header("refresh:2,url=./login.php");
    }
}
?>