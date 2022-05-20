<?php
include ('templates/header.php');
require('../Database/functions.php');
$weekends=getWeekend();

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
                echo '<p>'.$weekend['event_name'].'</p>';
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
