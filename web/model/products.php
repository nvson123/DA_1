<?php
//load tat ca san pham
// function loadall_products_home()
// {
   
//     $sql = "SELECT product.*, category.name AS categoryName
//     FROM product
//     JOIN category ON product.category_id = category.id";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }


//load san pham theo tim kiem, Huy thuc hien chuc nang nay
// function loadall_product($kyw="", $category_id=0){
//     $sql="select * from product where 1";
//     if($kyw !=""){
//         $sql .= " and name like '%" .$kyw. "%' ";
//     }
//     if($category_id >0){
//         $sql .= " and category_id = '".$category_id."' ";
//     }
//     $sql.=" order by id desc";
//     $listproduct=pdo_query($sql);
//     return $listproduct;
// }

//load tat ca san pham hoac hien thi san pham theo tim kiem
function loadall_product($kyw="", $category_id=0){
    $sql = "SELECT product.*, category.name AS categoryName
    FROM product
    JOIN category ON product.category_id = category.id
    WHERE 1";

if ($kyw != "") {
$sql .= " AND product.name LIKE '%" . $kyw . "%'";
}

if ($category_id > 0) {
$sql .= " AND product.category_id = '" . $category_id . "'";
}

$sql .= " ORDER BY product.id DESC";

$listproduct = pdo_query($sql);

return $listproduct;

}
function loadone_product($id)
{
    $sql = "select * from product where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function loadAll_dmProducts($iddm)
{
    $sql = "SELECT * FROM product
    WHERE category_id = $iddm";
    $dmSp = pdo_query($sql);
    return $dmSp;
}
?>