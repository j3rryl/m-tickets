<?php
require ('../../database/functions.php');
$ticket_url='OiKY6sfd4M';
$receipt=getReceipt($ticket_url);
print_r($receipt);
// function generateRandomString($length = 10) {
//     return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
// }

// echo  generateRandomString();
?>