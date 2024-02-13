<?php
function loadall_products_home()
{
    // $sql="SELECT * FROM product ORDER BY id DESC LIMIT 0, 9";
    $sql = "SELECT product.*, category.name AS category_name
    FROM product
    JOIN category ON product.category_id = category.id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_product($kyw="", $category_id=0){
    $sql="select * from product where 1";
    if($kyw !=""){
        $sql .= " and name like '%" .$kyw. "%' ";
    }
    if($category_id >0){
        $sql .= " and category_id = '".$category_id."' ";
    }
    $sql.=" order by id desc";
    $listproduct=pdo_query($sql);
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