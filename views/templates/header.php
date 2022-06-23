<?php
session_start();
if(isset($_SESSION['recents'])){
} else {
    $_SESSION['counter']=0;
    $_SESSION['recents']=array();
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon -->
    <link rel="icon" href="/assets/images/logo/tab-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/header.css">
    <title>MTickets</title>
    <!-- Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Slider -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <a href="/index.php">
            <img src="/assets/images/logo/logo.png" alt="M-Tickets logo">
            </a>
        </div>
        <ul>
            <li class="nav-item active"><a href="/index.php" id="home">Home</a></li>
            <li class="nav-item"><a href="/views/client/events.php?page=1" id="events">Events</a></li>
            <li class="nav-item"><a href="/views/client/thisweekend.php" id="weekend">This Weekend</a></li>
            <li class="nav-item"><a class="home-btn" id="more">More</a></li>
        </ul>
        <div>
        <li><a href="#">Sell</a></li>
        <button>
        <?php
        if(isset($_SESSION['first_name'])){
            echo '<a id="logout-bt" href="/controllers/login/signout.php">Log Out</a>';
        } else {
            echo '<a href="/views/login/login.php">Log In</a>';
        }
        ?>
        </button>
        </div>
    </nav>
</header>
<script src="/assets/js/client/header.js"></script>

