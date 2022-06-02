<?php
$search_text=$_POST['search_text'];
require_once('../../database/functions.php');
$events=getSearch($search_text);
?>
<div class="search-results filter-container">
<?php
if(empty($events)){
    echo "<h5 style='text-align: center;'>Sorry, no relevant events found from your search.</h5>";
} else {
    foreach ($events as $event){;
    ?>
<div class="image-container">
    <?php
        echo '<img src="/assets/images/events/'.$event['event_image_url'].'"'.' alt="">';
        $event_date=$event['start_date'];
        echo '<div class="date">
        <p>'.date("d",strtotime($event_date)).'</p>
        <p>'.date("F",strtotime($event_date)).'</p>
        <p>'.date("Y",strtotime($event_date)).'</p>
        </div>';
    ?>
        <?php
        echo '<p><a href="ticket.php?event='.$event['event_name'].'&event_id='.$event['event_id'].'">'.$event['event_name'].'</a></p>';
    ?>
        </div>
    <?php
     }
}
?>
</div>