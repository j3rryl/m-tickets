<?php
require_once('../../database/functions.php');
$categories=getImages();
$current_month=date("F", strtotime('m'));
$current_year=date("Y");

// $highlights1=getHighlights(date('5'),$current_year);

$highlights1=getHighlights(5,$current_year);
$highlights2=getHighlights(6,$current_year);
$highlights3=getHighlights(7,$current_year);
$populars=getPopular();

?>
<!-- Slider -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="assets/css/home.css">
<div class="cover-page">
  <div class="host-own">
    <p>We're Hosting Our Own</p>
    <p>Wine & Whine</p>
    <p style="text-align: right;"><?php echo date('d-m-Y');?></p>
    <button><a href="#upcoming" >Buy Tickets</a></button>
  </div>
</div>
<h5 id="upcoming"><span>S</span>Upcoming</h5>

    <div class="container-1">
    <div class="swiper cube-swipe">
      <div class="swiper-wrapper">
      <?php
        foreach ($highlights1 as $highlight){;
        ?>
        <div class="swiper-slide">
        <?php
        echo '<img src="assets/images/events/'.$highlight['event_image_url'].'"'.' alt="">';
        ?>
          <div class="date">
            <?php 
            $event_date=$highlight['start_date'];
            echo '<p>'.date("d",strtotime($event_date)).'</p>
            <p>'.date("F",strtotime($event_date)).'</p>
            <p>'.date("Y",strtotime($event_date)).'</p>';
            ?>
          </div>
        </div>
        <?php 
        }
        ?>
      </div>
    </div>

    <div class="swiper cube-swipe">
      <div class="swiper-wrapper">
      <?php
        foreach ($highlights2 as $highlight){;
        ?>
        <div class="swiper-slide">
        <?php
        echo '<img src="assets/images/events/'.$highlight['event_image_url'].'"'.' alt="">';
        ?>
          <div class="date">
            <?php 
            $event_date=$highlight['start_date'];
            echo '<p>'.date("d",strtotime($event_date)).'</p>
            <p>'.date("F",strtotime($event_date)).'</p>
            <p>'.date("Y",strtotime($event_date)).'</p>';
            ?>
          </div>
        </div>
        <?php 
        }
        ?>
      </div>
    </div>

    <div class="swiper cube-swipe">
      <div class="swiper-wrapper">
      <?php
        foreach ($highlights3 as $highlight){;
        ?>
        <div class="swiper-slide">
        <?php
        echo '<img src="assets/images/events/'.$highlight['event_image_url'].'"'.' alt="">';
        ?>
          <div class="date">
            <?php 
            $event_date=$highlight['start_date'];
            echo '<p>'.date("d",strtotime($event_date)).'</p>
            <p>'.date("F",strtotime($event_date)).'</p>
            <p>'.date("Y",strtotime($event_date)).'</p>';
            ?>
          </div>
        </div>
        <?php 
        }
        ?>
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
                <div class="swiper-slide" id="categories" <?php echo "data-value=".$category['category_id'].""?>>
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
            <?php
            foreach ($populars as $popular){;
            ?>
                <div class="swiper-slide" id="popular" <?php echo "data-value=".$popular['event_id']." data-name=".$popular['event_name']." "?> >
                <?php
                echo '<img src="assets/images/events/'.$popular['event_image_url'].'"'.' alt="">';
                ?>
                </div>
            <?php
            }
            ?>
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
    <script src="/assets/js/client/slider.js"></script>
    <script src="/assets/js/client/home.js"></script>

