<?php
require_once "Models/DashboardModel.php";

function listRevenue()
{   
    $dateNow = new DateTime();
    $revenues = selectWeekRevenue();
    // $endDate = $dateNow->format('Y-m-d');
    // $startDate = $dateNow->modify('-7 day')->format('Y-m-d');
    $totalCategory = countCategory();
    $totalProduct = countProduct();
    $totalUser = countUser();
    // echo "<pre>";
    // var_dump($revenues);
    // die();
    
    include_once "Views/Dashboards/Dashboards.php";
}
function listOrderDate()
{
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $revenues = selectAllRevenue($startDate, $endDate);  
    $totalCategory = countCategory();
    $totalProduct = countProduct();
    $totalUser = countUser();
    include_once "Views/Dashboards/Dashboards.php";
}
// function listOrderDate()
// {
//     $startDate = $_POST['startDate'];
//     $endDate = $_POST['endDate'];
//     $orders = selectOrderDate($startDate, $endDate);
//     include_once "Views/Dashboards/Dashboards.php";
// }