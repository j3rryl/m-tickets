<?php
require_once("../../database/database.php");
if (isset($_POST['email']) && isset($_POST['password'])) {
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pin = $_POST['pin'];
    global $conn;
    $sql = "SELECT * FROM tbl_organizers WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $arrays=array(
            'success'=>'exists',
        );
        echo json_encode($arrays);
    } else {
        global $conn;
        $sql=$conn->prepare('INSERT INTO tbl_organizers(first_name,last_name,email,phone_number,identification,password)
        values(?,?,?,?,?,?)');
        $sql->bind_param("ssssss", $firstname, $lastname, $email, $phone, $pin, $pass);
        $sql->execute();
        $sql->close();
        $arrays=array(
            'success'=>'success',
        );
        echo json_encode($arrays);
    }
} if (isset($_POST['event_name'])) {
    $event=$_POST['event_name'];
    $image=$_POST['image_name'];
    $image_path=$_POST['image_path'];
    $event_category = $_POST['event_category'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $start_date = $_POST['event_start_date'];
    $end_date = $_POST['event_end_date'];
    $description = $_POST['description'];
    
    // $event_start_date=date($start_date, strtotime($user_input);

    global $conn;
    $sql = "INSERT INTO tbl_events (event_category, event_name, event_location, 
    event_price,event_description, start_date, end_date)
    VALUES ($event_category, '$event', '$location',$price,
    '$description','$start_date','$end_date')";
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
} else {
    $arrays=array(
        'success'=>'empty',
    );
    echo json_encode($arrays);
}
?>