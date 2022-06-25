<?php
require_once("../../database/database.php");
require_once("../../database/functions.php");
$chart_select=$_POST['chart_select'];
$users=getTicketPurchases();
$eorg=getEventOrganizerSales();

if (isset($_POST['chart_select'])) {
    if ($chart_select=='users') {
        $arrays=array(
            'success'=>'users',
            'users'=>$users
        );
        echo json_encode($arrays);
    }
    if ($chart_select=='categories') {
        $arrays=array(
            'success'=>'categories',
            'users'=>$users
        );
        echo json_encode($arrays);
    }
    if ($chart_select=='eorg') {
        $arrays=array(
            'success'=>'eorg',
            'users'=>$eorg
        );
        echo json_encode($arrays);
    }
}
?>