<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Creat at</th>
                            <th>Update at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($users as $user){
                        ?>
                        <tr>
                            <td><?=$user['id']?></td>
                            <td><?=$user['username']?></td>
                            <td><?=$user['password']?></td>
                            <td><?=$user['fullname']?></td>
                            <td><?=$user['email']?></td>
                            <td><?=$user['phone_number']?></td>
                            <td><?=$user['address']?></td>
                            <td><?=$user['role']?></td>
                            <td><?=$user['created_at']?></td>
                            <td><?=$user['updated_at']?></td>
                            <td>
                                <a href="index.php?url=delete-user&id=<?=$user['id']?>" class="btn btn-danger" onclick="confirm('Ban co muon xoa khong?')"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Creat at</th>
                            <th>Update at</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>