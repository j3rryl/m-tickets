<?php 
    require_once("../../database/database.php");
    $email = $_POST['email'];
    $sql = "SELECT email FROM tbl_organizers WHERE email = '$email'";
    $result = mysqli_query($sql);
    $numrows  = mysql_num_rows($result);
    if($numrows >= 1){
        echo "taken"; // for ajax manipulation
    }
    else{
        echo "not taken";
    }
?>