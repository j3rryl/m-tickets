<?php 
require_once("../../database/database.php");;
if (isset($_POST['event_name']) && isset($_POST['event_category']) && isset($_POST['event_location'])isset($_POST['event_price']) && isset($_POST['event_description']) && isset($_POST['event_start_date']) && isset($_POST['event_end_date'])) {
    $event_name = $_POST['event_name'];
	$event_category = $_POST['event_category'];
	$event_location = $_POST['event_location'];
    $event_price = $_POST['event_price'];
    $event_image = $_POST['event_image'];
	$event_description = $_POST['event_description'];
	$event_start_date = $_POST['event_start_date'];
    $event_end_date = $_POST['event_end_date'];
    global $conn;

    $sql = "SELECT * FROM tbl_events WHERE event_name='$event_name'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $arrays=array(
            'success'=>'error',
        );
        echo json_encode($arrays);
    } else {
        global $conn;
        $sql=$conn->prepare('INSERT INTO tbl_events(event_category,event_name,event_location,event_price,event_description,event_start_date,event_end_date)
        VALUES(?,?,?,?,?,?,?)');
        $sql->bind_param("sssssss",$event_category,$event_name,$event_location,$event_price,$event_description,$event_start_date,$event_end_date);
        $sql->execute();
        $sql->close(); 
        $arrays=array(
            'success'=>'success',
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