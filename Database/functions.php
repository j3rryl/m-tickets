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
function getEvents($start_limit,$events_per_page){
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id ORDER BY tbl_events.start_date ASC 
    LIMIT '.$start_limit.','.$events_per_page.'';
    $result=mysqli_query($conn,$sql);
    $events=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $events;
}
function getTotalEvents(){
    global $conn;
    $sql='SELECT * FROM tbl_events';
    $result=mysqli_query($conn,$sql);
    $events=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $events;
}
function getHighlights($month,$year){
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE MONTH(start_date)= '.$month.'
    AND YEAR(start_date)= '.$year.'
    ORDER BY DATE(start_date) ASC';
    $result=mysqli_query($conn,$sql);
    $events=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $events;
}
function getPopular(){
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    ORDER BY tbl_events.event_likes DESC LIMIT 6';
    $result=mysqli_query($conn,$sql);
    $populars=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $populars;
}
function getCategory($category_id){
    global $conn;
    $category_id = isset($category_id) ? $category_id : $_GET['category'];
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_categories.category_id='.$category_id.'';
    $result=mysqli_query($conn,$sql);
    $categories=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $categories;
}
function getCategories($category_id){
    global $conn;
    $category_id = isset($category_id) ? $category_id : $_GET['category'];
    $sql='SELECT * FROM tbl_categories 
    WHERE tbl_categories.category_id='.$category_id.'';
    $result=mysqli_query($conn,$sql);
    $category=mysqli_fetch_assoc($result);
    return $category;
}
function getEvent($event_id){
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_events.event_id='.$event_id.'';
    $result=mysqli_query($conn,$sql);
    $event=mysqli_fetch_array($result);
    return $event;
}
function getSearch($search_text){
    // $search_text=$_POST['search-text'];
    global $conn;
    if($search_text==''){
        $sql='SELECT * FROM tbl_events INNER JOIN 
        tbl_categories
        ON tbl_events.event_category = tbl_categories.category_id JOIN 
        tbl_event_images
        ON tbl_event_images.event_id = tbl_events.event_id';
        $result=mysqli_query($conn,$sql);
        $search=mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $search;  
    } else {
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_events.event_name LIKE "%'.$search_text.'%" ';
    $result=mysqli_query($conn,$sql);
    $search=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $search;
    }
}
function getWeekend($we_start,$we_end){
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE UNIX_TIMESTAMP(tbl_events.start_date) between '.$we_start.' and '.$we_end.' 
    ORDER BY tbl_events.start_date ASC';
    $result=mysqli_query($conn,$sql);
    $weekend=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $weekend;
}
?>