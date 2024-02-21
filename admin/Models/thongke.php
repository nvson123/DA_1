<?php
require_once 'BaseModel.php';
// $startDate = date('Y-m-d', strtotime('-1 year')); // Ngày bắt đầu (ngày hiện tại trừ đi 1 năm)
// $endDate = date('Y-m-d');
$sql = "SELECT  order_date, total_money  FROM orders WHERE order_date >= DATE_SUB(NOW(), INTERVAL 1 YEAR)";
$sql_query = getData($sql);
foreach ($sql_query as $row) {
    $chart_data[] = array(
        'date' => $row['order_date'],
        
        'total_money' => $row['total_money']
    );
}
echo $data = json_encode($chart_data);