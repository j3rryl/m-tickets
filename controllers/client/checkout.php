<?php
require_once("../../database/database.php");
function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
}

if (isset($_POST['event_id']) &&isset($_POST['total_price']) &&isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['no_tickets']) && isset($_POST['payment_method'])) {
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $tickets=$_POST['no_tickets'];
    $total_price=$_POST['total_price'];
    $payment=$_POST['payment_method'];
    $event_id=$_POST['event_id'];
    $event_name=$_POST['event_name'];
    $price=$_POST['price'];

    global $conn;
    $client_id="NULL";
    if (isset($_SESSION['user_id'])) {
        $client_id=$_SESSION['user_id'];
    } else {
        $client_id="NULL";
    }
    $ticket_url=generateRandomString();

    $sql="INSERT INTO tbl_ticketpurchases(client_id,event_id,payment_type,ticket_price,ticket_quantity,total_quantity,email,ticket_url,phone) VALUES 
    ($client_id,'$event_id','$payment','$price','$tickets','$total_price','$email','$ticket_url','$phone')";

    if (mysqli_query($conn, $sql)) {
        $last_id = $conn->insert_id;
        $url = "https://script.google.com/macros/s/AKfycbzVFbaYXHDg1Wxcdd85biXZT5xAkFKVA-RW23z2NJB0Y4-flQ6TmJSZFt0tH2pbhClQUg/exec";
        $ch = curl_init($url);
        curl_setopt_array($ch, [
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => $_POST['email'],
                  "subject"   => 'Ticket Purchase for '.$event_name.' event.',
                  "body"      => 'Your Ticket Number is #MT'.$last_id.'. To view your Ticket online open the link below, 
                  http://localhost:3000/views/client/receipt.php?ticket_url='.$ticket_url.' Happy Partying.'
               ])
            ]);
        $result = curl_exec($ch);
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