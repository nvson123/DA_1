
            <div class="main-content">
                <h3 class="title-page">
                    Dashboards
                </h3>
                <section class="statistics row">
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="products.html">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng sản phẩm
                                    </h5>
                                </div>
                                <span class="widget-numbers">
                                    <?php
                                        foreach ($totalProduct as $value)
                                        {
                                            echo $value['total_product'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="user.html">
                            <div class="card mb-3 widget-chart">

                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng thành viên
                                    </h5>
                                </div>
                                <span class="widget-numbers">
                                    <?php
                                        foreach ($totalUser as $value)
                                        {
                                            echo $value['total_user'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="caterogies.html">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng danh mục
                                    </h5>
                                </div>
                                <span class="widget-numbers">
                                    <?php
                                        foreach ($totalCategory as $value)
                                        {
                                            echo $value['total_category'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="#">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng doanh mục
                                    </h5>
                                </div>
                                <span class="widget-numbers">
                                    <?php
                                        foreach ($totalCategory as $value)
                                        {
                                            echo $value['total_category'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>
                </section>
                <section class="row">
                    <div class="col-sm-12 col-md-6 col xl-6">
                        <div class="card chart">
                            <form action="index.php" method="POST">
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" placeholder="Username"
                                        aria-label="Username" name="startDate">
                                    <span class="input-group-text">Đến ngày</span>
                                    <input type="date" class="form-control" placeholder="Server" aria-label="Server" name="endDate">
                                    <button type="submit" class="btn btn-primary" name="listOrderDate" >Xem</button>
                                </div>
                            </form>
                            <p>Tổng doanh thu trong 7 ngày qua:
                                <?php foreach ($weekRevenue as $value){ ?>
                                <span><?=$value['total_money']?></span>
                                <?php }?>
                            </p>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>#</th>
                                    <th>Ngày</th>
                                    <th>Doanh thu</th>
                                </thead>
                                <tbody>
                                <?php foreach ($revenues as $key => $arrayValue ){ ?>
                                    <tr>
                                        <td></td>
                                        <td><?=$key?></td>
                                        <?php foreach ($arrayValue as $item =>$value ) {?>
                                            <td><?= $value['revenue']?></td>
                                        <?php }?>    
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div class="card chart">
                            <h4>Đơn hàng mới</h4>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>Mã đơn hàng</th>
                                    <th>Trạng thái</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GIA001</td>
                                        <td>Chờ duyệt</td>
                                    </tr>
                                    <tr>
                                        <td>GIA002</td>
                                        <td>Đã duyệt</td>
                                    </tr>
                                    <tr>
                                        <td>GIA003</td>
                                        <td>Chờ TT</td>
                                    </tr>
                                    <tr>
                                        <td>GIA004</td>
                                        <td>Đã duyệt</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div class="card chart">
                            <h4>Khách hàng mới</h4>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>#</th>
                                    <th>Username</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>giangcoder1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>giangcoder2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>giangcoder3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
           