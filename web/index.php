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
// $loadProduct = loadall_products_home();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            
            
        case "shop":
            //Tìm kiếm sản phẩm
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            //Load danh mục sản phẩm
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $category_id = $_GET['category_id'];
            } else {
                $category_id = 0;
            }
            $loadProductAll = loadall_product($kyw, $category_id);
            
            // $tendm = load_ten_dm($iddm);
    
            include "view/products/shop.php";
            break;
        case "account":
            if (!isset($_SESSION['user_info'])) {
                include "view/account/login.php";
               
         }else{
            $listBill = loadall_bill($_SESSION['user_info']['id']);
             
         }
            
            include "view/account/account.php";
            break;
        case "login":
            if (isset($_POST['login']) && ($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $kq = checkuser($username, $password);
                $role = $kq['role'];
                if ($role == 1) {
                    $_SESSION['role'] = $role;
                    header('location:../admin/index.php');
                } else if (is_array($kq)) {
                    $_SESSION['role'] = $role;
                    $_SESSION['id'] = $kq['id'];
                    $_SESSION['user'] = $kq['user'];
                    $_SESSION['user_info'] = array(
                        'id' => $kq['id'],
                        'username' => $kq['username'],
                        'fullname' => $kq['fullname'],
                        'address' => $kq['address'],
                        'email' => $kq['email'],
                        'phone_number' => $kq['phone_number']
                    );

                    header('location:index.php');
                } else {
                    // $thongbao = "Tài khoản không tổn tại. Vui lòng kiểm tra lại";
                    header('location:index.php?act=login');
                }
            }
            include "view/account/login.php";
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];

                insert_taikhoan($username, $email, $password, $address, $phone_number);
                $thongbao = "Đã đăng ký thành công.";

            }
            include "view/account/dangky.php";
            break;
        case "logout":
            if (isset($_SESSION['user_info'])) {
                session_destroy();
                header('Location: index.php ');
            }else{
                include "view/products/shop.php";
            }

            
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                //$thongbao="Cập nhật thành công";
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['password'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include "view/account/quenmk.php";
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
            if (isset($_POST['order']) && ($_POST['order'])) {
                // $id_pro = $_POST('id_products');

                $id_user = $_POST['iduser'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $ngayDatHang = date('h:i:sa d/m/Y');
                $tongDonHang = tongTien();
                $id_bill = insert_bill($id_user, $name, $email, $address, $tel, $tongDonHang);
                //test thêm giỏ hàng vào csdl

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user_info']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $id_bill);
                }
                $_SESSION['mycart'] = [];
            }
            $listOrder = loadone_order($id_bill);
            $billCT = loadall_cart($id_bill);
            include "view/checkout/bill.php";
            break;
            
        case "myBill":
            if (isset($_GET['idBill']) && ($_GET['idBill'] > 0)) {
                $listOrder = loadone_order($_GET['idBill']);
                $billCT = loadall_cart($_GET['idBill']);
                include "view/account/myBill.php";
            } else {
                include "view/account/account.php";
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