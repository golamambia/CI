      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 style="color:blue" align="center">Update Sales Order</h3>
              <?php
            $mth=$this->router->fetch_class();
            if($mth!='sales_order'){ ?>
               <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/sales_order_customer/update_sales_order/<?php echo $sales[0]->order_id?>">
                
            <?php }else{ ?>
               <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/sales_order/update_sales_order/<?php echo $sales[0]->order_id?>">
            <?php }
            
            ?>

           


                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Select Product:</b></label>
                    <select class="js-example-basic-single" name="product_id" style="width:100%">
                      <?php foreach($product as $p){?>
                        <option value="<?=$p->product_id?>"><?php echo $p->product_name;?> 
                      <?php }?>
                    </select>
                    </div>


                    <div class="form-group">
                      <label><b>Date Of Order</b></label>
                      <div id="datepicker-popup" class="input-group date datepicker">
                        <input type="text" class="form-control" name="date_of_order" value="<?php echo $sales[0]->date_of_order?>">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Quantity"><b>Quantity:</b></label>
                      <input type="text" class="form-control" id="qty" value="<?php echo $sales[0]->qty?>" name="qty">
                    </div>
             
                    <div class="form-group">
                      <label for="Price"><b>Price:</b></label>
                      <input type="text" class="form-control" id="price" value="<?php echo $sales[0]->price?>" name="price">
                    </div>


                    <button type="submit" class="btn btn-success mr-2">Update</button>
                    <?php
            $mth=$this->router->fetch_class();
            if($mth!='sales_order'){ ?>
                <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/sales_order_customer';">Cancel</button>
            <?php }else{ ?>
               <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/sales_order';">Cancel</button>
            <?php }
            
            ?>
                    
                  </form>
                </div> 
              </div>
            </div> 
          </div>