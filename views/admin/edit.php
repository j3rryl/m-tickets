 <?php
 include'connect.php';
 $id=$_GET['editid'];
  if (isset($_POST['edit'])) {
  	$first_name=$_POST['first_name'];
  	$last_name=$_POST['last_name'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];
    $role=$_POST['role'];
  }

 $sql="update 'oops' set id=$id,first_name=$first_name,last_name=$last_name,email=$email,password=$password,role=$role";
$result=mysqli_query($con,$sql);
if ($result){
	//echo "Data inserted successfully";

}
else{
	die(mysqli_error($con));
}

?>