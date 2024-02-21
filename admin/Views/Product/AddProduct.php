<div class="main-content">
                <h3 class="title-page">
                    Thêm sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?url=add-product" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sả phẩm">
                    </div>
                    <?php
                        echo (!empty($errors['name']['required'])) ?'<span style="color:red" >'.$errors['name']['required'].'</span>':false;
                        echo (!empty($errors['name']['min'])) ?'<span style="color:red" >'.$errors['name']['min'].'</span>':false;
                        echo (!empty($errors['name']['exists'])) ?'<span style="color:red" >'.$errors['name']['exists'].'</span>':false;
                    ?>
                    <div class="form-group">
                        <label for="category">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example" name="category" >
                            <?php foreach($categorys as $category) { ?>
                            <option value="<?=$category['id']?>"><?=$category['name']?></option>
                            <?php } ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="discount">Giá gốc:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="discount" id="discount" class="form-control" placeholder="Nhập giá gốc">
                        </div>
                    </div>
                    <?php
                        echo (!empty($errors['discount']['required'])) ?'<span style="color:red" >'.$errors['discount']['required'].'</span>':false;
                        echo (!empty($errors['discount']['min'])) ?'<span style="color:red" >'.$errors['discount']['min'].'</span>':false;
                        echo (!empty($errors['discount']['exists'])) ?'<span style="color:red" >'.$errors['discount']['exists'].'</span>':false;
                    ?>
                    <div class="form-group">
                        <label for="price">Giá khuyến mãi:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="price" id="price" class="form-control"
                                placeholder="Giá khuyến mãi">
                        </div>
                    </div>
                    <?php
                        echo (!empty($errors['price']['required'])) ?'<span style="color:red" >'.$errors['price']['required'].'</span>':false;
                        echo (!empty($errors['price']['min'])) ?'<span style="color:red" >'.$errors['price']['min'].'</span>':false;
                        echo (!empty($errors['price']['exists'])) ?'<span style="color:red" >'.$errors['price']['exists'].'</span>':false;
                    ?>
                    <div class="form-group">
                        <label>Mô tả chi tiết:</label>
                        <input class="form-control" name="description" rows="3"
                            placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="addProduct" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>