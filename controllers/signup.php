
<?php 
session_start(); 
require_once("../Database/database.php");
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
echo "there now";
}
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $firstname="Sample";
    $lastname="Lastss";
    $username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
        //1
	if (empty($email)) {
		// header("Location: /index.php?error=User Name is required");
	    exit();
	} else if(empty($pass)){
        // header("Location: index.php?error=Password is required");
	    exit();
	} else {
        global $conn;
        $sql=$conn->prepare('INSERT INTO tbl_users(first_name,last_name,username,email,password)
        values(?,?,?,?,?)');
        $sql->bind_param("sssss",$firstname,$lastname,$username,$email,$pass);
        $sql->execute();
        echo "Success";
        $sql->close(); 
        header("Location: /index.php");

	} 
} 
?>