<?php
require_once "BaseModel.php";

function selectAllRevenue($startDate, $endDate)
{
    $sql ="SELECT DATE(order_date) AS order_date, SUM(total_money) AS revenue FROM orders
            WHERE order_date BETWEEN '$startDate' AND '$endDate' GROUP BY order_date";
    // if(isset($startDate) && isset($endDate))
    // {
    //     $sql.=" WHERE order_date BETWEEN $startDate AND $endDate";
    // }
    return getData($sql);
}

function selectWeekRevenue()
{
    $sql ="SELECT DATE(order_date) AS order_date, SUM(total_money) AS revenue FROM orders
     WHERE order_date >= DATE_SUB(CURRENT_DATE, INTERVAL 7 DAY)";
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