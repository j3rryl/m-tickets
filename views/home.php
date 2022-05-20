<?php
require_once('./Database/functions.php');
$categories=getImages();
?>
<!-- Slider -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="assets/css/home.css">
<h5><span>S</span>Upcoming</h5>

    <div class="container-1">
    <div class="swiper cube-swipe">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/images/events/riara.png" />
          <div class="date">
              <p>10</p><p>May</p>2022<p>
          </div>
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>10</p><p>May</p>2022<p>
          </div>
          <img src="assets/images/events/aqua.jpeg" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>17</p><p>May</p>2022<p>
          </div>
          <img src="assets/images/events/bbq.jpeg" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>27</p><p>May</p>2022<p>
          </div>
          <img src="assets/images/events/carnivore.jpeg" />
        </div>
      </div>
    </div>

    <div class="swiper cube-swipe">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="date">
              <p>1</p><p>June</p>2022<p>
          </div>
          <img src="assets/images/events/comedynight.jpeg" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>7</p><p>June</p>2022<p>
          </div>
          <img src="assets/images/events/epic.jpeg" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>17</p><p>June</p>2022<p>
          </div>
          <img src="assets/images/events/golf.jpeg" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>27</p><p>June</p>2022<p>
          </div>
          <img src="assets/images/events/hell.jpeg" />
        </div>
      </div>
    </div>

    <div class="swiper cube-swipe">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="date">
              <p>6</p><p>July</p>2022<p>
          </div>
          <img src="assets/images/events/hunter.jpeg" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>8</p><p>July</p>2022<p>
          </div>
          <img src="assets/images/events/mirror.png" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>20</p><p>July</p>2022<p>
          </div>
          <img src="assets/images/events/ngugi.jpeg" />
        </div>
        <div class="swiper-slide">
        <div class="date">
              <p>27</p><p>July</p>2022<p>
          </div>
          <img src="assets/images/events/sidebar.jpeg" />
        </div>
      </div>
    </div>
    </div>
    
    <h5><span>S</span>Categories</h5>
    <div class="container-2">
        <div class="swiper categories">
            <div class="swiper-wrapper">
              <?php
              foreach ($categories as $category){;
              ?>
                <div class="swiper-slide">
                <?php
                echo '<img src="assets/images/categories/'.$category['image_url'].'"'.' alt="">';
                echo '<h5>'.$category['category_name'].'</h5>';
                ?>
                </div>
                <?php 
                }
                ?>
            </div>
        <div class="swiper-pagination"></div>
        </div>
    </div>

    <h5><span>S</span>Popular Events</h5>
    <div class="container-2">
        <div class="swiper categories">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <img src="assets/images/events/allblack.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                <img src="assets/images/events/bark.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                <img src="assets/images/events/hanye.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                <img src="assets/images/events/voices.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                <img src="assets/images/events/wedding.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                <img src="assets/images/events/wine.jpeg" alt="">
                </div>
            </div>
        <div class="swiper-pagination"></div>
        </div>
    </div>
    <h5>Recently Viewed</h5>
    <div class="recently">
    <p class="jump">Jump Right Back In</p>
    <div class="events-container">
        <div class="event-recent">
            <div class="event-profile">
                <img src="assets/images/events/wrc.jpeg" alt="">
            </div>
            <div class="event-title">
                <h4>WRC</h4>
            </div>
        </div>

        <div class="event-recent">
            <div class="event-profile">
                <img src="assets/images/events/hell.jpeg" alt="">
            </div>
            <div class="event-title">
                <h4>Hell's Advocate</h4>
            </div>
        </div>
        </div>

    </div>