<div class="main-content">
                <h3 class="title-page">
                    Update Category
                </h3>
                
                <form class="addPro" action="index.php?url=update-category" method="POST" >
                    <?php
                        foreach($categories as $category){
                    
                    ?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?=$category['name']?>" >
                    </div>
                    <div class="form-group">
                        <label>Des:</label>
                        <input class="form-control" name="description" rows="3"
                            placeholder="" style="height: 78px;" value="<?=$category['description']?>" >
                    </div>
                    <input type="hidden" name="id" value="<?=$category['id']?>" >
                    <div class="form-group">
                        <button type="submit" name="updateCategory" class="btn btn-primary">Update</button>
                    </div>
                    <?php } ?>
                </form>
            </div>