<?php 
require_once("../../database/database.php");
if (isset($_POST['event_name'])) {
    $event=$_POST['event_name'];
    $image=$_POST['image_name'];
    $image_path=$_POST['image_path'];
    $event_category = $_POST['event_category'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $start_date = $_POST['event_start_date'];
    $end_date = $_POST['event_end_date'];
    $description = $_POST['description'];
    $added_by=$_POST['eorg_id'];
    
    // $event_start_date=date($start_date, strtotime($user_input);

    global $conn;
    $sql = "INSERT INTO tbl_events (event_category, event_name, event_location, 
    event_price,event_description,added_by, start_date, end_date)
    VALUES ($event_category, '$event', '$location',$price,
    '$description',$added_by,'$start_date','$end_date')";
    if ($conn->query($sql) === true) {
        $last_id = $conn->insert_id;
        $sql = "INSERT INTO tbl_event_images (event_id,event_image_url)
        VALUES ($last_id, '$image')";
        if ($conn->query($sql) === true) {
            $arrays=array(
                'success'=>'success',
            );
            echo json_encode($arrays);
        }
    } else {
        $arrays=array(
            'success'=>'success',
        );
        echo json_encode($arrays);
    }
}

?>

