<?php
require_once('../../database/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/signup.css">
    <link rel="icon" href="/assets/images/logo/tab-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    <title>Sign Up</title>
</head>

<body>
    <div class="signup-container">
        <form class="form-container" method="POST">
            <h5>Create An Account</h5>
            <p>Create a free mticket account in order to use all features related to event organizers</p>
            <label for="username">Username</label><br />
            <input type="text" name="username" id="username" placeholder="Enter Username"><br />
            <label for="email">Email Address</label><br />
            <input type="email" class="" name="email" id="email" placeholder="Email Address"><br />
            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" placeholder="Password">
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
            <label for="cpassword">Confirm Password</label><br />
            <input type="password" name="cpassword" id="" placeholder="Confirm Password"><br />
            <button type="button" id="register-btn"><a>Create Account</a></button><br />

            <a class="sign-in" href="/views/login/login.php">Sign In?</a>
            <br /><br />

        </form>
    </div>
</body>
<script src="/assets/js/login/pchecker.js"></script>
<script src="/assets/js/login/logins.js"></script>

</html>