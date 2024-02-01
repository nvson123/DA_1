<?php
require_once "Models/ProductModel.php";

function listProduct()
{   
    $products = selectAllProduct();
    include_once "Views/Product/ListProduct.php";
}
function addProductPage()
{
    $categorys = selectAllCategory();
    include_once "Views/Product/AddProduct.php";
}

function addProduct()
{

        $name = $_POST['name'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $description = $_POST['description'];
        $targetDir = "upload/img/";
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $targetFile = $targetDir . basename($image_name); 
        move_uploaded_file($image_tmp, $targetFile);
        
        $imageUrl = $targetFile;
        $check = insertProduct($name, $category, $price, $discount, $description, $imageUrl);
        if (!$check){
            echo "<script>alert('Thêm sản phẩm thành công');</script>";
        }
}

function addVariantPage()
{
    $id = $_GET['id'];
    // echo $id;
    // die();
    $product = selectOneProduct($id);
    include_once "Views/Product/AddVariant.php";
}

function addVariant(){
    $product_id = $_POST['productID'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $quantity = $_POST['quantity'];
    $check = insertVariant($product_id, $size, $color, $quantity);
    if (!$check){
        echo "<script>alert('Thêm sản phẩm thành công');</script>";
        header('Location:index.php?url=list-product');
        exit();
    }
}

function deleteProduct()
{
    $id = $_GET['id'];
    delProduct($id);
    header("Location: index.php?url=list-product");
    exit();
}

// function updateProductPage(){
//     $id = $_GET['id'];
//     $categorys = selectAllCategory();
//     $product = selectOneProduct($id);
//     include_once "Views/Product/UpdateProduct.php";
// }

// function updateProduct()
// {

// }