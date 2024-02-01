<?php

function viewCart()
{
  global $img_path;
  //code wrote by nv son and youtube
  $tong = 0;
  $i = 0;
  foreach ($_SESSION['mycart'] as $cart) {
    $linkSP = "index.php?act=ctsp&id=" . $cart[0];
    $hinh = $img_path . $cart[2];
    $tong += $cart[5];
    // $xoasp= ' <a  href="index.php?act=delCart&idCart='.$i.'"><i class="fa fa-trash-o"></i></a>';
    $xoasp = "index.php?act=delCart&idCart=$i";
    $i += 1;
  }

}
;
function tongTien()
{
  $tong = 0;
  //code wrote by nv son and youtube


  foreach ($_SESSION['mycart'] as $cart) {

    $tien = $cart[3] * $cart[4];
    $tong += $tien;


  }
return $tong;
};



function insert_bill($id_user,$name,$email,$address,$tel,$tongDonHang){

$sql = "INSERT INTO orders(id, user_id, fullname, email,
 phone_number, address, note, total_money) VALUES('',$id_user,'$name','$email',$tel,'$address','',$tongDonHang)";
return pdo_execute_return_lastestInsertID($sql);
}
function insert_cart($id_user,$id_pro,$image,$name,$price,$quantity,$tongDonHang,$id_bill){

  $sql = "INSERT INTO `cart`( `id_user`, `id_product`, `image`, `name`, `price`, `soluong`, `thanhtien`, `id_order`)
   VALUES($id_user,'$id_pro','$image','$name',$price,'$quantity','$tongDonHang',$id_bill)";
  return pdo_execute($sql);
  }
;

function loadone_order($id_bill)
{
    $sql = "select * from orders where id = $id_bill";
    $result = pdo_query_one($sql);
    return $result;
}

function loadall_cart($id_bill)
{
    $sql = "select * from cart where id_order = $id_bill";
    $result = pdo_query($sql);
    return $result;
}

function loadall_bill($id_user){
  $sql = "select * from orders where user_id = $id_user";
  $billList = pdo_query($sql);
  return $billList;
};


function get_ttdh($status){
switch ($status) {
  case 0:
    $tt = "chờ xác nhận";
    break;
  
  default:
    # code...
    break;
}
return $tt;
}
?>