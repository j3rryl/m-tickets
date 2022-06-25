<?php
require_once('database.php');
function getPayments()
{
    global $conn;
    $sql='SELECT * FROM tbl_payment';
    $result=mysqli_query($conn, $sql);
    $payments=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $payments;
}
function getImages()
{
    global $conn;
    $sql='SELECT * FROM tbl_categories INNER JOIN 
    tbl_category_images 
    ON tbl_categories.category_id = tbl_category_images.category_id';
    $result=mysqli_query($conn, $sql);
    $categories=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}
function getSports()
{
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_categories.category_id=7';
    $result=mysqli_query($conn, $sql);
    $sports=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $sports;
}

function getEvents($start_limit, $events_per_page)
{
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id ORDER BY tbl_events.start_date ASC 
    LIMIT '.$start_limit.','.$events_per_page.'';
    $result=mysqli_query($conn, $sql);
    $events=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $events;
}
function getEventOrganizerSales()
{
    global $conn;
    $result = mysqli_query($conn, 'SELECT *,SUM(total_quantity) AS value_sum FROM tbl_ticketpurchases INNER JOIN 
    tbl_events
    ON tbl_ticketpurchases.event_id = tbl_events.event_id JOIN 
    tbl_organizers
    ON tbl_organizers.organizer_id = tbl_events.added_by 
    GROUP BY organizer_id');
    // $row = mysqli_fetch_assoc($result);
    $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
    // // $sum = $row['value_sum'];
    return $row;
}
function getTotalRevenue()
{
    global $conn;
    $result = mysqli_query($conn, 'SELECT SUM(total_quantity) AS value_sum FROM tbl_ticketpurchases');
    $row = mysqli_fetch_assoc($result);
    $sum = $row['value_sum'];
    return $sum;
}
function getTotalEvents()
{
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id';
    $result=mysqli_query($conn, $sql);
    $events=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $events;
}
function getTicketPurchases()
{
    global $conn;
    $sql='SELECT * FROM tbl_ticketpurchases INNER JOIN 
    tbl_events
    ON tbl_ticketpurchases.event_id = tbl_events.event_id JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id';
    $result=mysqli_query($conn, $sql);
    $purchases=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $purchases;
}
function getHighlights($month, $year)
{
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE MONTH(start_date)= '.$month.'
    AND YEAR(start_date)= '.$year.'
    ORDER BY DATE(start_date) ASC';
    $result=mysqli_query($conn, $sql);
    $events=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $events;
}
function getPopular()
{
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    ORDER BY tbl_events.event_likes DESC LIMIT 6';
    $result=mysqli_query($conn, $sql);
    $populars=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $populars;
}
function getCategory($category_id)
{
    global $conn;
    $category_id = isset($category_id) ? $category_id : $_GET['category'];
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_categories.category_id='.$category_id.'';
    $result=mysqli_query($conn, $sql);
    $categories=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}
function getCategories($category_id)
{
    global $conn;
    $category_id = isset($category_id) ? $category_id : $_GET['category'];
    $sql='SELECT * FROM tbl_categories 
    WHERE tbl_categories.category_id='.$category_id.'';
    $result=mysqli_query($conn, $sql);
    $category=mysqli_fetch_assoc($result);
    return $category;
}
//I added tbl_categories JOIN...incase of any errors...
function getEvent($event_id)
{
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_events.event_id='.$event_id.'';
    $result=mysqli_query($conn, $sql);
    $event=mysqli_fetch_array($result);
    return $event;
}
function getReceipt($ticket_url)
{
    global $conn;
    $sql='SELECT * FROM tbl_ticketpurchases INNER JOIN 
    tbl_events
    ON tbl_ticketpurchases.event_id = tbl_events.event_id JOIN
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id JOIN
    tbl_payment
    ON tbl_ticketpurchases.payment_type = tbl_payment.payment_id
    WHERE tbl_ticketpurchases.ticket_url LIKE "%'.$ticket_url.'%"';
    $result=mysqli_query($conn, $sql);
    $ticket=mysqli_fetch_array($result);
    return $ticket;
}
function getSearch($search_text)
{
    // $search_text=$_POST['search-text'];
    global $conn;
    if ($search_text=='') {
        $sql='SELECT * FROM tbl_events INNER JOIN 
        tbl_categories
        ON tbl_events.event_category = tbl_categories.category_id JOIN 
        tbl_event_images
        ON tbl_event_images.event_id = tbl_events.event_id';
        $result=mysqli_query($conn, $sql);
        $search=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $search;
    } else {
        $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_categories
    ON tbl_events.event_category = tbl_categories.category_id JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE tbl_events.event_name LIKE "%'.$search_text.'%" ';
        $result=mysqli_query($conn, $sql);
        $search=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $search;
    }
}
function getUsers()
{
    global $conn;
    $sql='SELECT * FROM tbl_users';
    $result=mysqli_query($conn, $sql);
    $users=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users;
}
function getWeekend($we_start, $we_end)
{
    global $conn;
    $sql='SELECT * FROM tbl_events INNER JOIN 
    tbl_event_images
    ON tbl_event_images.event_id = tbl_events.event_id
    WHERE UNIX_TIMESTAMP(tbl_events.start_date) between '.$we_start.' and '.$we_end.' 
    ORDER BY tbl_events.start_date ASC';
    $result=mysqli_query($conn, $sql);
    $weekend=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $weekend;
}
function getEventOrganizers()
{
    global $conn;
    $sql='SELECT * FROM tbl_organizers';
    $result=mysqli_query($conn, $sql);
    $organizers=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $organizers;
}
?>