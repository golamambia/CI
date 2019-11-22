               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <?php if($this->session->flashdata('success')!=''){?>
                      <center>
                        <div class="alert alert-success"> <strong><?php echo @$this->session->flashdata('success');?></strong> </div>
                      </center>
                      <?php }?>
                      <?php if($this->session->flashdata('error')!=''){?>
                      <center>
                        <div class="alert alert-danger" > <strong><?php echo @$this->session->flashdata('error');?></strong> </div>
                      </center>
                  <?php }?>
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">CMS</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>CMS</span></li>
                      </ol>
                    </nav>
                  </div>
                  <a href="<?php echo base_url();?>superpanel/cms/add_cms"><button type="button" class="btn btn-success btn-lg" id="add_new">Add New</button></a>
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">CMS</h4>
                    <div class="row">
                      <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Slno.</b></th>
                                <th><b>Page Name</b></th>
                                <th><b>Page Title</b></th>
                                <th><b>Image</b></th>
                                <th><b>Status</b></th>
                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($cms as $c){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $c->page_name;?></td>
                                <td><?php echo $c->page_title;?></td>
                                <td><img src="<?php echo $c->image;?>"alt="<?php echo $c->image;?>" class="img-lg rounded" style="width:160px;height:100px;">
                                </td>
                                <td>
                                  <?php if($c->status==1){?>
                                    <label class="badge badge-success">Active</label>
                                    <?php }else if($c->status==0){?>
                                    <label class="badge badge-danger">Deactive</label>
                                    <?php }?>                                   
                                <td>
                                  <a href="<?php echo base_url();?>superpanel/cms/edit_cms/<?php echo $c->id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                                  </a>
                                  <a href="<?php echo base_url();?>superpanel/cms/delete_cms/<?php echo $c->id?>" onclick="return confirm('Are you sure about this delete?');"><button type="button" class="btn btn-danger btn-sm">Delete</button>
                                  </a>
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
          </div> 


         


                 
