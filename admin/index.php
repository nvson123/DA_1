<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
require_once 'Controllers/UserController.php';
require_once 'Controllers/CategoryController.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/FeedbackController.php';
require_once 'Controllers/DashboardController.php';
include "Header.php";
switch ($url){
    case '/':
        // if (isset($_POST['listOrderDate']))
        // {
        //     listOrderDate();
        // }
        listRevenue();
        break;
    case 'list-user':
        listUser();
        break;
    case 'delete-user':
        if (isset($_GET['id']))
        {
            deleteUser($_GET['id']);
        }
        break;
    case 'list-feedback':
        listFeedback();
        break;
    case 'delete-feedback':
        if (isset($_GET['id']))
        {
            deleteFeedback();
        }
        break;
    case 'list-category':
        listCategory();
        break;
    case 'delete-category':
        if (isset($_GET['id']))
        {
            deleteCategory($_GET['id']);
        }
        break;
    case 'add-category':
        if(isset($_POST['addCategory']))
        {
            addCategory();
        }
        addCategoryPage();
        break;
    case 'update-category':
        
        if(isset($_POST['updateCategory']))
        {
            updateCategory($_POST['id'], $_POST['name'], $_POST['description']);
        }
        updateCategoryPage();
        break;
    case 'list-product':
        listProduct();
        break;
    case 'add-product':
        if(isset($_POST['addProduct']))
        {
            addProduct();
        }
        addProductPage();
        break;
    case 'add-variant':
        if(isset($_POST['addVariant']))
        {
            addVariant();
        }
        addVariantPage();
        break;
    case 'delete-product':
        if (isset($_GET['id']))
        {
            deleteProduct();
        }
        break;
    case 'thoat':
        unset($_SESSION['role']);
        header('location:../web/index.php');
        break;
    // case 'update-product':
    //     if(isset($_POST['updateProduct']))
    //     {
    //         updateProduct();
    //     }
    //     updateProductPage();
    default:
        include 'Views/Dashboards/Dashboards.php';
        break;
}
include "Footer.php";
