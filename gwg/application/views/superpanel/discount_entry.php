      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">

              <h1 style="color:blue" align="center"><b>Entry Discount</b></h1>
                  <form class="form-sample" method="post" action="<?php echo base_url();?>superpanel/discount/insert_discount">
                    
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Select Product:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="product_id">
                      <?php foreach($product as $p){?>
                        <option value="<?=$p->product_id?>"><?php echo $p->product_name;?> 
                      <?php }?>
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="Category Name"><b>Discount Amount:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Discount Amount " name="discount_amount">
                    </div>

                    <div class="form-group">
                      <label for="Product Name"><b>Publish Date:</b></label>
                    <div id="datepicker-popup" class="input-group date datepicker">
                        <input type="text" class="form-control" name="publish_date">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                    </div>
                    </div>

                    

                    <div class="form-group">
                      <label for="Product Name"><b>End Date:</b></label>
                    <div id="datepicker-popup1" class="input-group date datepicker">
                        <input type="text" class="form-control" name="end_date">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/discount';">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>