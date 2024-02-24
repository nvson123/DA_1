<main class="main-content">
  <!--== Start Page Header Area Wrapper ==-->
  <div class="page-header-area" data-bg-img="assets/img/photos/bg3.webp">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="page-header-content">
            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Product Details</h2>
            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="breadcrumb-sep">//</li>
                <li>Product Details</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Page Header Area Wrapper ==-->

  <!--== Start Product Single Area Wrapper ==-->
  <section class="product-area product-single-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="product-single-item">
            <div class="row">
              <div class="col-xl-6">
                <!--== Start Product Thumbnail Area ==-->
                <div class="product-single-thumb">
                  <div class="swiper-container single-product-thumb single-product-thumb-slider">
                    <div class="swiper-wrapper">

                      <?php
                      extract($product);

                      $hinh = $img_path . $image;
                      ?>


                      <div class="swiper-slide">
                        <a class="lightbox-image" data-fancybox="gallery" href="<?= $hinh ?>">
                          <img src="<?= $hinh ?>" width="570" height="541" alt="Image-HasTech">
                        </a>
                      </div>
                      <!-- <div class="swiper-slide">
                          <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/2.webp">
                            <img src="assets/img/shop/product-single/2.webp" width="570" height="541" alt="Image-HasTech">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.webp">
                            <img src="assets/img/shop/product-single/3.webp" width="570" height="541" alt="Image-HasTech">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/4.webp">
                            <img src="assets/img/shop/product-single/4.webp" width="570" height="541" alt="Image-HasTech">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/5.webp">
                            <img src="assets/img/shop/product-single/5.webp" width="570" height="541" alt="Image-HasTech">
                          </a>
                        </div> -->
                    </div>
                  </div>
                  <div class="swiper-container single-product-nav single-product-nav-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="<?= $hinh ?>" width="127" height="127" alt="Image-HasTech">
                      </div>
                      <!-- <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-2.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-3.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-4.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-5.webp" width="127" height="127" alt="Image-HasTech">
                        </div> -->
                    </div>
                  </div>
                </div>
                <!--== End Product Thumbnail Area ==-->
              </div>
              <div class="col-xl-6">
                <!--== Start Product Info Area ==-->
                <div class="product-single-info">
                  <h3 class="main-title">
                    <?= $name ?>
                  </h3>
                  <div class="prices">
                    <span class="price-old" style="text-decoration: line-through">
                      <?= $price ?>
                    </span>
                    <span class="price">
                      <?= $price * (100 - $discount) / 100 ?>
                    </span>
                  </div>
                  <div class="rating-box-wrap">
                    <div class="rating-box">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="review-status">
                      <a href="javascript:void(0)">(5 Customer Review)</a>
                    </div>
                  </div>
                  <p>
                    <?= $description ?>
                  </p>
                  <div class="product-color">
                    <h6 class="title">Color</h6>
                    <ul class="color-list">
                      <!-- <li data-bg-color="#586882"></li>
                      <li class="active" data-bg-color="#505050"></li>
                      <li data-bg-color="#73707a"></li>
                      <li data-bg-color="#c7bb9b"></li> -->

                      <?php
                      if (isset($list_variant) && (is_array($list_variant))) {
                        foreach ($list_variant as $variant) {
                          extract($variant);

                          echo '<button style="background-color:' . $color . '" class="select-button1 selected1" onclick="selectButton1(this)"></button>';




                        }
                      }
                      ?>
                    </ul>
                  </div>
                  <div class="product-size">
                    <h6 class="title">Size</h6>
                    <ul class="size-list">


                      <?php
                      //code này để load biến thể của sản phẩm
                      if (isset($list_variant) && (is_array($list_variant))) {
                        foreach ($list_variant as $variant) {
                          extract($variant);
                          echo "
                          <button class=" . 'select-button selected' . " onclick=" . 'selectButton(this)' . ">$size</button>
                          
                          ";

                        }
                      }
                      ?>

                    </ul>
                  </div>
                  <div class="product-quick-action">
                    <div class="qty-wrap">
                      <div class="pro-qty">
                        <input type="text" title="Quantity" value="1">
                      </div>
                    </div>
                    <form action="index.php?act=addToCart" method="POST">
                      <input type="submit" name="addtocart" class="btn-theme" value="Thêm vào giỏ hàng">
                      <input type="hidden" name="id" value="<?= $id ?>">
                      <input type="hidden" name="name" value="<?= $name ?>">
                      <input type="hidden" name="price" value="<?= $price * (100 - $discount) / 100 ?>">
                      <input type="hidden" name="img" value="<?= $image ?>">
                      <!-- <input type="hidden"name="quantity" value=""> -->
                    </form>

                  </div>
                  <div class="product-wishlist-compare">
                    <a href="shop-wishlist.html"><i class="pe-7s-like"></i>Add to Wishlist</a>
                    <a href="shop-compare.html"><i class="pe-7s-shuffle"></i>Add to Compare</a>
                  </div>
                  <div class="product-info-footer">
                    <h6 class="code"><span>Code :</span>Ch-256xl</h6>
                    <div class="social-icons">
                      <span>Share</span>
                      <a href="#/"><i class="fa fa-facebook"></i></a>
                      <a href="#/"><i class="fa fa-dribbble"></i></a>
                      <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                  </div>
                </div>
                <!--== End Product Info Area ==-->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="product-review-tabs-content">
            <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
              <li role="presentation">
                <a class="active" id="information-tab" data-bs-toggle="pill" href="#information" role="tab"
                  aria-controls="information" aria-selected="true">Information</a>
              </li>
              <li role="presentation">
                <a id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description"
                  aria-selected="false">Description</a>
              </li>
              <li role="presentation">
                <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews"
                  aria-selected="false">Reviews <span>(05)</span></a>
              </li>
            </ul>
            <div class="tab-content product-tab-content" id="ReviewTabContent">
              <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                <div class="product-information">
                  <p>
                    <?= $description ?>
                  </p>
                </div>
              </div>
              <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="product-description">
                  <p>
                    <?= $description ?>
                  </p>
                </div>
              </div>
              <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="product-review-content">
                  <div class="review-content-header">
                    <h3>Customer Reviews</h3>
                    <div class="review-info">
                      <ul class="review-rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star-o"></li>
                      </ul>
                      <span class="review-caption">Based on 5 reviews</span>
                      <span class="review-write-btn">Write a review</span>
                    </div>
                  </div>

                  <!--== Start Reviews Form Item ==-->
                  <div class="reviews-form-area">
                    <h4 class="title">Write a review</h4>
                    <div class="reviews-form-content">
                      <form action="#">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="for_name">Name</label>
                              <input id="for_name" class="form-control" type="text" placeholder="Enter your name">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="for_email">Email</label>
                              <input id="for_email" class="form-control" type="email"
                                placeholder="john.smith@example.com">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <span class="title">Rating</span>
                              <ul class="review-rating">
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="for_review-title">Review Title</label>
                              <input id="for_review-title" class="form-control" type="text"
                                placeholder="Give your review a title">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="for_comment">Body of Review (1500)</label>
                              <textarea id="for_comment" class="form-control"
                                placeholder="Write your comments here"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-submit-btn">
                              <button type="submit" class="btn-submit">Post comment</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!--== End Reviews Form Item ==-->

                  <div class="reviews-content-body">
                    <!--== Start Reviews Content Item ==-->
                    <div class="review-item">
                      <ul class="review-rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                      </ul>
                      <h3 class="title">Awesome shipping service!</h3>
                      <h5 class="sub-title"><span>Nantu Nayal</span> no <span>Sep 30, 2022</span></h5>
                      <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.</p>
                      <a href="#/">Report as Inappropriate</a>
                    </div>
                    <!--== End Reviews Content Item ==-->

                    <!--== Start Reviews Content Item ==-->
                    <div class="review-item">
                      <ul class="review-rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star-o"></li>
                      </ul>
                      <h3 class="title">Low Quality</h3>
                      <h5 class="sub-title"><span>Oliv hala</span> no <span>Sep 30, 2022</span></h5>
                      <p>My Favorite White Sneakers From Splurge To Save the 1500s is reproduced below for those
                        interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
                        reproduced in their exact original form, accompanied by English versions from the 1914
                        translation by H. Rackham.</p>
                      <a href="#/">Report as Inappropriate</a>
                    </div>
                    <!--== End Reviews Content Item ==-->

                    <!--== Start Reviews Content Item ==-->
                    <div class="review-item">
                      <ul class="review-rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                      </ul>
                      <h3 class="title">Excellent services!</h3>
                      <h5 class="sub-title"><span>Halk Marron</span> no <span>Sep 30, 2022</span></h5>
                      <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                        1.10.32.</p>
                      <a href="#/">Report as Inappropriate</a>
                    </div>
                    <!--== End Reviews Content Item ==-->

                    <!--== Start Reviews Content Item ==-->
                    <div class="review-item">
                      <ul class="review-rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star-o"></li>
                      </ul>
                      <h3 class="title">Price is very high</h3>
                      <h5 class="sub-title"><span>Musa</span> no <span>Sep 30, 2022</span></h5>
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old.</p>
                      <a href="#/">Report as Inappropriate</a>
                    </div>
                    <!--== End Reviews Content Item ==-->

                    <!--== Start Reviews Content Item ==-->
                    <div class="review-item">
                      <ul class="review-rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star-o"></li>
                      </ul>
                      <h3 class="title">Normal</h3>
                      <h5 class="sub-title"><span>Muhammad</span> no <span>Sep 30, 2022</span></h5>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour</p>
                      <a href="#/">Report as Inappropriate</a>
                    </div>
                    <!--== End Reviews Content Item ==-->
                  </div>

                  <!--== Start Reviews Pagination Item ==-->
                  <div class="review-pagination">
                    <span class="pagination-pag">1</span>
                    <span class="pagination-pag">2</span>
                    <span class="pagination-next">Next »</span>
                  </div>
                  <!--== End Reviews Pagination Item ==-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Product Single Area Wrapper ==-->

  <!--== Start Product Area Wrapper ==-->
  <section class="product-area product-best-seller-area">
    <div class="container pt--0">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h3 class="title">Sản phẩm cùng loại</h3>
            <div class="desc">
              <p>Sản phẩm này có thể bạn sẽ thích</p>
            </div>
          </div>
        </div>
      </div>

      <?php
      $dmProducts = loadAll_dmProducts($category_id);
      ?>
      <div class="row">
        <div class="col-12">
          <div class="product-slider-wrap">
            <div class="swiper-container product-slider-col4-container">
              <div class="swiper-wrapper">
                <?php
                foreach ($dmProducts as $sp) {
                  extract($sp);
                  $hinh = $img_path . $image;
                  $linkSP = "index.php?act=ctsp&id=" . $id;
                  echo '<div class="swiper-slide">
                  <!--== Start Product Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="'.$linkSP.'">
                          <img src="'.$hinh.'" width="270" height="274" alt="Image-HasTech">
                        </a>
                        <div class="product-flag">
                          <ul>
                            <li class="discount">'.$discount.'</li>
                          </ul>
                        </div>
                        <div class="product-action">
                          <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                          <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                          <button type="button" class="btn-product-quick-view-open">
                            <i class="fa fa-arrows"></i>
                          </button>
                          <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                        </div>
                        <a class="banner-link-overlay" href="shop.html"></a>
                      </div>
                      <div class="product-info">
                        <div class="category">
                          <ul>
                            <li><a href="shop.html">'.$category_name.'</a></li>
                           
                          </ul>
                        </div>
                        <h4 class="title"><a href="single-product.html">'.$name.'</a></h4>
                        <div class="prices">
                          <span class="price-old">$'.$price.'</span>
                          <span class="sep">-</span>
                          <span class="price">$' . ($price * (100 - $discount) / 100) . '</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End prPduct Item ==-->
                </div>';
                }
                ?>
                

              </div>
            </div>
            <!--== Add Swiper Arrows ==-->
            <div class="product-swiper-btn-wrap">
              <div class="product-swiper-btn-prev">
                <i class="fa fa-arrow-left"></i>
              </div>
              <div class="product-swiper-btn-next">
                <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Product Area Wrapper ==-->
</main>