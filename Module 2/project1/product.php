<?php
    session_start();
    if(isset($_SESSION['uname'])){
        echo "Welcome to Product Page";
        echo "<h1>Hello</h1>" .$_SESSION['uname'];
        echo "<br><a href=home.php>Click Here for Products</a>";
        echo "<br><a href=about.php>Click Here to About</a>";
        echo "<br><button><a href=logout.php style='text-decoration:none;'>Logout</a>";
    }
    else{
        header("refresh:0,url=login.php");
    }
?>