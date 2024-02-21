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
        $checkNamePro = checkNamePro($name);
        $errors=array();
        if(empty(trim($name)))
        {
            $errors['name']['required']="Vui lòng nhập tên sản phẩm và không phải là số 0";
        }elseif(strlen(trim($name))<2)
        {
            $errors['name']['min']="Vui lòng nhập tên sản phẩm ít nhất 2 ký tự";
        }elseif(!empty($checkNamePro))
        {
            $errors['name']['exists']="Sản phẩm đã tồn tại";
        }

        if(empty(trim($discount)))
        {
            $errors['discount']['required']="Không bỏ trống trường này";
        }elseif(strlen(trim($discount))<4)
        {
            $errors['discount']['min']="Vui lòng nhập từ 1000";
        }elseif(!filter_var($discount, FILTER_VALIDATE_INT))
        {
            $errors['discount']['isInt']="Phải nhập là số nguyên";
        }


        if(empty(trim($price)))
        {
            $errors['price']['required']="Không bỏ trống trường này";
        }elseif(strlen(trim($price))<4)
        {
            $errors['price']['min']="Vui lòng nhập từ 1000";
        }elseif(!filter_var($price, FILTER_VALIDATE_INT))
        {
            $errors['price']['isInt']="Phải nhập là số nguyên";
        }


        if(count($errors)>0)
        {   
            $categorys = selectAllCategory();
            // $errors = $errors;
            include_once "Views/Product/AddProduct.php";
        }else
        {
            
            $image = $_FILES['image'];
            $targetDir = "upload/img/";
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
        }
        

function addVariantPage()
{
    $id = $_GET['id'];
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