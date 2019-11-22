      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 align="center">Update Transaction</h3>
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/product/update_transaction/<?php echo $transaction[0]->tranction_id?>">


                    <div class="form-group">
                      <label for="Customer Name"><b>Customer Name:</b></label>
                      <input type="text" class="form-control" id="customer_name" value="<?php echo $transaction[0]->customer_name?>" name="customer_name">
                    </div>

                    <div class="form-group">
                      <label><b>Date Of Transaction</b></label>
                      <div id="datepicker-popup" class="input-group date datepicker">
                        <input type="text" class="form-control" name="date_of_tranction" value="<?php echo $transaction[0]->date_of_tranction?>">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Customer Name"><b>Mode Of Transaction:</b></label>
                      <input type="text" class="form-control" id="mode_of_tranction" value="<?php echo $transaction[0]->mode_of_tranction?>" name="mode_of_tranction">
                    </div>

                     <div class="form-group">
                      <label for="Customer Name"><b>Total Price:</b></label>
                      <input type="text" class="form-control" id="total_price" value="<?php echo $transaction[0]->total_price?>" name="total_price">
                    </div>
                      
                    <button type="submit" class="btn btn-success mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div> 
              </div>
            </div> 
          </div>