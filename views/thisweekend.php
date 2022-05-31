<?php
include ('templates/header.php');
require('../Database/functions.php');
$we_start=strtotime('next saturday');
$we_end=strtotime('next monday')-1;
$weekends=getWeekend($we_start,$we_end);
?>

<link rel="stylesheet" href="/assets/css/sports.css">
<title>This Weekend</title>
<div class="sports">
<h5><span>S</span>This Weekend</h5>
    <div class="filter-container">
    <?php
     foreach ($weekends as $weekend){;
    ?>
        <div class="image-container">
            <?php
                echo '<img src="/assets/images/events/'.$weekend['event_image_url'].'"'.' alt="">';
                echo '<p><a href="ticket.php?event='.$weekend['event_name'].'&event_id='.$weekend['event_id'].'">'.$weekend['event_name'].'</a></p>';
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
