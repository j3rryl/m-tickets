<?php
require_once('../../database/functions.php');
$sports=getSports();
$categories=getCategory($_POST["category_id"]);
$category_name=getCategories($_POST["category_id"]);
?>
<link rel="stylesheet" href="/assets/css/events.css">
<link rel="stylesheet" href="/assets/css/category.css">

<title><?php echo $category_name['category_name']?></title>
<div class="events-container">
    <h5><span>S</span><?php echo $category_name['category_name']?></h5>
    <div class="filter-container">
        <?php
     foreach ($categories as $category) {
        ?>
        <div class="image-container">
            <?php
                echo '<img src="/assets/images/events/'.$category['event_image_url'].'"'.' alt="">';
         $event_date=$category['start_date'];
         echo '<div class="date">
                <p>'.date("d", strtotime($event_date)).'</p>
                <p>'.date("F", strtotime($event_date)).'</p>
                <p>'.date("Y", strtotime($event_date)).'</p>
                </div> ';
         echo '<p><a href="ticket.php?event='.$category['event_name'].'&event_id='.$category['event_id'].'">'.$category['event_name'].'</a></p>'; 
        ?>
        </div>
        <?php
     }
    ?>
    </div>
</div>