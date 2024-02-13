<div class="main-content">
                <h3 class="title-page">
                    Feedback
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Product</th>
                            <th>Content</th>
                            <th>Creat at</th>
                            <th>Update at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($feedbacks as $feedback){
                        ?>
                        <tr>
                            <td><?=$feedback['id']?></td>
                            <td><?=$feedback['username']?></td>
                            <td><?=$feedback['fullname']?></td>
                            <td><?=$feedback['email']?></td>
                            <td><?=$feedback['phone_number']?></td>
                            <td><?=$feedback['address']?></td>
                            <td><?=$feedback['name']?></td>
                            <td><?=$feedback['content']?></td>
                            <td><?=$feedback['created_at']?></td>
                            <td><?=$feedback['updated_at']?></td>
                            <td>
                                <a href="index.php?url=delete-feedback&id=<?=$feedback['id']?>" class="btn btn-danger" onclick="confirm('Ban co muon xoa khong?')"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Product</th>
                            <th>Content</th>
                            <th>Creat at</th>
                            <th>Update at</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>