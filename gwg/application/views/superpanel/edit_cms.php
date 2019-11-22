      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 style="color:blue" align="center"><b>Update CMS</b></h1>
              <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/cms/update_cms/<?php echo $cms[0]->id?>">
                    <div class="form-group">
                      <label for="Page Name">Page Name<em style="color:red">*</em>:</label>
                      <input type="text" class="form-control" name="page_name" id="page_name" value="<?php echo $cms[0]->page_name?>">
                    </div>
                    <div class="form-group">
                      <label for="Page Title">Page Title<em style="color:red">*</em>:</label>
                      <input type="text" class="form-control" name="page_title" id="page_title" value="<?php echo $cms[0]->page_title?>">
                    </div>
                    <div class="form-group">
                      <label for="Slug">Slug<em style="color:red">*</em>:</label>
                      <input type="text" class="form-control" name="slug" id="slug" readonly value="<?php echo $cms[0]->slug?>">
                    </div>
                    <div class="form-group">
                      <label for="Description">Description:</label>
                      <textarea id='tinyMceExample' name="description"><?php echo $cms[0]->description?></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label for="Meta Keyword">Meta Keyword:</label>
                      <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="<?php echo $cms[0]->meta_keyword?>">
                    </div>
                    <div class="form-group">
                      <label for="Meta Description">Meta Description:</label>
                      <textarea class="form-control" name="meta_description" rows="4" id="meta_description"><?php echo $cms[0]->meta_description?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Image"><b>Image:</b></label>
                      <div class="row">
                      <div class="col-sm-6">
                      <img src="<?php echo $cms[0]->image?>"class="img-lg rounded" style="width:160px;height:100px;">
                      </div>
                      <div class="col-sm-6">  
                      <input type="file" class="dropify" name="userfile" data-height="150" / id="cms_img">
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" id="status" name="status">
                      <option value="1" <?php if($cms[0]->status == 1){ echo 'selected';} ?>>Active</option>
                      <option value="0" <?php if($cms[0]->status == 0){ echo 'selected';} ?>>Deactive</option>
                    </select>
                  </div>
                    <button type="submit" class="btn btn-success mr-2" id="edit_cms">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>