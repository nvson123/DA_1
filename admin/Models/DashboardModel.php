<?php
require_once "BaseModel.php";

<<<<<<< HEAD
function selectAllOrder()
{
    $sql ="SELECT * FROM orders";
=======
function selectAllRevenue($dateNow)
{
    $sql ="SELECT SUM(total_money) AS revenue FROM orders
            WHERE DATE(order_date) = '$dateNow'";
>>>>>>> 6bad0bba2a7b6dad01ee742afb600fa92f748f6d
    // if(isset($startDate) && isset($endDate))
    // {
    //     $sql.=" WHERE order_date BETWEEN $startDate AND $endDate";
    // }
    return getData($sql);
<<<<<<< HEAD
=======
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
>>>>>>> 6bad0bba2a7b6dad01ee742afb600fa92f748f6d
}