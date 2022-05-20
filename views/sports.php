<?php
include ('templates/header.php');
require_once('../Database/functions.php');
$sports=getSports();
?>
<link rel="stylesheet" href="/assets/css/sports.css">
<title>Sports</title>
<div class="sports">
<h5><span>S</span>Sports</h5>
    <div class="filter-container">
    <?php
     foreach ($sports as $sport){;
    ?>
        <div class="image-container">
            <?php
                echo '<img src="/assets/images/events/'.$sport['event_image_url'].'"'.' alt="">';
                echo '<p><a href="ticket.php">'.$sport['event_name'].'</a></p>';
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
