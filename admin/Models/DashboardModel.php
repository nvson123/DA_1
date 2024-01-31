<?php
require_once "BaseModel.php";

function selectAllOrder()
{
    $sql ="SELECT * FROM orders";
    // if(isset($startDate) && isset($endDate))
    // {
    //     $sql.=" WHERE order_date BETWEEN $startDate AND $endDate";
    // }
    return getData($sql);
}