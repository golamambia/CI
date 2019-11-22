<!-- <style type="text/css">
               
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
             </style>  -->               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/sales_order">Sales Order</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Transaction</span></li>
                      </ol>
                    </nav>
                  </div>
           
                </div>
              </div>

              <div class="card">
                  <div class="card-body">

                    <h4 class="card-title">Date Range</h4>
                    <form action="<?php echo base_url();?>superpanel/transaction/" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                    <!-- <label for="Username"><b>Date Range</b></label>  -->
                    <input type="date" class="form-control" id="date1" placeholder="Username" name="date1">
                    
                    
                  </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                   
                    <input type="date" class="form-control" id="date2" placeholder="Username" name="date2">
                    
                    
                  </div>
                      </div>
                      <div class="col-md-2">
                        <input type="submit" name="" value="Search" class="btn-success btn">
                      </div>
                      

                    </div>
                  </form>


                    <h4 class="card-title">Transaction</h4>
                    <div class="table-responsive">
                     <!--  <form action="<?php echo base_url();?>superpanel/product/demo" method="POST">
                      <div class="form-group">
                    
                    <input type="date" class="form-control" id="username" placeholder="Username" name="username">
                    <input type="button" name="" value="Search" class="btn-success btn">
                    
                  </div>
                  </form> -->
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Slno.</b></th>
                                <th><b>Transaction ID</b></th>
                                <th><b>Customer ID</b></th>
                                <th><b>Customer Name</b></th>
                                <th><b>Date Of Transaction</b></th>
                                <th><b>Mode Of Tranction</b></th>
                                <th><b>Total Price</b></th>
                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($transaction as $t){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $t->tranction_id;?></td>
                                <td><?php echo $t->customer_id;?></td>
                                <td><?php echo $t->customer_name;?></td>
                                <td><?php echo $t->date_of_tranction;?></td>
                                <td><?php echo $t->mode_of_tranction;?></td>
                                <td><?php echo $t->total_price;?></td>
                                <td>
                                  <a href="<?php echo base_url();?>superpanel/transaction/edit_transaction/<?php echo $t->tranction_id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
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


         


                 
