      
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <?php if($this->session->flashdata('error')!=''){?>
                <center>
                    <div class="alert alert-danger" > <strong><?php echo @$this->session->flashdata('error');?></strong> </div>
                </center>
            <?php }?>
          <div class="col-lg-12">
            <h3 align="center">Entry New Admin</h3>
              <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/admin_user/insert_admin">
                  <div class="form-group">
                    <label for="UserName"><b>UserName:</b></label>
                    <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username">
                  </div>
                  <div class="form-group">
                    <label for="Password"><b>Password:</b></label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="Email"><b>Email:</b></label>
                    <input type="text" class="form-control" id="admin_email" placeholder="Enter Email" name="admin_email">
                  </div>
                  <div class="form-group">
                    <label for="Image"><b>Image:</b></label>
                    <input type="file" class="dropify" data-height="300" / name="admin_image" id="admin_image">
                  </div>
                  <div class="form-group">
                  <label for="exampleSelectSuccess"><b>Status:</b></label>
                  <select class="js-example-basic-single"  style="width:100%" id="status" name="status">
                    <option value="0">Select</option>
                    <option value="1">Active</option>
                    <option value="2">Deactive</option>
                  </select>
                </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-form-label"><b>Permission Panel</b></label>
                            <div class="col-sm-10">
                             
                                <h5><b> Manage Portal User</b></h5>
                                        
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="customer" class="form-check-input" checked value="1">
                                        Customer
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                             
                                <h5><b>  Product Management  </b></h5>
                                        
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="categories" class="form-check-input" checked value="1">
                                        Categories
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="product" class="form-check-input" checked value="1">
                                        Product
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="product_review" class="form-check-input" checked value="1">
                                        Product Review
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                                                           
                                <h5><b>  Order Management  </b></h5> 
                                
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="orders" class="form-check-input" checked value="1">
                                        Sales Order
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                
                                
                                <h5><b>  General Section  </b></h5>
                                
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="slider" class="form-check-input" checked value="1">
                                        Slider
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="cms_pages" class="form-check-input" checked value="1">
                                        CMS Page
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="newsletter" class="form-check-input" checked value="1">
                                        Newsletter
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="visitor_enquery" class="form-check-input" checked value="1">
                                        Visitors List
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="contact" class="form-check-input" checked value="1">
                                        Contacts List
                                        <i class="input-helper"></i>
                                    </label>
                                </div>

                                <h5><b>Settings</b></h5>
                                
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="general_settings" class="form-check-input" checked value="1">
                                        General Settings
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="admin_users" class="form-check-input" checked value="1">
                                        Admin User
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                  <button type="submit" class="btn btn-success mr-2" id="insert_admin">Submit</button>
                  <button class="btn btn-light">Cancel</button>
              </form>
          </div>
        </div>  
      </div>
    </div>