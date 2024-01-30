<?php
function insert_taikhoan($username,$email, $password, $address, $phone_number){
  $sql = "insert into user(username,email, password, address, phone_number) 
  values ('$username','$email','$password','$address','$phone_number')";
  pdo_execute($sql);
}
function checkuser($user, $password){
    $sql="select * from user where user= '".$user."' and password='".$password."'";
    $dm=pdo_query_one($sql);
    return $dm;
}

?>