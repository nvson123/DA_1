<div class="main-content">
                <h3 class="title-page">
                    Category
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?url=add-category" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($categories as $category){
                        ?>
                        <tr>
                            <td><?=$category['id']?></td>
                            <td><?=$category['name']?></td>
                            <td><?=$category['description']?></td>
                            <td>
                                <a href="index.php?url=update-category&id=<?=$category['id']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa<a>
                                <a href="index.php?url=delete-category&id=<?=$category['id']?>" class="btn btn-danger" onclick="confirm('Ban co muon xoa khong?')" ><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                
            </div>