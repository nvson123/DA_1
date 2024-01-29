<?php
include "view/header.php";
include "model/products.php";
include "global.php";
include "model/pdo.php";
include "model/categories.php";


$topCategories = loadall_categories();
$loadProductAll = loadall_products_home();
// include "view/products/shop.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "shop":
            // if (isset($_POST['keyword']) && $_POST['keyword'] != 0) {
            //     $kyw = $_POST['keyword'];
            // } else {
            //     $kyw = "";
            // }
            // if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
            //     $iddm = $_GET['iddm'];
            // } else {
            //     $iddm = 0;
            // }
            // // $dssp = loadall_sanpham($kyw, $iddm);
            // // $tendm = load_ten_dm($iddm);

            
            include "view/products/shop.php";
            break;

        // include "./view/products/sanpham.php";
        case "account":
            include "view/account/account.php";
            break;
        case "login":
            include "view/account/login.php";
            break;
        case "dangky":
            include "view/account/dangky.php";
            break;


        case "ctsp":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $product = loadone_product($_GET['id']);
                // $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                // $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/products/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
            case "dmProducts":
                if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                    $dmProducts = loadAll_dmProducts($_GET['iddm']);
                    $nameCategory = loadone($_GET['iddm']);
                    include "view/products/dmProducts.php"; 
                } else {
                    include "view/home.php";
                }
                break;
        

        case "contact":
            include "view/contact.php";
            break;
        case "compare":

            include "view/products/compare-product.php";
            break;
        case "wishlist":
            include "view/products/wishlist.php";
            break;
        case "cart":
            include "view/checkout/shop-cart.php";
            break;
        case "about":
            include "view/about.php";
            break;
        case "blog":
            include "view/blog/blog.php";
            break;

    }
} else {
    
    include "view/home.php";
}
include "view/aside.php";
include "view/footer.php";


?>