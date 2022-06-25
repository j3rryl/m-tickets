<?php
require_once("../../database/database.php");
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $firstname="Sample";
    $lastname="Lastss";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    global $conn;
    $sql = "SELECT * FROM tbl_users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $arrays=array(
            'success'=>'error',
        );
        echo json_encode($arrays);
    } else {
        global $conn;
        $sql=$conn->prepare('INSERT INTO tbl_users(first_name,last_name,username,email,password)
        values(?,?,?,?,?)');
        $sql->bind_param("sssss", $firstname, $lastname, $username, $email, $pass);
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