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
            <form action="index.php?act=dangky" method="POST">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="username">Username <span class="required">*</span></label>
                    <input id="username" name="username" class="form-control" type="text">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="username">Address <span class="required">*</span></label>
                    <input name="address" class="form-control" type="text" placeholder="Nhập địa chỉ">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="tel">So dien thoai <span class="required">*</span></label>
                    <input name="tel" class="form-control" type="text" placeholder="Nhâp số điện thoại">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="email">Email address <span class="required">*</span></label>
                    <input id="email" name="email" class="form-control" type="email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="password">Password <span class="required">*</span></label>
                    <input id="password" name="password" class="form-control" type="password">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group mb--0">
                    <input type="submit" name="dangky" class="btn-register" value="Đăng ký">

                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End My Account Area Wrapper ==-->
</main>