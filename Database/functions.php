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
?>