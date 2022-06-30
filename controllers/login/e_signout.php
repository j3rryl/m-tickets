<?php
session_start();
$_SESSION=array();
session_destroy();
header('Location: /views/eorganiser/home.php');
?>