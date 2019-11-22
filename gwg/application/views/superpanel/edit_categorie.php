      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 style="color:blue" align="center"><b>Update Category</b></h1>
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/categorie/update_category/<?php echo $category[0]->category_Id?>">

                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Select Category<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="category_parent_Id" id="category_parent_Id">
                        <option>---Select---</option> 
                        <?php foreach($category as $c){?>
                        <option value="<?=$c->category_Id?>"><?php echo $c->category_name;?></option> 
                        <?php }?> 
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="Category Name"><b>Category Name<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $category[0]->category_name ?>">
                    </div>
                    <div class="form-group">
                      <label for="Category Slug"><b>Category Slug<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" name="category_slug" id="category_slug" readonly value="<?php echo $category[0]->category_slug ?>">
                    </div>
                    <div class="form-group">
                      <label for="Category Description"><b>Category Description:</b></label>
                      <textarea class="form-control" id="category_description" rows="5" name="category_description"><?php echo $category[0]->category_description ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Product Description"><b>Category Image:</b></label>
                      <div class="row">
                      <div class="col-sm-6">
                      <img src="<?php echo $category[0]->category_img?>"class="img-lg rounded" style="width:250px;height:150px;">
                      </div>
                      <div class="col-sm-6">  
                      <input type="file" class="dropify" name="userfile" data-height="150"/ id="category_img">
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Meta Keyword"><b>Meta Keyword:</b></label>
                      <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="<?php echo $category[0]->meta_keyword?>">
                    </div>
                    <div class="form-group">
                      <label for="Meta Description"><b>Meta Description:</b></label>
                      <textarea class="form-control" name="meta_description" rows="4" id="meta_description"><?php echo $category[0]->meta_description?></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single"style="width:100%" name="status" id="status">
                      <option value="1" <?php if($category[0]->status == 1){ echo 'selected';} ?>>Active</option>
                      <option value="0" <?php if($category[0]->status == 0){ echo 'selected';} ?>>Deactive</option>
                    </select>
                  </div>
                    <button type="submit" class="btn btn-success mr-2" id="edit_category">Update</button>
                    <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/categorie';">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>