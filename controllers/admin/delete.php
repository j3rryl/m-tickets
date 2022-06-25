<?php
require_once("../../database/database.php");
if (isset($_POST['user_id'])) {
    global $conn;
    $user_id=$_POST['user_id'];
    $sql = "DELETE FROM `tbl_organizers` WHERE organizer_id=".$user_id."";

    if ($conn->query($sql) === true) {
        $arrays=array(
            'success'=>'success',
        );
        echo json_encode($arrays);
    } else {
        $arrays=array(
            'success'=>'error',
        );
        echo json_encode($arrays);
    }
} elseif (isset($_POST['ticket_id'])) {
    global $conn;
    $ticket_id=$_POST['ticket_id'];
    $sql = "DELETE FROM `tbl_ticketpurchases` WHERE ticket_id=".$ticket_id."";

    if ($conn->query($sql) === true) {
        $arrays=array(
            'success'=>'success',
        );
        echo json_encode($arrays);
    } else {
        $arrays=array(
            'success'=>'error',
        );
        echo json_encode($arrays);
    }
} elseif (isset($_POST['event_id'])) {
    global $conn;
    $event_id=$_POST['event_id'];
    $sql = "DELETE FROM `tbl_event_images` 
    WHERE tbl_event_images.event_id =$event_id";

    if ($conn->query($sql) === true) {
        $sql = "DELETE FROM `tbl_events` 
        WHERE tbl_events.event_id =$event_id";
        if ($conn->query($sql) === true) {
            $arrays=array(
                'success'=>'success',
            );
            echo json_encode($arrays);
        } else {
            $arrays=array(
                'success'=>'error',
            );
            echo json_encode($arrays);
        }
    } else {
        $arrays=array(
            'success'=>'error',
        );
        echo json_encode($arrays);
    }
} else {
    $arrays=array(
        'success'=>'error',
    );
    echo json_encode($arrays);
}
?>