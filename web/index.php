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
$loadProduct = loadall_products_home();


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

            } else {
                $listBill = loadall_bill($_SESSION['user_info']['id']);

            }

            include "view/account/account.php";
            break;
        case "login":
            if (isset($_SESSION['user_info'])) {
                header('Location: index.php?act=account');  ;

            }
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
            
                $email = $_POST["email"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $fullname = $_POST["fullname"];
                $phone_number = $_POST["phone_number"];
                if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email) ||
                    !preg_match('/^[a-zA-Z0-9_-]+$/', $username) ||
                    (strlen($password) < 8) ||
                    !preg_match("/^[a-zA-Z ]*$/",$fullname) ||
                    (strlen($phone_number) < 10 || strlen($phone_number) > 15)
                    ) {
                    
                }
                else{
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $fullname = $_POST['fullname'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $phone_number = $_POST['phone_number'];
    
                    insert_taikhoan($username, $email,$fullname, $password, $address, $phone_number);
                    echo  "<p style='text-align:center;'>Đã đăng ký thành công.</p>";
                }
                    
                    
                }
                
            include "view/account/dangky.php";
            break;
        case "logout":
            if (isset($_SESSION['user_info'])) {
                session_destroy();
                header('Location: index.php ');
            } else {
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
                $list_variant = load_variant($_GET['id']);
                
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
                $pttt = $_POST['pttt'];
                $id_user = $_POST['iduser'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $ngayDatHang = date('h:i:sa d/m/Y');
                    $tongDonHang = tongTien();
                    $id_bill = insert_bill($id_user, $name, $email, $address, $tel, $tongDonHang);
                if ($pttt == 'tienmat') {
                    


                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user_info']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $id_bill);
                    }
                    $_SESSION['mycart'] = [];

                // } else if ($pttt == 'redirect') {
                //     // $id_bill = insert_bill($id_user, $name, $email, $address, $tel, $tongDonHang);
                //     // if (isset($_POST['tienmat']) && ($_POST['order'])) {
                //     // $id_pro = $_POST('id_products');
                //     error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
                //     date_default_timezone_set('Asia/Ho_Chi_Minh');

                //     $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                //     $vnp_Returnurl = "http://localhost/FINAL/web/index.php?act=confirmOrder";
                //     $vnp_TmnCode = "AG17NXAU";//Mã website tại VNPAY 
                //     $vnp_HashSecret = "ZLMJRBGFQXKMFXNSJIRICDOFYUPHVWQK"; //Chuỗi bí mật

                //     $vnp_TxnRef = rand(00,9990); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                //     $vnp_OrderInfo ='Noi dung thanh toan';
                //     $vnp_OrderType = 200000;
                //     $vnp_Amount = 10000 * 100;
                //     $vnp_Locale = 'vn';
                //     $vnp_BankCode = 'NCB';
                //     $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                //     //Add Params of 2.0.1 Version
                //     // $vnp_ExpireDate = $_POST['txtexpire'];
                //     //Billing
                //     // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
                //     // $vnp_Bill_Email = $_POST['txt_billing_email'];
                //     // $fullName = trim($_POST['txt_billing_fullname']);
                //     // if (isset($fullName) && trim($fullName) != '') {
                //     //     $name = explode(' ', $fullName);
                //     //     $vnp_Bill_FirstName = array_shift($name);
                //     //     $vnp_Bill_LastName = array_pop($name);
                //     // }
                //     // $vnp_Bill_Address = $_POST['txt_inv_addr1'];
                //     // $vnp_Bill_City = $_POST['txt_bill_city'];
                //     // $vnp_Bill_Country = $_POST['txt_bill_country'];
                //     // $vnp_Bill_State = $_POST['txt_bill_state'];
                //     // // Invoice
                //     // $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
                //     // $vnp_Inv_Email = $_POST['txt_inv_email'];
                //     // $vnp_Inv_Customer = $_POST['txt_inv_customer'];
                //     // $vnp_Inv_Address = $_POST['txt_inv_addr1'];
                //     // $vnp_Inv_Company = $_POST['txt_inv_company'];
                //     // $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
                //     // $vnp_Inv_Type = $_POST['cbo_inv_type'];
                //     $inputData = array(
                //         "vnp_Version" => "2.1.0",
                //         "vnp_TmnCode" => $vnp_TmnCode,
                //         "vnp_Amount" => $vnp_Amount,
                //         "vnp_Command" => "pay",
                //         "vnp_CreateDate" => date('YmdHis'),
                //         "vnp_CurrCode" => "VND",
                //         "vnp_IpAddr" => $vnp_IpAddr,
                //         "vnp_Locale" => $vnp_Locale,
                //         "vnp_OrderInfo" => $vnp_OrderInfo,
                //         "vnp_OrderType" => $vnp_OrderType,
                //         "vnp_ReturnUrl" => $vnp_Returnurl,
                //         "vnp_TxnRef" => $vnp_TxnRef,

                //         // "vnp_ExpireDate" => $vnp_ExpireDate,
                //         // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
                //         // "vnp_Bill_Email" => $vnp_Bill_Email,
                //         // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
                //         // "vnp_Bill_LastName" => $vnp_Bill_LastName,
                //         // "vnp_Bill_Address" => $vnp_Bill_Address,
                //         // "vnp_Bill_City" => $vnp_Bill_City,
                //         // "vnp_Bill_Country" => $vnp_Bill_Country,
                //         // "vnp_Inv_Phone" => $vnp_Inv_Phone,
                //         // "vnp_Inv_Email" => $vnp_Inv_Email,
                //         // "vnp_Inv_Customer" => $vnp_Inv_Customer,
                //         // "vnp_Inv_Address" => $vnp_Inv_Address,
                //         // "vnp_Inv_Company" => $vnp_Inv_Company,
                //         // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
                //         // "vnp_Inv_Type" => $vnp_Inv_Type
                //     );

                //     if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                //         $inputData['vnp_BankCode'] = $vnp_BankCode;
                //     }
                //     // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                //     //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
                //     // }

                //     //var_dump($inputData);
                //     ksort($inputData);
                //     $query = "";
                //     $i = 0;
                //     $hashdata = "";
                //     foreach ($inputData as $key => $value) {
                //         if ($i == 1) {
                //             $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                //         } else {
                //             $hashdata .= urlencode($key) . "=" . urlencode($value);
                //             $i = 1;
                //         }
                //         $query .= urlencode($key) . "=" . urlencode($value) . '&';
                //     }

                //     $vnp_Url = $vnp_Url . "?" . $query;
                //     if (isset($vnp_HashSecret)) {
                //         $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                //         $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                //     }
                //     $returnData = array(
                //         'code' => '00'
                //         ,
                //         'message' => 'success'
                //         ,
                //         'data' => $vnp_Url
                //     );
                //     if (isset($_POST['redirect'])) {
                //         header('Location: ' . $vnp_Url);
                //         die();
                //     } else {
                //         echo json_encode($returnData);
                //     }

                // }
            }
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