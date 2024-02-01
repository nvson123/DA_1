<?php
require_once "BaseModel.php";

function selectAllProduct()
{
    $sql = "SELECT product.id, category.name AS name_category, product.name, product.price, product.discount, product.image, product.description, product.best_saler,product.created_at, product.updated_at, SUM(product_variant.quantity) AS total_quantity
        FROM product
        LEFT JOIN product_variant ON product.id = product_variant.product_id
        INNER JOIN category ON product.category_id = category.id
        GROUP BY product.id, product.name, product.price, product.discount, product.image, product.description, product.created_at, product.updated_at
    ";
    return getData($sql);
}

function insertProduct($name,$category, $price, $discount, $description, $imageUrl)
{
    $sql = "INSERT INTO product (name, category_id, price, discount, description, image) VALUES ('$name', '$category', '$price', '$discount', '$description', '$imageUrl')";
    getData($sql);
    // function getLastProductID()
    // {
    // $sql = "SELECT id FROM product ORDER BY id DESC LIMIT 1";
    // return getData($sql);
    // }
    // $productID = getLastProductID();
    // foreach ($productID as $item){
    //     extract($item);
    // }
    // $proID = $item["id"];
    // $sql = "INSERT INTO product_variant (product_id) VALUES ('$proID')";
    // getData($sql);
}
function delProduct($id){
    $sql = "DELETE FROM product WHERE id = '$id'";
    getData($sql);
}

function selectOneProduct($id)
{   
    $sql = "SELECT product.id, product.image, product.name, category.name AS name_category, product.discount, product.price, product.description, product_variant.size, product_variant.color, product_variant.quantity
            FROM product
            INNER JOIN category ON product.category_id = category.id
            LEFT JOIN product_variant ON product.id = product_variant.product_id
            WHERE product.id = $id";
    // $sql = "SELECT * FROM product WHERE id = '$id'";
    return getData($sql);
}

function insertVariant($product_id, $size, $color, $quantity)
{
    $sql = "INSERT INTO product_variant (product_id, size, color, quantity) VALUES ('$product_id','$size','$color','$quantity')";
    getData($sql);
}