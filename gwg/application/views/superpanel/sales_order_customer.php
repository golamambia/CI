                <style type="text/css">
               
              .form-group1 {
                  position: absolute;
                  width: 100%;
                  max-width: 318px;
                  left: 196px;
                  top: 2px;
                  z-index: 91;
              }
              .form-group .form-control1 {
                  width: 68%;
                  float: left;
              }
              .form-group1 .btn{
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
                        <li class="breadcrumb-item"><a href="">Sales Order</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Order</span></li>
                      </ol>
                    </nav>
                  </div>
                 <!-- <a href="<?php echo base_url();?>superpanel/sales_order/add_sales_order"><button type="button" class="btn btn-success btn-lg"style="float:right;margin-top:10px;">Add New</button></a> --> 
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Date Range</h4>
                    <form action="<?php echo base_url();?>superpanel/sales_order_customer/" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                    <label for="Username"><b>From</b></label> 
                    <input type="date" class="form-control" id="date1" placeholder="Username" name="date1">
                    
                    
                  </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                   <label for="Username"><b>To</b></label> 
                    <input type="date" class="form-control" id="date2" placeholder="Username" name="date2">
                    
                    
                  </div>
                      </div>
                      <div class="col-md-2">
                        <label for="Username"><b>&nbsp;</b></label> 
                        <input style="margin-top: 25px;" type="submit" name="" value="Search" class="btn-success btn">
                      </div>
                      </form>
                      <div class="col-md-4">
                                      <div align="center">
        <form method="post" action="<?php echo base_url(); ?>excel_export/action2">
          <input style="margin-top: 25px;" type="submit" name="export" class="btn btn-success" value="Export to Excel" />
        </form>
      </div>
                      </div>

                    </div>
                  
                    <h4 class="card-title">Sales Order</h4>
                    <div class="table-responsive">
                      <!-- <form action="<?php echo base_url();?>superpanel/product/demo" method="POST">
                      <div class="form-group form-group1">
                    
                    <input type="date" class="form-control form-control1" id="username" placeholder="Username" name="username">
                    <input type="button" name="" value="Search" class="btn-success btn">
                    
                  </div>
                  </form> -->
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Sl.no</b></th>
                                <th><b>Purchase Date</b></th>
                                <th><b>Order ID</b></th>
                                <th><b>Customer Name</b></th>
                                <th><b>Product Name</b></th>
                                <th><b>Quantity</b></th>
                                <th><b>Amount</b></th>

                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($sales as $s){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php  
                                $originalDate =$s->date_of_order;
      
               echo $newDate1 =date("d-m-Y",strtotime($originalDate));

                                ?></td>
                                <td><?php echo $s->uni_order_id;?></td>
                                <td><?php echo $s->customer_fullname;?></td>
                                <td><?php echo $s->product_name;?></td>
                                <td><?php echo $s->qty;?></td>
                                <td><?php echo $s->price;?></td>

                                
                                <td>
                                  
                                  <a href="<?php echo base_url();?>superpanel/sales_order_customer/edit_sales_order/<?php echo $s->order_id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
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


         


                 
