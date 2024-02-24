<main class="main-content">
  <!--== Start Page Header Area Wrapper ==-->
  <div class="page-header-area" data-bg-img="assets/img/photos/bg3.webp">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="page-header-content">
            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Checkout</h2>
            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="breadcrumb-sep">//</li>
                <li>Checkout</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Page Header Area Wrapper ==-->

  <!--== Start Shopping Checkout Area Wrapper ==-->
  <section class="shopping-checkout-wrap">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="checkout-page-login-wrap">
            <!--== Start Checkout Login Accordion ==-->



            <div class="login-accordion" id="LoginAccordion">
              <div class="card">
                <h3>
                  <i class="fa fa-info-circle"></i>
                  Đã có tài khoản?
                  <a href="index.php?act=login" data-bs-toggle="collapse" data-bs-target="#loginaccordion">Nhấp vào đây
                    để đăng nhập</a>
                </h3>
                <div id="loginaccordion" class="collapse" data-bs-parent="#LoginAccordion">
                  <div class="card-body">
                    <div class="login-wrap">
                      <p>If you have shopped with us before, please enter your details below. If you are a new customer,
                        please proceed to the Billing & Shipping section.</p>
                      <form action="#" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="logEmail">Username or email <span class="required">*</span></label>
                              <input id="logEmail" class="form-control" type="email">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group left-m">
                              <label for="logPass">Password <span class="required">*</span></label>
                              <input id="logPass" class="form-control" type="password">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mt-30">
                              <button class="btn-login">Login</button>
                              <div class="rememberme-account">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input visually-hidden"
                                    id="remembermePass">
                                  <label class="custom-control-label" for="remembermePass">Remember me</label>
                                </div>
                              </div>
                              <a class="lost-password" href="#">Lost your password?</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Checkout Login Accordion ==-->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="checkout-page-coupon-wrap">
            <!--== Start Checkout Coupon Accordion ==-->
            <div class="coupon-accordion" id="CouponAccordion">
              <div class="card">
                <h3>
                  <i class="fa fa-info-circle"></i>
                  Have a Coupon?
                  <a href="#/" data-bs-toggle="collapse" data-bs-target="#couponaccordion">Click here to enter your
                    code</a>
                </h3>
                <div id="couponaccordion" class="collapse" data-bs-parent="#CouponAccordion">
                  <div class="card-body">
                    <div class="apply-coupon-wrap mb-60">
                      <p>If you have a coupon code, please apply it below.</p>
                      <form action="#" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Coupon code">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <button class="btn-coupon">Apply coupon</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Checkout Coupon Accordion ==-->
          </div>
        </div>
      </div>
      <form action="index.php?act=confirmOrder" class="row" method="post">
        <div class="row">
          <div class="col-lg-6">



            <!--== Start Billing Accordion ==-->

            <?php
            if (isset($_SESSION)) {
              $id_user = $_SESSION['user_info']['id'];
              $name = $_SESSION['user_info']['fullname'];
              $address = $_SESSION['user_info']['address'];
              $email = $_SESSION['user_info']['email'];
              $tel = $_SESSION['user_info']['phone_number'];
            } else {
              $id_user="";
              $name = "";
              $address = "";
              $email = "";
              $tel = "";
            }


            ?>
            <div class="checkout-billing-details-wrap">
              <h2 class="title">Chi tiết đơn hàng</h2>
              <div class="billing-form-wrap">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="hidden" name="iduser" value="<?=$id_user?>">
                      <label for="f_name">Full Name <abbr class="required" title="required">*</abbr></label>
                      <input id="f_name" type="text" name="name" class="form-control" value="<?= $name ?>">
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="form-group">
                      <label for="l_name">Last name <abbr class="required" title="required">*</abbr></label>
                      <input id="l_name" type="text" class="form-control">
                    </div>
                  </div> -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="com_name">Tên công ty/cơ quan (tùy chọn)</label>
                      <input id="com_name" name="com_name" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="street-address"> Địa chỉ <abbr class="required" title="required">*</abbr></label>
                      <input id="street-address" name="address" type="text" class="form-control"
                        placeholder="House number and street name" value="<?= $address ?>">
                    </div>
                    <!-- <div class="form-group">
                      <label for="street-address2" class="visually-hidden">Street address 2 <abbr class="required"
                          title="required">*</abbr></label>
                      <input id="street-address2" type="text" class="form-control"
                        placeholder="Apartment, suite, unit etc. (optional)">
                    </div> -->
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="pz-code">Mã bưu điện / ZIP (optional)</label>
                      <input id="pz-code" type="text" name="zip" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="phone" title="required">Số điện thoại *</label>
                      <input id="phone" required name="tel" type="text" class="form-control" value="<?= $tel ?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" data-margin-bottom="30">
                      <label for="email">Email address <abbr class="required" title="required">*</abbr></label>
                      <input id="email" type="text" name="email" class="form-control" value="<?= $email ?>">
                    </div>
                  </div>
                  <div id="CheckoutBillingAccordion" class="col-md-12">
                    <div class="checkout-box" data-margin-bottom="25" data-bs-toggle="collapse"
                      data-bs-target="#CheckoutOne" aria-expanded="false" role="toolbar">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input visually-hidden" id="CreateAccount">
                        <label class="custom-control-label" for="CreateAccount">Tạo tài khoản?</label>
                      </div>
                    </div>
                    <div id="CheckoutOne" class="collapse" data-margin-top="30"
                      data-bs-parent="#CheckoutBillingAccordion">
                      <div class="form-group">
                        <label for="password">Tạo mật khẩu tài khoản <abbr class="required"
                            title="required">*</abbr></label>
                        <input id="password" type="password" class="form-control" placeholder="Password">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb--0">
                      <label for="order-notes">Order notes (optional)</label>
                      <textarea id="order-notes" name="note" class="form-control"
                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!--== End Billing Accordion ==-->

          </div>
          <div class="col-lg-6" style="">
            <!--== Start Order Details Accordion ==-->
            <div class="checkout-order-details-wrap">
              <div class="order-details-table-wrap table-responsive">
                <h2 class="title mb-25">Đơn hàng của bạn</h2>
                <table class="table">
                  <thead>
                    <tr>
                      <th class="product-name">Tên sản phẩm</th>
                      <th class="product-total">Tổng tiền</th>
                    </tr>
                  </thead>
                  <tbody class="table-body">


                    <?php global $img_path;
                    //code wrote by nv son and youtube
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                      $linkSP = "index.php?act=ctsp&id=" . $cart[0];
                      $hinh = $img_path . $cart[2];
                      $tong += $cart[5];
                      // $xoasp= ' <a  href="index.php?act=delCart&idCart='.$i.'"><i class="fa fa-trash-o"></i></a>';
                      $xoasp = "index.php?act=delCart&idCart=$i";
                      echo '
                    <tr class="cart-item">
                    <input type="hidden" name="id_products"value="' . $cart[0] . '">
                    <td class="product-img"><img src="' . $hinh . '" width="60" height="80" alt="Image-HasTech"></td>
                    <td class="product-name">' . $cart[1] . ' <span class="product-quantity">× ' . $cart[4] . '</span></td>
                    <td class="product-total">' . $cart[5] . '</td>
                  </tr>
                    ';
                      $i += 1;
                    }
                    ?>
                    <!-- <tr class="cart-item">
                    <td class="product-name">Satin gown <span class="product-quantity">× 1</span></td>
                    <td class="product-total">£69.99</td>
                  </tr>
                  <tr class="cart-item">
                    <td class="product-name">Printed cotton t-shirt <span class="product-quantity">× 1</span></td>
                    <td class="product-total">£20.00</td>
                  </tr> -->
                  </tbody>
                  <tfoot class="table-foot">
                    <tr class="cart-subtotal">
                      <th>Tạm tính</th>
                      <td>$
                        <?= $tong ?>
                      </td>
                    </tr>
                    <tr class="shipping">
                      <th>Vận chuyển:</th>
                      <td> $
                        <?php echo $ship = 0; ?>
                      </td>
                    </tr>
                    <tr class="order-total">
                      <th>Tổng số tiền thanh toán </th>
                      <td>
                        <?= ($tong + $ship) ?>
                      <td>
                    </tr>
                  </tfoot>
                </table>
                <div class="shop-payment-method">
                  <div id="PaymentMethodAccordion">
                    <!-- <div class="card">
                      <div class="card-header" id="check_payments">
                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemOne" aria-controls="itemOne"
                          aria-expanded="true">Chuyển khoản ngân hàng trực tiếp</h5>
                      </div>
                      <div id="itemOne" class="collapse show" aria-labelledby="check_payments"
                        data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Chuyển khoản trực tiếp qua ngân hàng</p>
                        </div>
                      </div>
                    </div> -->
               
                    <div class="card">
                      <label for="pttt" class="card-header" id="check_payments3">
                        <input type="radio" name="pttt" value="tienmat"  data-bs-toggle="collapse" data-bs-target="#itemTwo" aria-controls="itemTwo"
                        aria-expanded="false" required>
                     Thanh toán khi nhận hàng </label>
                      <!-- <div class="card-header" id="check_payments3">
                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemTwo" aria-controls="itemTwo"
                          aria-expanded="false">Thanh toán khi nhận hàng</h5>
                      </div> -->
                      <div id="itemTwo" class="collapse" aria-labelledby="check_payments2"
                        data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Nhận hàng và thành toán bằng tiền mặt.</p>
                        </div>
                      </div>
                    </div>




                    <!-- <div class="card">
                      <div class="card-header" id="check_payments3">
                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemThree" aria-controls="itemTwo"
                          aria-expanded="false">Thanh toán khi nhận hàng</h5>
                      </div>
                      <div id="itemThree" class="collapse" aria-labelledby="check_payments3"
                        data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Nhận hàng và thành toán bằng tiền mặt.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="card">
                      <div class="card-header" id="check_payments4">
                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemThree" aria-controls="itemTwo"
                          aria-expanded="false">PayPal Express Checkout <img src="assets/img/photos/paypal2.webp"
                            width="40" height="26" alt="Image-HasTech"></h5>
                      </div>
                      <div id="itemThree" class="collapse" aria-labelledby="check_payments4"
                        data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Thanh toán bằng VnPay. Bạn phải có tài khoản VnPay để thanh toán.</p>
                        </div>
                      </div>
                    </div> -->
                    <div class="card">
                      <label for="pttt" class="card-header" id="check_payments3">
                        <input type="radio" name="pttt" value="redirect"  data-bs-toggle="collapse" data-bs-target="#itemThree" aria-controls="itemThree"
                        aria-expanded="false" required>
                     Vnpay </label>
                      <!-- <div class="card-header" id="check_payments3">
                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemTwo" aria-controls="itemTwo"
                          aria-expanded="false">Thanh toán khi nhận hàng</h5>
                      </div> -->
                      <div id="itemThree" class="collapse" aria-labelledby="check_payments2"
                        data-bs-parent="#PaymentMethodAccordion">
                        <div class="card-body">
                          <p>Thanh toán qua VnPay</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="p-text">Thông tin của bạn sẽ được sử dụng để cung cấp cho bên vận chuyển, hỗ trợ khách hàng
                    và
                    các mục ở <a href="#/">chính sách bảo mật.</a></p>
                  <div class="agree-policy">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="privacy" class="custom-control-input visually-hidden">
                      <label for="privacy" class="custom-control-label">I have read and agree to the website terms and
                        conditions <span class="required">*</span></label>
                    </div>
                  </div>
                  <input type="submit" name="order" class="btn-theme" value="Đặt hàng">
                </div>
              </div>
            </div>
            <!--== End Order Details Accordion ==-->
          </div>
        </div>
      </form>
    </div>
  </section>
  <!--== End Shopping Checkout Area Wrapper ==-->
</main>