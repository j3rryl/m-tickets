<?php 
require_once("../../database/database.php");
if (isset($_POST['event_id']) &&isset($_POST['total_price']) &&isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['no_tickets']) && isset($_POST['payment_method'])) {
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $tickets=$_POST['no_tickets'];
    $total_price=$_POST['total_price'];
    $payment=$_POST['payment_method'];
    $event_id=$_POST['event_id'];
    $price=$_POST['price'];

    global $conn;
    $client_id="NULL";
    if(isset($_SESSION['user_id'])){
        $client_id=$_SESSION['user_id'];
    } else {
        $client_id="NULL";
    }

    $sql="INSERT INTO tbl_ticketpurchases(client_id,event_id,payment_type,ticket_price,ticket_quantity,total_quantity,email,phone) VALUES 
    ($client_id,'$event_id','$payment','$price','$tickets','$total_price','$email','$phone')";

    if (mysqli_query($conn, $sql)) {
        $arrays=array(
            'success'=>'success',
        );
        echo json_encode($arrays);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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