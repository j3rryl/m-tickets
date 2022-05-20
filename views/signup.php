<?php
require_once('../Database/database.php');
// if(isset($_POST['username'])){
//     $email=$_POST['username'];
//     $password=$_POST['password'];
    
//     $sql="select * from tbl_users where email='".$email."'AND password='".$password."' limit 1";
    
//     $result=mysql_query($sql);
    
//     if(mysql_num_rows($result)==1){
//         echo " You Have Successfully Logged in";
//         exit();
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/signup.css">
    <link rel="icon" href="/assets/images/tab-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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

    <title>Sign Up</title>
</head>
<body>
<div class="signup-container">
    <form class="form-container" method="POST" action="/controllers/signup.php">
        <h5>Create An Account</h5>
        <p>Create a free mticket account in order to use all features related to event organizers</p>
        <label for="username">Username</label><br/>
        <input type="text" name="username" placeholder="Enter Username"><br/>
        <label for="email">Email Address</label><br/>
        <input type="email" class="" name="email" placeholder="Email Address" ><br/>
        <label for="password">Password</label><br/>
        <input type="password" name="password" id="password" placeholder="Password" >
        <div class="password-requirements" id="password-requirements">
            <p style="font-weight: 700;">Your password must</p>
            <div class="style-check">
            <i class="fas fa-check-circle" id="characters"></i>
            <p>Contain at least 8 characters</p>
            </div>
            <div class="style-check">
            <i class="fas fa-check-circle" id="letter"></i>
            <p>Include a letter</p>
            </div>
            <div class="style-check">
            <i class="fas fa-check-circle" id="number"></i>
            <p>Include a number</p>
            </div>
        </div>
        <label for="cpassword">Confirm Password</label><br/>
        <input type="password" name="cpassword" id="" placeholder="Confirm Password"><br/>
        <button type="submit" onclick="signup()"><a>Create Account</a></button><br />

        <a class="sign-in" href="/views/login.php">Sign In?</a>
        <br/><br/>

    </form>
</div>
</body>
<script src="/assets/js/pchecker.js"></script>
<script>
    function signup(){
        alertify.set('notifier','position', 'top-right');
 alertify.success('Registration Successful. Log In to Access Your Account.');
    }
</script>
</html>
