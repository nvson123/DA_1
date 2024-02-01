<?php
require_once "BaseModel.php";

function selectAllRevenue($dateNow)
{
    $sql ="SELECT SUM(total_money) AS revenue FROM orders
            WHERE DATE(order_date) = '$dateNow'";
    // if(isset($startDate) && isset($endDate))
    // {
    //     $sql.=" WHERE order_date BETWEEN $startDate AND $endDate";
    // }
    return getData($sql);
}

function selectWeekRevenue($startDate, $endDate)
{
    $sql ="SELECT SUM(total_money) AS total_money FROM orders
     WHERE DATE(order_date) BETWEEN '$startDate' AND '$endDate'";
    return getData($sql);
}

function countCategory()
{
    $sql ="SELECT COUNT(id) AS total_category FROM category";
    return getData($sql);
}
function countProduct()
{
    $sql ="SELECT COUNT(id) AS total_product FROM product";
    return getData($sql);
}
function countUser()
{
    $sql ="SELECT COUNT(id) AS total_user FROM user";
    return getData($sql);
}