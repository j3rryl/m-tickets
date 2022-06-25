<?php
session_start();
require_once("../../database/database.php");
if (isset($_POST['email']) && isset($_POST['password'])) {
    // function validate($data){
    //    $data = trim($data);
    //    $data = stripslashes($data);
    //    $data = htmlspecialchars($data);
    //    return $data;
    // }

    $email = $_POST['email'];
    $pass = $_POST['password'];
    //1
    global $conn;
    $sql = "SELECT * FROM tbl_users WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] === $email && $row['password'] === $pass) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['user_id'] = $row['user_id'];
            //Success
            $success='success';
            $arrays=array(
                    'success'=>'success'
                );
            echo json_encode($arrays);
        } else {
            //Incorrect password / username
            $arrays=array(
                    'success'=>'error'
                );
            echo json_encode($arrays);
        }
    } else {
        //Incorrect password/ username
        $arrays=array(
                'success'=>'error'
            );
        echo json_encode($arrays);
    }
}
?>