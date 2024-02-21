<?php
require_once "BaseModel.php";

<<<<<<< HEAD
function selectAllRevenue($startDate, $endDate)
=======
function selectAllOrder()
{
    $sql ="SELECT * FROM orders";
}
function selectAllRevenue($dateNow)
>>>>>>> efc69cae9c9cd377f8df0633e2b6cfc07e4e3aa8
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