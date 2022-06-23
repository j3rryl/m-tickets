<?php
require_once("../../database/database.php");
require_once("../../database/functions.php");

$event_id = $_POST['event_id'];
$event=getEvent($event_id);
if (isset($_POST['event_id'])) {
    $event_name=$event['event_name'];
    $event_category_id=$event['event_category'];
    $event_category_name=$event['category_name'];
    $event_location=$event['event_location'];
    $event_price=$event['event_price'];
    $event_image=$event['event_image_url'];
    $event_description=$event['event_description'];
    $event_start_date=$event['start_date'];
    $event_end_date=$event['end_date'];

    $arrays=array(
        'success'=>'success',
        'event_name'=>$event_name,
        'event_price'=>$event_price,
        'event_image'=>$event_image,
        'event_category_id'=>$event_category_id,
        'event_category_name'=>$event_category_name,
        'event_location'=>$event_location,
        'event_description'=>$event_description,
        'event_start_date'=>$event_start_date,
        'event_end_date'=>$event_end_date
    );
    echo json_encode($arrays);
}
?>