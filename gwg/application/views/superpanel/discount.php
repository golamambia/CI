               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">

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

                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Manage Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Discount & Coupon</span></li>
                      </ol>
                    </nav>
                  </div>
                  <a href="<?php echo base_url();?>superpanel/discount/add_discount"><button type="button" class="btn btn-success btn-lg" id="add_new">Add New</button></a>
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Discount & Coupon</h4>
                    <div class="row">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Slno.</b></th>
                                <th><b>Product Name</b></th>
                                <th><b>Discount Amount</b></th>
                                <th><b>Publish Date</b></th>
                                <th><b>End Date</b></th>
                                <th><b>Action</b></th>
                  
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($discount as $d){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $d->product_name;?></td>
                                <td><?php echo $d->discount_amount;?></td>
                                <td><?php echo $d->publish_date;?></td>
                                <td><?php echo $d->end_date;?></td>                                
                                
                                <td>
                                  <a href="<?php echo base_url();?>superpanel/edit_discount"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
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


         


                 
