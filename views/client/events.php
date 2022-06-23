<?php
require_once('../../database/functions.php');
if (isset($_GET['page'])) {
    $page=$_GET['page'];
} else {
    $page=1;
}
$events_per_page=12;
$start_limit=($events_per_page*($page-1));
$end_limit=($events_per_page*$page);
$total_events=getTotalEvents();
$no_events=sizeof($total_events);
$total_pages=ceil($no_events/$events_per_page);
$events=getEvents($start_limit, $end_limit);

?>
<?php
include('../templates/header.php');
?>
<link rel="stylesheet" href="/assets/css/events.css">
<title>Events</title>
<div class="events-container">
    <div class="search-bar" style="position: relative;">
        <div class="search-box">
            <input class="search-txt" type="search" id="search-txt" name="search-text" placeholder="Type to search">
            <a class="search-btn">
                <i class="fas fa-search"></i>
            </a>
        </div>
    </div>
    <h5><span>S</span>Events</h5>
    <div class="filter-container">
        <?php
     foreach ($events as $event) {
         ; ?>
        <div class="image-container">
            <?php
                echo '<img src="/assets/images/events/'.$event['event_image_url'].'"'.' alt="">';
         $event_date=$event['start_date'];
         echo '<div class="date">
                <p>'.date("d", strtotime($event_date)).'</p>
                <p>'.date("F", strtotime($event_date)).'</p>
                <p>'.date("Y", strtotime($event_date)).'</p>
                </div>'; ?>
            <?php
                echo '<p><a href="ticket.php?event='.$event['event_name'].'&event_id='.$event['event_id'].'">'.$event['event_name'].'</a></p>'; ?>
        </div>
        <?php
     }
    ?>
    </div>
    <div class="db-pagination">
        <ul class="pagination-list">
            <?php
            for ($btn=1;$btn<=$total_pages;$btn++) {
                echo '<li class="page-number"><a class="page-number" id="'.$btn.'" href="/views/client/events.php?page='.$btn.'">'.$btn.'</a></li>';
            }
            ?>
        </ul>
    </div>
</div>
<script src="/assets/js/client/events.js"></script>

<?php
include('../templates/footer.php');
?>