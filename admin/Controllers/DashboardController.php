<?php
require_once "Models/DashboardModel.php";

<<<<<<< HEAD
function listOrder()
{   
    $orders = selectAllOrder();
    include_once "Views/Dashboards/Dashboards.php";
}

=======
function listRevenue()
{   
    $dateNow = new DateTime();
    $revenues = array();
    for ($i = 0; $i < 7; $i++) {
        $resutl=$dateNow->format('Y-m-d');
        $revenues[$resutl] = selectAllRevenue($resutl);
        $resutl = $dateNow->modify('-1 day');
    }
    $endDate = $dateNow->format('Y-m-d');
    $startDate = $dateNow->modify('-7 day')->format('Y-m-d');
    $totalCategory = countCategory();
    $totalProduct = countProduct();
    $totalUser = countUser();
    $weekRevenue = selectWeekRevenue($startDate, $endDate);
    
    include_once "Views/Dashboards/Dashboards.php";
}
>>>>>>> 6bad0bba2a7b6dad01ee742afb600fa92f748f6d
// function listOrderDate()
// {
//     $startDate = $_POST['startDate'];
//     $endDate = $_POST['endDate'];
//     $orders = selectOrderDate($startDate, $endDate);
//     include_once "Views/Dashboards/Dashboards.php";
// }