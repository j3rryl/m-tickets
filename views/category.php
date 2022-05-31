<?php
require_once('../Database/functions.php');
$sports=getSports();
$categories=getCategory($_POST["category_id"]);
$category_name=getCategories($_POST["category_id"]);
?>
<link rel="stylesheet" href="/assets/css/sports.css">
<title>Sports</title>
<div class="sports">
<h5><span>S</span><?php echo $category_name['category_name']?></h5>
    <div class="filter-container">
    <?php
     foreach ($categories as $category){;
    ?>
        <div class="image-container">
            <?php
                echo '<img src="/assets/images/events/'.$category['event_image_url'].'"'.' alt="">';
                echo '<p><a href="ticket.php?event='.$category['event_name'].'&event_id='.$category['event_id'].'">'.$category['event_name'].'</a></p>';
            ?>
        </div>
    <?php
     }
    ?>
    </div>
</div>

