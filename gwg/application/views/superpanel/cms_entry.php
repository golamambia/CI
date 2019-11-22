      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 style="color:blue" align="center"><b>Entry CMS</b></h1>
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
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/cms/insert_cms">
                    <div class="form-group">
                      <label for="Page Name"><b>Page Name<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="page_name" placeholder="Enter Page Name" name="page_name">
                    </div>
                    <div class="form-group">
                      <label for="Page Title"><b>Page Title<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="page_title" placeholder="Enter Page Title" name="page_title">
                    </div>
                    <div class="form-group">
                      <label for="Slug"><b>Slug<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="category_slug" placeholder="Enter Slug" name="slug">
                    </div>
                    <div class="form-group">
                      <label for="Description"><b>Description:</b></label>
                      <textarea id='tinyMceExample' name="description" class=""></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label for="Meta Keyword"><b>Meta Keyword:</b></label>
                      <input type="text" class="form-control" id="meta_keyword" placeholder="Enter Meta Keyword" name="meta_keyword">
                    </div>
                    <div class="form-group">
                      <label for="Meta Description"><b>Meta Description:</b></label>
                      <textarea class="form-control" id="meta_description" rows="4" name="meta_description" ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Image"><b>Image:</b></label>
                      <input type="file" class="dropify" data-height="300" / name="image" id="cms_img">
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="status" id="status">
                      <option value="0">Select</option>
                      <option value="1">Active</option>
                      <option value="2">Deactive</option>
                    </select>
                  </div>
                    <button type="submit" class="btn btn-success mr-2" id="insert_cms">Submit</button>
                    <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/cms';">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>