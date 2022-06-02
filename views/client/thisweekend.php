<?php
include ('../templates/header.php');
require('../../database/functions.php');
$we_start=strtotime('next saturday');
$we_end=strtotime('next monday')-1;
$event_date=
$weekends=getWeekend($we_start,$we_end);
?>

<link rel="stylesheet" href="/assets/css/events.css">
<link rel="stylesheet" href="/assets/css/weekend.css">

<title>This Weekend</title>
<div class="events-container">
<h5><span>S</span>This Weekend</h5>
    <div class="filter-container">
    <?php
     foreach ($weekends as $weekend){
    ?>
        <div class="image-container">
            <?php
                echo '<img src="/assets/images/events/'.$weekend['event_image_url'].'"'.' alt="">';
                $event_date=$weekend['start_date'];
                echo '<div class="date">
                <p>'.date("d",strtotime($event_date)).'</p>
                <p>'.date("F",strtotime($event_date)).'</p>
                <p>'.date("Y",strtotime($event_date)).'</p>
                </div>';
                echo '<p><a href="ticket.php?event='.$weekend['event_name'].'&event_id='.$weekend['event_id'].'">'.$weekend['event_name'].'</a></p>';
            ?>
        </div>
    <?php
     }
    ?>
    </div>
</div>
<script src="/assets/js/client/weekend.js"></script>
<?php
include ('../templates/footer.php');
?>
