<?php
        $studentName = $_POST['uname']; 
        $fatherName = $_POST['fname']; 
        $motherName = $_POST['mname']; 
        $dob = $_POST['dob']; 
        $gender = $_POST['gen']; 
        $email = $_POST['email']; 
        $mobile = $_POST['mob']; 
        $address = $_POST['address']; 
        $state = $_POST['state'];
        $city = $_POST['city'];  
        $connection_detail = mysqli_connect("localhost","root","","assignmentform");
        
        if(!$connection_detail){
            die("Unable to connect");
        }
        if(isset($_POST['save'])){
        $insert_query = "INSERT INTO details(studentName,fatherName,motherName,dob,gender,email,mobile,address,state,city) 
        VALUES('$studentName','$fatherName','$motherName','$dob','$gender','$email','$mobile','$address','$state','$city')";
        if(mysqli_query($connection_detail,$insert_query)){
            echo "one record inserted successfully";
        }
        else{
            echo "unable to store the record";
        }
        }
?>