<?php
    function insert_taikhoan($username,$email, $password, $address, $phone_number){
      $sql = "insert into user(username,email, password, address, phone_number) 
      values ('$username','$email','$password','$address','$phone_number')";
      pdo_execute($sql);
  }
  function checkuser($username, $password){
      $sql="select * from user where username= '".$username."' and password='".$password."'";
      $dm=pdo_query_one($sql);
      return $dm;
  }
  function checkuseradmin($username, $password){
      $sql="select * from user where username= '".$username."' and password='".$password."'";
      $dm=pdo_query_one($sql);
      if($dm >0 ) return $dm['role'];
      else return 0;
  }
  function checkemail($email){
    $sql="select * from user where email= '".$email."'";
    $dm=pdo_query_one($sql);
    return $dm;
}

?>