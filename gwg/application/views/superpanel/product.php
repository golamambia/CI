            
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
                        <li class="breadcrumb-item"><a href="">Manage Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Product</span></li>
                      </ol>
                    </nav>
                  </div>
                  <a href="<?php echo base_url();?>superpanel/product/add_product"><button type="button" class="btn btn-success btn-lg" id="add_new">Add New</button></a>
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product</h4>
                    
                    <div class="table-responsive">
                      

                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Sl</b></th>
                                <th><b>Product Name</b></th>
                                <th><b>Image</b></th>
                                <th><b>Price</b></th>
                                <th><b>Stock</b></th>
                                <th><b>Status</b></th>
                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($product as $p){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $p->product_name;?></td>
                                <td><img src="<?php echo $p->product_img;?>"alt="<?php echo $p->product_img;?>" class="img-lg rounded" style="width:160px;height:100px;"></td>
                                <td>$<?php echo $p->price;?></td>
                                <td>
                                    <?php if($p->stock==1){?>
                                    <label class="badge badge-success">Yes</label>
                                    <?php }else if($p->stock==0){?>
                                    <label class="badge badge-danger">No</label>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if($p->status==1){?>
                                    <label class="badge badge-success">Active</label>
                                    <?php }else if($p->status==0){?>
                                    <label class="badge badge-danger">Deactive</label>
                                    <?php }?>
                                </td>
 
                                <td>
                                  <a href="<?php echo base_url();?>superpanel/product/edit_product/<?php echo $p->product_id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                                  </a>
                                  <a href="<?php echo base_url();?>superpanel/product/delete_product/<?php echo $p->product_id?>" onclick="return confirm('Are you sure about this delete?');"><button type="button" class="btn btn-danger btn-sm">Delete</button>
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


          