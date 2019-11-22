      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 style="color:blue" align="center"><b>Entry New Sales Order</b></h3>
            <form class="forms-sample" method="post"  action="<?php echo base_url();?>superpanel/sales_order/insert_sales_order">


                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Select Product:</b></label>
                    <select class="js-example-basic-single" name="product_id" style="width:100%">
                      <?php foreach($product as $p){?>
                        <option value="<?=$p->product_id?>"><?php echo $p->product_name;?> 
                      <?php }?>
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="Customer Name"><b>Customer Name:</b></label>
                      <input type="text" class="form-control" id="customer_name" placeholder="Enter Customer Name" name="customer_name">
                    </div>

                    <div class="form-group">
                      <label><b>Date Of Order</b></label>
                      <div id="datepicker-popup" class="input-group date datepicker">
                        <input type="text" class="form-control" name="date_of_order" placeholder="Enter Date Of Order">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Quantity"><b>Quantity:</b></label>
                      <input type="text" class="form-control" id="qty" placeholder="Enter Quantity Name" name="qty">
                    </div>
             
                    <div class="form-group">
                      <label for="Price"><b>Price:</b></label>
                      <input type="text" class="form-control" id="price" placeholder="Enter Price Name" name="price">
                    </div>

                     <div class="form-group">
                      <label for="Total Price"><b>Total Price:</b></label>
                      <input type="text" class="form-control" id="total_price" placeholder="Enter Total Price" name="total_price">
                    </div>

                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div> 
              </div>
            </div> 
          </div>