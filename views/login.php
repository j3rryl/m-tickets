

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="icon" href="/assets/images/tab-icon.png">

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

    <title>Log In</title>
</head>
<body>
<div class="login-container">
    <form action="/controllers/login.php" method="POST" class="login-container">
        <h5>Sign Into your Account</h5>
        <label for="email">Username</label><br />
        <input type="text" name="email" class=""><br />
        <label for="password">Password</label><br />
        <input type="password" name="password" id=""><br />
        <button type="submit" onclick="login()"><a>Sign In</a></button><br />
        <a class="sign-up" href="/views/signup.php">Create an Account?</a>
        <br/><br/>
    </form>
</div>
    
</body>
</html>

