<?php
require_once "Models/DashboardModel.php";

function listOrder()
{   
    $orders = selectAllOrder();
    include_once "Views/Dashboards/Dashboards.php";
}

function listRevenue()
{   
    $dateNow = new DateTime();
<<<<<<< HEAD
    $revenues = selectWeekRevenue();
    // $endDate = $dateNow->format('Y-m-d');
    // $startDate = $dateNow->modify('-7 day')->format('Y-m-d');
=======
    $endDate = $dateNow->format('Y-m-d');
    $revenues = array();
    for ($i = 0; $i < 7; $i++) {
        $resutl=$dateNow->format('Y-m-d');
        $revenues[$resutl] = selectAllRevenue($resutl);
        $resutl = $dateNow->modify('-1 day');
    }
    $startDate = $dateNow->modify('+1 day')->format('Y-m-d');
>>>>>>> efc69cae9c9cd377f8df0633e2b6cfc07e4e3aa8
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