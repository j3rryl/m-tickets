<?php 
    session_start();
	if(!ISSET($_SESSION['email'])){
		header('location:/views/login/eorganiser/login_signup.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/assets/images/logo/tab-icon.png">
        <script src="https://kit.fontawesome.com/095af53895.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/css/eorg/header.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

        <title>MTickets</title>
</head>
<body>
    <nav>
        <div class="logo"></div>
        <div class="section">
            <ul class="items">
                <li><a href="../eorganiser/home.php">Home</a></li>
                <li><a href="../eorganiser/event.php">Events</a></li>
                <li><a href="../eorganiser/track.php">Activity</a></li>
                <li><i class="fa-regular fa-user"></i>
                    <?php
				        require'../../database/database.php';
                        $query = mysqli_query($conn, "SELECT * FROM `tbl_organizers` WHERE `email`='$_SESSION[email]'") or die(mysqli_error($conn));
				        $fetch = mysqli_fetch_array($query);
				        echo $fetch['username'];
                    ?>
                </li>
            </ul>
        </div>
    </nav>