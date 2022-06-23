<?php
require_once('../../database/functions.php');
$categories=getImages();
$current_month=date("F", strtotime('m'));
$current_year=date("Y");

// $highlights1=getHighlights(date('5'),$current_year);

$highlights1=getHighlights(5, $current_year);
$highlights2=getHighlights(6, $current_year);
$highlights3=getHighlights(7, $current_year);
$populars=getPopular();

?>
<!-- Slider -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="assets/css/home.css">
<?php
    $inactive = 1800; //30 minutes in seconds...
    ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours
    session_start();
    if (isset($_SESSION['time']) && (time() - $_SESSION['time'] > $inactive)) {
        // last request was more than 2 hours ago
        session_unset();     // unset $_SESSION variable for this page
        session_destroy();   // destroy session data
    }
    $_SESSION['time'] = time(); // Update session
      ?>
<div class="cover-page">
    <div class="host-own">
        <p>We're Hosting Our Own</p>
        <p>
            Wine & Whine</p>
        <p style="text-align: right;"><?php echo date('d-m-Y');?></p>
        <button><a href="#upcoming">Buy Tickets</a></button>
    </div>
</div>
<h5 id="upcoming"><span>S</span>Upcoming</h5>

<div class="container-1">
    <div class="swiper cube-swipe">
        <div class="swiper-wrapper">
            <?php
        foreach ($highlights1 as $highlight) {
            ; ?>
            <div class="swiper-slide">
                <?php
        echo '<img src="assets/images/events/'.$highlight['event_image_url'].'"'.' alt="">'; ?>
                <div class="date">
                    <?php
            $event_date=$highlight['start_date'];
            echo '<p>'.date("d", strtotime($event_date)).'</p>
            <p>'.date("F", strtotime($event_date)).'</p>
            <p>'.date("Y", strtotime($event_date)).'</p>'; ?>
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
        foreach ($highlights2 as $highlight) {
            ; ?>
            <div class="swiper-slide">
                <?php
        echo '<img src="assets/images/events/'.$highlight['event_image_url'].'"'.' alt="">'; ?>
                <div class="date">
                    <?php
            $event_date=$highlight['start_date'];
            echo '<p>'.date("d", strtotime($event_date)).'</p>
            <p>'.date("F", strtotime($event_date)).'</p>
            <p>'.date("Y", strtotime($event_date)).'</p>'; ?>
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
        foreach ($highlights3 as $highlight) {
            ; ?>
            <div class="swiper-slide">
                <?php
        echo '<img src="assets/images/events/'.$highlight['event_image_url'].'"'.' alt="">'; ?>
                <div class="date">
                    <?php
            $event_date=$highlight['start_date'];
            echo '<p>'.date("d", strtotime($event_date)).'</p>
            <p>'.date("F", strtotime($event_date)).'</p>
            <p>'.date("Y", strtotime($event_date)).'</p>'; ?>
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
              foreach ($categories as $category) {
                  ; ?>
            <div class="swiper-slide" id="categories" <?php echo "data-value=".$category['category_id'].""?>>
                <?php
                echo '<img src="assets/images/categories/'.$category['image_url'].'"'.' alt="">';
                  echo '<h5>'.$category['category_name'].'</h5>'; ?>
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
            foreach ($populars as $popular) {
                ; ?>
            <div class="swiper-slide" id="popular"
                <?php echo "data-value=".$popular['event_id']." data-name=".$popular['event_name']." "?>>
                <?php
                echo '<img src="assets/images/events/'.$popular['event_image_url'].'"'.' alt="">'; ?>
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
    <?php
      if (empty($_SESSION['recents'])) {
          ?>
    <p class="jump">No recently viewed activities.</p>
    <?php
      } else {
          ?>
    <p class="jump">Jump Right Back In</p>
    <?php
      }
      ?>
    <div class="events-container">
        <?php
      if (!empty($_SESSION['recents'])) {
          $recent_id=$_SESSION['recents'][0];
          $recents=getEvent($recent_id);
          $recent_id1=$_SESSION['recents'][0];
          if (sizeof(($_SESSION['recents']))>1) {
              $recent_id2=$_SESSION['recents'][1];
              $recents2=getEvent($recent_id2);
          }

          $recents1=getEvent($recent_id1); ?>
        <div class="event-recent" id="recent1"
            <?php echo "data-value=".$recents1['event_id']." data-name=".$recents1['event_name']." "?>>
            <div class="event-profile">
                <?php
              echo '<img src="assets/images/events/'.$recents1['event_image_url'].'"'.' alt="">'; ?>
            </div>
            <div class="event-title">
                <h4 style="text-transform: capitalize;"><?php echo $recents['event_name']?></h4>
            </div>
        </div>
        <?php
        if (sizeof(($_SESSION['recents']))>1) {
            ?>
        <div class="event-recent" id="recent2"
            <?php echo "data-value=".$recents2['event_id']." data-name=".$recents2['event_name']." "?>>
            <div class="event-profile">
                <?php
              echo '<img src="assets/images/events/'.$recents2['event_image_url'].'"'.' alt="">'; ?>
            </div>
            <div class="event-title">
                <h4 style="text-transform: capitalize;"><?php echo $recents2['event_name']?></h4>
            </div>
        </div>
        <?php
        }
      }
      ?>
    </div>

</div>
<script src="/assets/js/client/slider.js"></script>
<script src="/assets/js/client/home.js"></script>