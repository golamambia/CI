               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Global Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Change Password</span></li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </br>
             <div class="row">
             <div class="col-lg-12">
                       <form action="<?php echo base_url();?>superpanel/change_password/update_password" method="post">
                          <input type="hidden" name="old_password" value="<?=$change_pass[0]->password;?>">
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label"><b>Current Password:</b></label>
                              </div>
                              <div class="col-lg-8">
                                <input class="form-control"  name="old_pass" id="old_pass" type="text" placeholder="Type current password..">
                                <span id="er1" class="mandatory"></span> </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label"><b>New Password:</b></label>
                              </div>
                              <div class="col-lg-8">
                                <input class="form-control"  name="password" id="password" type="text" placeholder="Type new password..">
                                <span id="er2" class="mandatory"></span> </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label"><b>Confirm Password:</b></label>
                              </div>
                              <div class="col-lg-8">
                                <input class="form-control"  name="con_pass" id="con_pass" type="text" placeholder="Type confirm password..">
                                <span id="er3" class="mandatory"></span></div>
                            </div>
                            <div class="form-group row">
                              <div class="col-lg-3"> </div>
                              <div class="col-lg-8">
                                <input class="btn btn-primary" type="submit" value="Submit" onclick="return change_pass();">
                              </div>
                            </div>
                  </form>
              </div>
          </div>  
        </div>
      </div>

               


         


                 
