<div class="main-content">
<h3 class="title-page">
                Add variant
                </h3>
                <?php foreach($product as $pro){}?>
                <form action="index.php?url=add-variant" method="POST">
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
                    <input type="hidden" name="productID" value="<?=$pro['id']?>">
                    <div class="form-group">
                        <button type="submit" name="addVariant" class="btn btn-primary">Add Variant</button>
                    </div>
                </form>
            </div>