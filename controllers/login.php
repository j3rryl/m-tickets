<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<?php 
session_start(); 
require_once("../Database/database.php");
if (isset($_POST['email']) && isset($_POST['password'])) {
	// function validate($data){
    //    $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
	// }

	$email = $_POST['email'];
	$pass = $_POST['password'];
        //1
    global $conn;
    $sql = "SELECT * FROM tbl_users WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['user_id'] = $row['user_id'];
                //Success
                header("Location: /index.php");
            } else {
                //Incorrect password / username
                // header("Location: /views/login.php?error=Incorect email or password");
                echo " 
                <script>
                alert('Incorrect username or password');
                    function login(){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success('Log In Successful.');
                    }
                </script>
                "; 
            }
        } else {
            //Incorrect password/ username
            header("Location: /views/login.php?error=Incorect email or password");
            echo " 
                <script>
                    alertify.set('notifier','position', 'top-right');
                    alertify.success('Log In Successful.');
                </script>
                ";
        }	 
} 
?>