<div class="main-content">
                <h3 class="title-page">
                    Update product
                </h3>
                
                <form class="addPro" action="index.php?url=update-product" method="POST" enctype="multipart/form-data">
                    <?php foreach ($product as $pro) { ?>
                    <div class="form-group">
                        <label for="exampleInputFile">Image:</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sả phẩm" value="<?=$pro['name']?>" >
                    </div>
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select class="form-select" aria-label="Default select example" name="category" >
                            <?php foreach($categorys as $category) { ?>
                            <option value="<?=$category['id']?>"><?=$category['name']?></option>
                            <?php } ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="discount">Discount:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="discount" id="discount" class="form-control" placeholder="Nhập giá gốc" value="<?=$pro['discount']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="price" id="price" class="form-control" placeholder="Giá khuyến mãi" value="<?=$pro['price']?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Description:</label>
                        <input class="form-control" name="description" rows="3"placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;" value="<?=$pro['d']?>">
                    </div>
                    <div class="form-group">
                        <label for="size">Size:</label>
                        <input type="text" class="form-control" name="size" id="size" placeholder="Nhập size">
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" name="color" id="color" placeholder="Nhập color">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Nhập color">
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <button type="submit" name="updateProduct" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>