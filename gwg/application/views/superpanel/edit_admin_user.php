      
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 align="center">Update Admin User</h3>
              <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/admin_user/update_admin_user/<?php echo $admin[0]->id?>">
                  <div class="form-group">
                    <label for="UserName"><b>UserName:</b></label>
                    <input type="text" class="form-control" id="username" value="<?php echo $admin[0]->username?>" name="username">
                  </div>
                  <div class="form-group">
                    <label for="Password"><b>Password:</b></label>
                    <input type="password" class="form-control" id="password"  name="password">
                  </div>
                  <div class="form-group">
                    <label for="Email"><b>Email:</b></label>
                    <input type="email" class="form-control" id="admin_email" value="<?php echo $admin[0]->admin_email?>" name="admin_email">
                  </div>
                  <div class="form-group">
                      <label for="Image"><b>Image:</b></label>
                      <div class="row">
                      <div class="col-lg-6">
                      <img src="<?php echo $admin[0]->admin_image?>"class="img-lg rounded" style="width:250px;height:150px;">
                      </div>
                      <div class="col-lg-6">  
                      <input type="file" class="dropify" name="admin_image" data-height="150"/ id="admin_image">
                      </div>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status:</b></label>
                    <select class="js-example-basic-single"  style="width:100%" id="status" name="status">
                      <option value="1" <?php if($admin[0]->status == 1){ echo 'selected';} ?>>Active</option>
                      <option value="0" <?php if($admin[0]->status == 0){ echo 'selected';} ?>>Deactive</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-success mr-2" id="update_admin_user">Update</button>
                  <button class="btn btn-light">Cancel</button>
              </form>
          </div>
        </div>  
      </div>
    </div>