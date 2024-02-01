<main class="main-content">
    <?php
    if (isset($listOrder) && (is_array($listOrder))) {
        extract($listOrder);
    }

    ?>
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="assets/img/photos/bg3.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Shopping Cart</h2>
                        <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Đơn hàng của bạn<br><br>Mã đơn hàng của bạn: SG
                                    <?= $id ?>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="shopping-cart-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart-form table-responsive">
                        <form action="#" method="post">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th class="product-name">Tên sản phảm</th>
                                        <th class="product-thumb">Ảnh sản phẩm </th>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //code wrote by nv son and youtube
                                    



                                    $ttdh = get_ttdh($status);
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($billCT as $bill) {

                                        extract($bill);
                                        $hinh = $img_path . $image;
                                        $linkSP = "index.php?act=ctsp&id=" . $id_product;
                                        $tong += $thanhtien;


                                        echo ' 
                    <tr class="cart-product-item">
                    
                   
                    <td class="product-name">
                      <h4 class="title"><a href="' . $linkSP . '">' . $name . '</a></h4>
                    </td>
                    <td class="product-thumb">
                    <a href="' . $linkSP . '">
                      <img src="' . $hinh . '" width="90px" height="110px" alt="Image-HasTech">
                    </a>
                  </td>
                    <td class="product-price">
                      <span class="price"></span>
                    </td>
                    <td class="product-price">
                    <span class="price">' . $price . '</span>
                  </td>
                    <td class="product-quantity">
                      <div>
                      <span>' . $soluong . '</span>
                      </div>
                    </td>
                    <td class="product-subtotal">
                      <span class="price">' . $thanhtien . '</span>
                    </td>
                  </tr> ';
                                        $i += 1;
                                    }
                                    ?>
                                    <tr class="actions">
                                        <td class="border-0" colspan="6">
                                            <a href="index.php?act=shop" class="btn-theme btn-flat">Continue
                                                Shopping</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-gutter-50">
                <div class="col-md-6 col-lg-4">
                    <div id="CategoriesAccordion" class="shipping-form-calculate">
                        <div class="section-title-cart">
                            <h5 class="title">Địa chỉ của bạn</h5>
                        </div>
                        <div id="CategoriesTwo" class="collapse show" data-bs-parent="#CategoriesAccordion">
                            <div class="row row-gutter-50">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Họ tên:
                                            <?= $listOrder['fullname'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Địa chỉ:
                                            <?= $listOrder['address'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Số điện
                                            thoại:
                                            <?= $listOrder['phone_number'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Ngày đặt
                                            mua:
                                            <?= $listOrder['order_date'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Trạng thái
                                        đơn hàng: <?=$ttdh?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="shipping-form-coupon">
                        <!-- <div class="section-title-cart">
              <h5 class="title">Coupon Code</h5>
              <div class="desc">
                <p>Enter your coupon code if you have one.</p>
              </div>
            </div> -->
                        <!-- <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="couponCode" class="visually-hidden">Coupon Code</label>
                                        <input type="text" id="couponCode" class="form-control"
                                            placeholder="Enter your coupon code..">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="coupon-btn">Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="shipping-form-cart-totals">
                        <div class="section-title-cart">
                            <h5 class="title">Tổng giá trị đơn hàng</h5>
                        </div>
                        <div class="cart-total-table">
                            <table class="table">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <p class="value">Tổng tiền: </p>
                                        </td>
                                        <td>
                                            <p class="price">$
                                                <?= $tong ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <p class="value">Phí vận chuyển: </p>
                                        </td>
                                        <td>
                                            <p class="price">
                                                Miễn phí
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <p class="value">Phương thức thanh toán: </p>
                                        </td>
                                        <td>
                                            <p class="price">
                                                Tiền mặt
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>
                                            <p class="value">Tổng</p>
                                        </td>
                                        <td>
                                            <p class="price">$
                                                <?= $tong ?>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a class="btn-theme btn-flat" href="index.php">Trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
</main>