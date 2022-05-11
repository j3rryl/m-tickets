<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon -->
    <link rel="icon" href="assets/images/tab-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <title>MTickets</title>
</head>
<body>
    <div class="home-container">
    <div class="container-1">
        <!-- Header -->
    <?php
    require_once 'views/includes/header.php'
    ?>
    <!-- Slider container -->
        <div class="swiper">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
            <img src="assets/images/event1.jpg" alt="">
            </div>
            <div class="swiper-slide">
            <img src="assets/images/event2.jpg" alt="">
            </div>
            <div class="swiper-slide">
            <img src="assets/images/event3.jpg" alt="">
            </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        </div>
    </div>

    <div class="container-2">
        <div class="image-container">
            <div class="box-slider">
            <img src="assets/images/event1.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- Footer -->
<?php
    require_once 'views/includes/footer.php'
    ?>
</div>

</body>
<script src="assets/js/slider.js"></script>
</html>