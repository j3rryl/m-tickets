<?php

include'connect.php';
if(isset($_GET['cancelid'])){
	$id=$_GET['cancelid']; 
	$sql="DELETE from tbl_users where user_id=$id";
	$result=mysqli_query($con,$sql);
    if($result){
    //echo "Deleted Successfully";
        header('location:users.php');
    }else{
    die(mysqli_error($con));
    }
}
?>