<div class="main-content">
                <h3 class="title-page">
                    Add New Product
                </h3>
                
                <form class="addPro" action="index.php?url=add-product" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Image:</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name product:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sả phẩm">
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
                            <input type="number" name="discount" id="discount" class="form-control" placeholder="Nhập giá gốc">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="price" id="price" class="form-control"
                                placeholder="Giá khuyến mãi">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Description:</label>
                        <input class="form-control" name="description" rows="3"
                            placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="addProduct" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>