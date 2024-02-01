<div class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart"
  aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h1 id="offcanvasRightLabel"></h1>
    <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i
        class="fa fa-chevron-right"></i></button>
  </div>
  <div class="offcanvas-body">
    <ul class="aside-cart-product-list">
      <li class="product-list-item">
        <a href="#/" class="remove">×</a>
        <a href="single-product.html">
          <img src="assets/img/shop/product-mini/1.webp" width="90" height="110" alt="Image-HasTech">
          <span class="product-title">Leather Mens Slipper</span>
        </a>
        <span class="product-price">1 × £69.99</span>
      </li>
      <li class="product-list-item">
        <a href="#/" class="remove">×</a>
        <a href="single-product.html">
          <img src="assets/img/shop/product-mini/2.webp" width="90" height="110" alt="Image-HasTech">
          <span class="product-title">Quickiin Mens shoes</span>
        </a>
        <span class="product-price">1 × £20.00</span>
      </li>
    </ul>
    <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
    <a class="btn-theme" data-margin-bottom="10" href="index.php?act=cart">View cart</a>
    <a class="btn-theme" href="shop-checkout.html">Checkout</a>
    <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="assets/img/photos/paypal.webp" width="133"
        height="26" alt="Has-image"></a>
  </div>
</div>
<!--== End Aside Cart Menu ==-->

<!--== Start Aside Search Menu ==-->
<aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
  aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
    <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
        class="pe-7s-close"></i></button>
  </div>
  <div class="offcanvas-body">
    <div class="container pt--0 pb--0">
      <div class="search-box-form-wrap">
        <div class="search-note">
          <p>Start typing and press Enter to search</p>
        </div>
        <form action="#" method="post">
          <div class="search-form position-relative">
            <label for="search-input" class="visually-hidden">Search</label>
            <input id="search-input" type="search" class="form-control" placeholder="Search entire store…">
            <button class="search-button"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</aside>
<!--== End Aside Search Menu ==-->

<!--== Start Side Menu ==-->
<div class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
  aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h1 id="offcanvasExampleLabel"></h1>
    <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
        class="fa fa-chevron-left"></i></button>
  </div>
  <div class="offcanvas-body">
    <div class="info-items">
      <ul>
        <li class="number"><a href="tel://0123456789"><i class="fa fa-phone"></i>+00 123 456 789</a></li>
        <li class="email"><a href="mailto://demo@example.com"><i class="fa fa-envelope"></i>demo@example.com</a></li>
        <li class="account"><a href="account-login.html"><i class="fa fa-user"></i>Account</a></li>
      </ul>
    </div>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-items">
      <ul class="nav-menu">
        <li><a href="index.php">Home</a>

        </li>
        <li><a href="index.php?act=about">About</a></li>
        <li><a href="#">Pages</a>
          <ul class="sub-menu">
            <li><a href="index.php?act=account">Account</a></li>
            <li><a href="index.php?act=login">Login</a></li>
            <li><a href="index.php?act=dangky">Register</a></li>
            <!-- <li><a href="page-not-found.html">Page Not Found</a></li> -->
          </ul>
        </li>
        <li><a href="#">Shop</a>
          <ul class="sub-menu">
            <li><a href="index.php?act=shop">Shop</a>

            </li>
            <li><a href="#">Others Pages</a>
              <ul class="sub-menu">
                <li><a href="index.php?act=cart">Shopping Cart</a></li>
                <li><a href="index.php?act=checkout">Checkout</a></li>
                <li><a href="index.php?act=-wishlist">Wishlist</a></li>
                <li><a href="index.php?act=shop-compare">Compare</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="index.php?act=blog">Blog</a>
         


          
        </li>
       
      </ul>
      </li>
      <li><a href="index.php?act=contact">Contact</a></li>
      </ul>
    </div>
    <!-- Mobile Menu End -->
  </div>
</div>
<!--== End Side Menu ==-->