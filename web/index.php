<?php
ob_start();
session_start();
include "model/cart.php";
include "model/pdo.php";
include "view/header.php";
include "model/products.php";
include "global.php";
include "model/categories.php";
include "model/account.php";

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
;

$topCategories = loadall_categories();
$loadProductAll = loadall_products_home();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "shop":
            include "view/products/shop.php";
            break;
        case "account":
            include "view/account/account.php";
            break;
        case "login":
            include "view/account/login.php";
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $phone_number = $_POST['tel'];

                insert_taikhoan($username, $email, $password, $address, $phone_number);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chúc năng";
                
            }
            include "view/account/dangky.php";
            break;
        case "ctsp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = loadone_product($_GET['id']);
                include "view/products/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case "dmProducts":
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $dmProducts = loadAll_dmProducts($_GET['iddm']);
                $nameCategory = loadone($_GET['iddm']);
                include "view/products/dmProducts.php";
            } else {
                include "view/home.php";
            }
            break;

        case "addToCart":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img = $_POST['img'];
                $quantity = 1;
                $total = $price * $quantity;
                $spAdd = [$id, $name, $img, $price, $quantity, $total];
                array_push($_SESSION['mycart'], $spAdd);
            }
            include "view/checkout/shop-cart.php";
            break;
            ;
        case "delCart":
            if (isset($_GET['idCart'])) {

                array_splice($_SESSION['mycart'], $_GET['idCart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            ;
            ;
            header('Location: index.php?act=cart');
            ob_end_flush();
            break;
        case "checkout":
            include "view/checkout/checkout.php";
            break;
        case "confirmOrder":
            //tạo đơn hàng
            if (isset($_POST['order']) && ($_POST['order'])){
                $id_pro = $_POST('id_products');
                $name = $_POST['name'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $ngayDatHang=date('h:i:sa d/m/Y');
                $tongDonHang = $tongDonHang();


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