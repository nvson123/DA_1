<main class="main-content">
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="assets/img/photos/bg3.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Register</h2>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Register</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Area Wrapper ==-->
    <section class="account-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Register</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="register-form-content">
              <form action="index.php?act=dangky" method="post"">
                <div class="row">

                <div class="col-12">
                    <div class="form-group">
                      <label for="username">Username <span class="required">*</span></label>
                      <input name="username" class="form-control" type="text" placeholder="Nhâp tên đăng nhập" >
                      <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["username"])) {
                              echo "<span style='color:red;'>Bạn chưa nhập tên đăng nhập.</span>";
                          } else {
                            $username = $_POST["username"];
                            if (!preg_match('/^[a-zA-Z0-9_-]+$/', $username)) {
                              echo " <span style='color:red;'>Tên người dùng chỉ có thể chứa chữ cái, số, dấu gạch dưới và dấu gạch ngang.</span>";
                            }
                          }
                              
                        }
                      ?>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email">Email address <span class="required">*</span></label>
                      <input name="email" class="form-control" type="text" placeholder="Nhập email">
                      <?php 
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      if (empty($_POST["email"])) {
                          echo "<span style='color:red;'> Email chưa được nhập.</span>";
                      } else {
                          $email = $_POST["email"];
                          if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
                              echo "<span style='color:red;'> Email nhập chưa đúng.</span>";
                          } else {
                              echo ('');
                          }
                      }
                  }
                  ?>
                    </div>
                  </div>
                  

                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Password <span class="required">*</span></label>
                      <input name="password" class="form-control" type="password" placeholder="Nhập mật khẩu">
                      <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["password"])) {
                              echo "<span style='color:red;'> Password chưa được nhập.</span>";
                          } else {
                            $password = $_POST["password"];
                            if (strlen($password) < 8) {
                              echo "<span style='color:red;'> Password phải lớn hơn 8 ký tự.</span>";
                            }
                          }
                        }
                      
                      ?>

                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">fullname <span class="required">*</span></label>
                      <input name="fullname" class="form-control" type="text" placeholder="Nhập họ tên">
                      <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["fullname"])) {
                              echo "<span style='color:red;'> Họ tên chưa được nhập.</span>";
                          } else {
                              $fullname = $_POST["fullname"];
                              if(!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
                                  echo "<span style='color:red;'> Họ tên chỉ chấp nhận chữ và khoảng trắng.</span>";
                              } else {
                                  echo ('');
                              }
                          }
                      }
                      ?>
                    </div>
                  </div>
                  

                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Address <span class="required">*</span></label>
                      <input name="address" class="form-control" type="text" placeholder="Nhâp địa chỉ">
                      <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["address"])) {
                              echo "<span style='color:red;'> Address chưa được nhập.</span>";
                          } else {
                              echo ('');
                            }
                          }
                      ?>
                    </div>
                  </div>
                 
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Phone <span class="required">*</span></label>
                      <input name="phone_number" class="form-control" type="text" placeholder="Nhâp số điện thoại">
                      <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["phone_number"])) {
                              echo "<span style='color:red;'> Phone_number chưa được nhập.</span>";
                          } else {
                              $phone_number = $_POST["phone_number"];
                              if (strlen($phone_number) < 10 || strlen($phone_number) > 15) {
                                echo "<span style='color:red;'> Số điện thoại phải dài từ 10-15 ký tự.</span>";
                                  }
                              } 
                          }
                      ?>
                    </div>
                  </div>
                  <div class="khac">
                      <div class="submit">
                         <input type="submit" value="Đăng ký" name="dangky">
                      </div>
                      <div class="reset">
                         <a href="index.php?act=login"><input type="button" value="Đăng nhập" name="login"></a>
                      </div>
                    </div>
                
              </form>
              <p class="thongbao">
    <!-- <?php
     if (isset($thongbao) && ($thongbao != "")) {
      echo '<script> alert("'.$thongbao.'")</script>';
    }
    ?> -->
    </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End My Account Area Wrapper ==-->
  </main>
  <style>
  .thongbao{
    margin-top: 5px;
  }
 
    .dangky {
    width: 450px;
    margin: auto;
    margin-top: 20px;

  }

  .dangky h1 {
    text-align: center;
  }

  .dangky input {
    margin-top: 20px;
    margin-left: 20px;
    width: 400px;
    height: 35px;
  }
  .khac {
    display: grid;
    grid-template-columns: 200px 200px;
    
  }
  .khac input{
    width: 198px;
    margin-top: 20px;
    
  }
  .submit input{
    background-color: white;
    color: black;
  }
  .khac input:hover{
    background-color: red;
    color: white;
  }

  .reset input{
    background-color: white;
    color: black;
    
  }
  .reset input:hover{
    background-color: red;
    color: white;
  }

  </style>
  