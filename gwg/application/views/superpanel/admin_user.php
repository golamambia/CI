               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <?php if($this->session->flashdata('error')!=''){?>
                      <center>
                          <div class="alert alert-danger" > <strong><?php echo @$this->session->flashdata('error');?></strong> </div>
                      </center>
                  <?php }?>
                  <?php if($this->session->flashdata('success')!=''){?>
                      <center>
                          <div class="alert alert-success" > <strong><?php echo @$this->session->flashdata('success');?></strong> </div>
                      </center>
                  <?php }?>
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Global Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Admin User</span></li>
                      </ol>
                    </nav>
                  </div>
                  <a href="<?php echo base_url();?>superpanel/admin_user/add_admin"><button type="button" class="btn btn-success btn-lg" id="add_new">Add New</button></a>
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Admin User</h4>
                   <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Slno.</b></th>
                                <th><b>UserName</b></th>
                                <th><b>Password</b></th>
                                <th><b>Admin Email</b></th>
                                <th><b>Admin Image</b></th>
                                <th><b>Status</b></th>
                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($admin as $a){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $a->username;?></td>
                                <td><?php echo $a->password;?></td>
                                <td><?php echo $a->admin_email;?></td>
                                <td>
                                  <img src="<?php echo $a->admin_image;?>"alt="<?php echo $a->admin_image;?>" class="img-lg rounded" style="width:160px;height:100px;">
                                </td>
                                <td>
                                    <?php if($a->status==1){?>
                                      <label class="badge badge-success">Active</label>
                                      <?php }else if($a->status==0){?>
                                      <label class="badge badge-danger">Deactive</label>
                                    <?php }?>
                                </td>
                                <td>
                                  <a href="<?php echo base_url();?>superpanel/admin_user/edit_admin_user/<?php echo $a->id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                                </td>
                            </tr>
                            <?php $i++; }?>
                          </tbody>
                        </table>
                      </div>
                      </div>
                    </div>
                  </div>
            </div>



         


                 
