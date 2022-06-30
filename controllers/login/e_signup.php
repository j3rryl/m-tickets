<?php
    require_once("../../database/database.php");
    
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $epass = ($pass);

        $query = "INSERT INTO tbl_users(first_Name, last_Name, username, email, password) VALUES ('$fname', '$lname','$fname', '$email', '$epass')";

        $sql=mysqli_query($conn,$query);
        if($sql){
            echo "done"; // for ajax manipulation
        }
        else{
            echo "error";
        }
    
    
?>