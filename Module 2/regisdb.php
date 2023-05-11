<?php
    $name = $_POST['uname']; 
    $email = $_POST['email']; 
    $mob = $_POST['mob']; 
    $address = $_POST['address']; 
    $dob = $_POST['dob']; 
    $connection_detail = mysqli_connect("localhost","root","","registration");
    
    if(!$connection_detail){
        die("Unable to connect");
    }
    if(isset($_POST['save'])){
    $insert_query = "INSERT INTO regis(uname,email,mob,address,dob) VALUES('$name','$email','$mob','$address','$dob')";
    if(mysqli_query($connection_detail,$insert_query)){
        echo "one record inserted successfully";
    }
    else{
        echo "unable to store the record";
    }
    }
    if(isset($_POST['display'])){
        $display_query = "SELECT * FROM regis";
        $data = mysqli_query($connection_detail,$display_query);
        // var_dump($data);
        if(mysqli_num_rows($data)>0){
            while($new_data = mysqli_fetch_assoc($data)){
                echo "<form>";
                echo "<tr>";
                echo "<td><input type=text name=new_id readonly=true value=$new_data[id]></td>";
                echo "<td><input type=text name=new_id readonly=false value=$new_data[uname]></td>";
                echo "<td><input type=text name=new_id readonly=false value=$new_data[mob]></td>";
                echo "<td><input type=text name=new_id readonly=false value=$new_data[address]></td>";
                echo "<td><input type=text name=new_id readonly=false value=$new_data[dob]></td>";
                echo "<td><input type=submit name=update value=update></td>";
                echo "<td><input type=submit name=delete value=delete></td>";
                echo"</tr></form>";
            }
        }
        else{
            echo "No record Found";
        }
    }
?>

