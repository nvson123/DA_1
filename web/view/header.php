<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from template.hasthemes.com/shome/shome/shop-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 05:19:46 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Shome - Shoes eCommerce Website Template" />
  <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce" />
  <meta name="author" content="codecarnival" />

  <title>SHOES Store</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&amp;display=swap"
    rel="stylesheet">

  <!--== Bootstrap CSS ==-->
  <!-- <link href="template.hasthemes.com/shome - Copy/shome/assets/bootstrap.min.css" rel="stylesheet" /> -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--== Font Awesome Min Icon CSS ==-->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--== Pe7 Stroke Icon CSS ==-->
  <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="assets/css/swiper.min.css" rel="stylesheet" />
  <!--== Fancybox Min CSS ==-->
  <link href="assets/css/fancybox.min.css" rel="stylesheet" />
  <!--== Aos Min CSS ==-->
  <link href="assets/css/aos.min.css" rel="stylesheet" />

  <!--== Main Style CSS ==-->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>

  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


  <style>
    .select-button {
      text-align: center;
      background-color: #525252;
      /* Màu nền mặc định */
      color: white;
      /* Màu chữ mặc định */
      cursor: pointer;
      border: 1px solid #948b8b;
      padding: 10px 20px;
      margin: 5px;
      border-radius: 50%;
      /* Bo tròn các nút */
      height: 50px;
      /* Chiều cao nút */
      width: 50px;
      /* Chiều rộng nút */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .selected {
      border: 1px solid red;
    }

    .unselected {
      opacity: 0.5;
      /* Làm mờ các nút không được chọn */
    }
    .select-button1 {
      text-align: center;
      background-color: #525252;
      cursor: pointer;
      border: 1px solid #948b8b;
      padding: 10px 20px;
      margin: 5px;
      border-radius: 50%;
      /* Bo tròn các nút */
      height: 50px;
      /* Chiều cao nút */
      width: 50px;
      /* Chiều rộng nút */
      
    }

    .selected1{
      border: 1px solid red;
    }

    .unselected1 {
      opacity: 0.5;
      /* Làm mờ các nút không được chọn */
    }


   

  
  </style>
</head>

<body>

  <!--wrapper start-->
  <div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <header class="main-header-wrapper position-relative">
      <div class="header-top">
        <div class="container pt--0 pb--0">
          <div class="row">
            <div class="col-12">
              <div class="header-top-align">
                <div class="header-top-align-start">
                  <div class="desc">
                    <p>We have the perfect shoe for every foot</p>
                  </div>
                </div>
                <div class="header-top-align-end">
                  <div class="header-info-items">
                    <div class="info-items">
                      <ul>
                        <li class="number"><i class="fa fa-phone"></i><a href="tel://0123456789">+00 123 456 789</a>
                        </li>
                        <li class="email"><i class="fa fa-envelope"></i><a
                            href="mailto://demo@example.com">demo@example.com</a></li>
                        <li class="account"><i class="fa fa-user"></i><a href="index.php?act=account">
                            <?php


                            if (!isset($_SESSION['user_info'])) {
                              echo "Account";

                              ?>
                            <?php } else {
                              echo ($_SESSION['user_info']['username']);
                            }
                            ;

                            ?>
                          </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="header-middle">
    <div class="container pt--0 pb--0">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="header-middle-align">
            <div class="header-middle-align-start">
              <div class="header-logo-area">
                <a href="index.html">
                  <img class="logo-main" src="assets/img/shoes.webp" width="131" height="34" alt="Logo" />
                  <img class="logo-light" src="img/logo-light.webp" width="131" height="34" alt="Logo" />
                </a>
              </div>
            </div>
            <div class="header-middle-align-center">
              <div class="header-search-area">
                <form class="header-searchbox" action="index.php?act=shop" method="POST">
                  <input type="search" name="kyw" class="form-control" placeholder="Search">
                  <button class="btn-submit" type="submit"><i class="pe-7s-search"></i></button>
                </form>
              </div>
            </div>
            <div class="header-middle-align-end">
              <div class="header-action-area">
                <div class="shopping-search">
                  <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i
                      class="pe-7s-search icon"></i></button>
                </div>
                <div class="shopping-wishlist">
                  <a class="shopping-wishlist-btn" href="shop-wishlist.html">
                    <i class="pe-7s-like icon"></i>
                  </a>
                </div>
                <div class="shopping-cart">
                  <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                    <i class="pe-7s-shopbag icon"></i>
                    <sup class="shop-count">02</sup>
                  </button>
                </div>
                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu"
                  aria-controls="AsideOffcanvasMenu">
                  <i class="pe-7s-menu"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-area header-default">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-navigation-area position-relative">
              <ul class="main-menu nav">
                <li class=""><a href="index.php"><span>Home</span></a>

                </li>
                <li><a href="about-us.html"><span>About</span></a></li>
                <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                  <ul class="submenu-nav">
                    <li><a href="index.php?act=account"><span>Account</span></a></li>
                    <li><a href="index.php?act=login"><span>Login</span></a></li>
                    <li><a href="index.php?act=dangky"><span>Register</span></a></li>

                  </ul>
                </li>
                <li class=" position-static"><a href="index.php?act=shop"><span>Shop</span></a>

                </li>
                <li class=""><a href="index.php?act=blog"><span>Blog</span></a>

                </li>
                <li><a href="index.php?act=contact"><span>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
  <!--== End Header Wrapper ==-->