      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">

              <h1 style="color:blue" align="center"><b>Entry Category</b></h1>
                <?php if($this->session->flashdata('success')!=''){?>
                    <center>
                      <div class="alert alert-success" > <strong><?php echo @$this->session->flashdata('success');?></strong> </div>
                    </center>
                  <?php }?>
                  <?php if($this->session->flashdata('error')!=''){?>
                    <center>
                      <div class="alert alert-danger" > <strong><?php echo @$this->session->flashdata('error');?></strong> </div>
                    </center>
               <?php }?>
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/categorie/insert_category">
              
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Select Category<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="category_parent_Id" id="category_parent_Id">
                        <option>---Select---</option> 
                        <option value="0">Parent</option>
                        <?php foreach($category as $c){?>
                        <option value="<?=$c->category_Id?>"><?php echo $c->category_name;?></option> 
                        <?php }?> 
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="Category Name"><b>Category Name<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="category_name" placeholder="Enter Category Name" name="category_name">
                    </div>
                    <div class="form-group">
                      <label for="Category Slug"><b>Category Slug<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="category_slug" placeholder="Enter Category Slug" name="category_slug">

                    </div>
                    <div class="form-group">
                      <label for="Category Description"><b>Category Description:</b></label>
                      <textarea class="form-control" id="category_description" rows="5" name="category_description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Product Description"><b>Category Image:</b></label>
                      <input type="file" class="dropify" name="category_img" data-height="300"/ id="category_img">
                    </div>
                    <div class="form-group">
                      <label for="Meta Keyword"><b>Meta Keyword:</b></label>
                      <input type="text" class="form-control" id="meta_keyword" placeholder="Enter Meta Keyword" name="meta_keyword">
                    </div>
                    <div class="form-group">
                      <label for="Meta Description"><b>Meta Description:</b></label>
                      <textarea class="form-control" id="meta_description" rows="4" name="meta_description"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" id="status" name="status">
                      <option value="0">---Select---</option>
                      <option value="1">Active</option>
                      <option value="2">Deactive</option>
                    </select>
                  </div>
                    <button type="submit" class="btn btn-success mr-2" id="insert_category">Submit</button>
                    <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/categorie';">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>