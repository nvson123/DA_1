<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?url=add-product" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Best saller</th>
                            <th>Total quantity</th>
                            <th>Creat at</th>
                            <th>Update at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($products as $product){
                        ?>
                        <tr>
                            <td><?=$product['id']?></td>
                            <td><?=$product['name_category']?></td>
                            <td><?=$product['name']?></td>
                            <td><?=$product['price']?></td>
                            <td><?=$product['discount']?></td>
                            <td><img src="<?=$product['image']?>" alt="" srcset="" width="100px"></td>
                            <td><?=$product['description']?></td>
                            <td><?=$product['best_saler']?></td>
                            <td><?=$product['total_quantity']?></td>
                            <td><?=$product['created_at']?></td>
                            <td><?=$product['updated_at']?></td>
                            <td>
                                <a href="index.php?url=add-variant&id=<?=$product['id']?>" class="btn btn-warning" style="background-color:green;" >Add variant<a>
                                <a href="index.php?url=update-product&id=<?=$product['id']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa<a>
                                <a href="index.php?url=delete-product&id=<?=$product['id']?>" class="btn btn-danger" onclick="confirm('Ban co muon xoa khong?')"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Best saller</th>
                            <th>Total quantity</th>
                            <th>Creat at</th>
                            <th>Update at</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>