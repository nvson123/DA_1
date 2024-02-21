<div class="main-content">
<h3 class="title-page">
                    Add category
                </h3>
                
                <form class="addPro" action="index.php?url=add-category" method="POST">
                    <div class="form-group">
                        <label for="name">Name category:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                    </div>
                    <?php
                        echo (!empty($errors['required'])) ?'<span style="color:red" >'.$errors['required'].'</span>':false;
                        echo (!empty($errors['min'])) ?'<span style="color:red" >'.$errors['min'].'</span>':false;
                        echo (!empty($errors['exists'])) ?'<span style="color:red" >'.$errors['exists'].'</span>':false;
                    ?>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3"
                            placeholder="" style="height: 78px;"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="addCategory" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>