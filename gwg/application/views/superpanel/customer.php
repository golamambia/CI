           <style type="text/css">
               
              .form-group {
                    position: absolute;
                    width: 100%;
                    max-width: 318px;
                    left: 196px;
                    top: 2px;
                    z-index: 91;
                }
                .form-group .form-control {
                    width: 68%;
                    float: left;
                }
                .form-group .btn{
                    float: right;
                }
                .table-responsive {
                   
                    position: relative;
                }
             </style> 
            <div class="main-panel">
              <div class="content-wrapper">

              <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Manage User</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Customer</span></li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
                      
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer</h4>
                     <div class="table-responsive">
                      <form action="<?php echo base_url();?>superpanel/product/demo" method="POST">
                      <div class="form-group">
                    <!-- <label for="Username"><b>Date</b></label> -->
                    <input type="date" class="form-control" id="username" placeholder="Username" name="username">
                    <input type="button" name="" value="Search" class="btn-success btn">
                    
                  </div>
                  </form>
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Slno.</b></th>
                                <th><b>Customer Full Name</b></th>
                                <th><b>Email ID</b></th>
                                <th><b>Phone No</b></th>
                                <th><b>Wine Interest</b></th>
                                <th><b>Actions</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($customer as $c){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $c->customer_fullname;?></td>
                                <td><?php echo $c->email;?></td>
                                <td><?php echo $c->phone_no;?></td>
                                <td><?php echo $c->wine_interest;?></td>
                                <td>
                                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $i ;?>">View</button>
                                  
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
              <!-- content-wrapper ends -->

              <!-- Modal starts -->
              <?php $i=1; foreach ($customer as $c){?>
                  <div class="modal fade" id="exampleModal<?php echo $i ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><strong>View Customer</strong></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row center-block">
                              <div class="col-md-12">

                                  <div class="form-group row">

                                      <div class="col-sm-3">
                                        <label for="Customer First Name"><b>Customer Full Name:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->customer_fullname ?>">
                                      </div>

                                      <div class="col-sm-3">
                                        <label for="Customer Email Id"><b>Customer Email Id:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->email ?>">
                                      </div>

                                      <div class="col-sm-3">
                                        <label for="Customer Password"><b>Customer Password:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->password ?>">
                                      </div>

                                      <div class="col-sm-3">
                                        <label for="Customer Phone No"><b>Customer Phone No:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->phone_no ?>">
                                      </div>
                                      
                                  </div>
                              </div>

                              <div class="col-md-12">

                                  <div class="form-group row">

                                      <div class="col-sm-3">
                                        <label for="Customer Location"><b>customer Gender:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->gender ?>">
                                      </div>

                                      <div class="col-sm-3">
                                        <label for="Customer Location"><b>Customer Wine Interest:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->wine_interest ?>">
                                      </div>

                                      <div class="col-sm-3">
                                        <label for="Customer Email Verification"><b>Customer Email Verification:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->email_verification ?>">
                                      </div>

                                      <div class="col-sm-3">
                                        <label for="Customer Registration Date"><b>Customer Registration Date:</b></label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $c->reg_date ?>">
                                      </div>
    
                                  </div>
                              </div>

                             </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php $i++; }?>
            