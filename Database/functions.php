<?php
require_once ('database.php');

function getImages(){
    global $conn;
    $sql='SELECT * FROM tbl_categories INNER JOIN 
    tbl_category_images 
    ON tbl_categories.category_id = tbl_category_images.category_id';
    $result=mysqli_query($conn,$sql);
    $categories=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $categories;
}
function getSports(){
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_categories.category_id=7';
    $result=mysqli_query($conn,$sql);
    $sports=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $sports;
}
function getWeekend(){
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_events.start_date between "2022-05-20 12:00:00" and "2022-05-22 23:30:00"';
    $result=mysqli_query($conn,$sql);
    $weekend=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $weekend;
}
?>