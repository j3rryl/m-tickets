<?php
require_once('../Database/functions.php');
$events=getEvents();
?>
<?php
include ('templates/header.php');
?>
<link rel="stylesheet" href="/assets/css/events.css">
<title>Events</title>
<div class="sports">
<h5><span>S</span>Events</h5>
    <div class="filter-container">
    <?php
     foreach ($events as $event){;
    ?>
        <div class="image-container">
            <?php
                echo '<img src="/assets/images/events/'.$event['event_image_url'].'"'.' alt="">';
                // echo '<div class="date">
                // <p>10</p><p>May</p>2022<p>
                // </div>'; 
                echo '<p><a href="ticket.php?event='.$event['event_name'].'&event_id='.$event['event_id'].'">'.$event['event_name'].'</a></p>';
            ?>
        </div>
    <?php
     }
    ?>
    </div>
</div>
<?php
include ('templates/footer.php');
?>

