<?php
require_once "Models/CategoryModel.php";
function listCategory()
{
    $categories = selectAllCategory();
    include_once "Views/Category/ListCategory.php";
}
function deleteCategory($id)
{
    delCategory($id);
    header('Location:index.php?url=list-category');
    exit();
}
function addCategoryPage(){
    include_once "Views/Category/AddCategory.php";
}
function addCategory()
{   
    $errors=array();
    $name = $_POST['name'];
    $description = $_POST['description'];
    $checkNameCate = checkNameCate($name);
    if(empty(trim($name)))
    {
        $errors['required']="Vui lòng nhập tên danh mục và không phải là số 0";
    }elseif(strlen(trim($name))<2)
    {
        $errors['min']="Vui lòng nhập tên danh mục ít nhất 2 ký tự";
    }elseif(!empty($checkNameCate))
    {
        $errors['exists']="Danh mục đã tồn tại";
    }

    if(count($errors)>0)
    {   
        // $errors = $errors;
        include_once "Views/Category/AddCategory.php";
    }else
    {
        
        $check = insertCategory($name, $description);
        if (!$check){
        echo "<script>alert('Thêm sản phẩm thành công');</script>";
    }
    }
    
}

function updateCategoryPage()
{
        $id = $_GET["id"];
        $categories = selectOneCategory($id); 
        include_once "Views/Category/UpdateCategory.php";
}

function updateCategory()
{   
    // $errors=array();
   
    // if(empty(trim($_POST['name'])))
    // {
    //     $errors['required']="Vui lòng nhập tên danh mục và không phải là số 0";
    // }elseif(strlen(trim($_POST['name']))<2)
    // {
    //     $errors['min']="Vui lòng nhập tên danh mục ít nhất 2 ký tự";
    // }

    // if(count($errors)>0)
    // {   
    //     // $errors = $errors;
    //     include_once "Views/Category/AddCategory.php";
    // }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        updateCate($id, $name, $description);
        header('Location:index.php?url=list-category');
        exit();
    // }
    
}