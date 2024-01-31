<?php
require_once "Models/DashboardModel.php";

function listOrder()
{   
    $orders = selectAllOrder();
    include_once "Views/Dashboards/Dashboards.php";
}

// function listOrderDate()
// {
//     $startDate = $_POST['startDate'];
//     $endDate = $_POST['endDate'];
//     $orders = selectOrderDate($startDate, $endDate);
//     include_once "Views/Dashboards/Dashboards.php";
// }