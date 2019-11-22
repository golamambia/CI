      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 style="color:blue" align="center"><b>Entry Product</b></h1>
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
               <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/product/insert_product">

                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Select Category<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="category_Id" id="category_Id">
                      <?php foreach($category as $c1){?>
                        <option value="<?=$c1->category_Id?>"><?php echo $c1->category_name;?> 
                      <?php }?>
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="Product Code"><b>Product Code<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="product_code" placeholder="Enter Product Code" name="product_code">
                    </div>
                    <div class="form-group">
                      <label for="Product Name"><b>Product Name<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name">
                    </div>
                    <div class="form-group">
                      <label for="Product Slug"><b>Product Slug<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="category_slug" placeholder="Enter Product Slug" name="product_slug">
                    </div>
                    <div class="form-group">
                      <label for="Product Type"><b>Product Type:</b></label>
                      <input type="text" class="form-control" id="product_type" placeholder="Enter Product Type" name="product_type">
                    </div>
                    <div class="form-group">
                      <label for="Product Description"><b>Product Description:</b></label>
                      <textarea class="form-control" id="product_description" rows="5" name="product_description"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Product Image"><b>Product Image:</b></label>
                      <input type="file" class="dropify" data-height="300" name="product_img">
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label"><strong>Product Multiple Images</strong></label>
                      <div class="col-lg-5">
                        <input name="p_multi[]" class="file-upload-default" type="file" multiple id="fileupload" data-multiple-caption="{count} files selected">
                        <div class="input-group col-xs-12">
                          <input class="form-control file-upload-info" disabled="" placeholder="Upload  Multiple Images" type="text">
                          <div class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload Images</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Product Video"><b>Product Video:</b></label>
                      <textarea class="form-control" id="video" rows="5" name="video"></textarea>
                    </div>

                    <div class="row">
                    <div class="col-lg-4"> 
                    <div class="form-group">
                      <label for="Price"><b>Price:</b></label>
                      <input type="text" class="form-control" id="price" placeholder="Enter Product Price" name="price">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="sales Price"><b>Sales Price<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="sales_price" placeholder="Enter Product Sales Price" name="sales_price">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Cheese Paining"><b>Cheese Paining:</b></label>
                      <input type="text" class="form-control" id="cheese_paining" placeholder="Enter Product Cheese Paining" name="cheese_paining">
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="Product Code"><b>Discount Section:</b></label>
                    </div>
                    <div class="form-group">
                      <label for="Price"><b>Create Promotion Code:</b></label>
                      <input type="text" class="form-control" id="promo_code" placeholder="Enter Promotion Code" name="promo_code">
                    </div>
                    <div class="row">
                    <div class="col-lg-4"> 
                    <div class="form-group">
                      <label for="Price"><b>Flat Rate:</b></label>
                      <input type="text" class="form-control" id="flat_rate" placeholder="Enter Flat Rate" name="flat_rate">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="sales Price"><b>Discount(%):</b></label>
                      <input type="text" class="form-control" id="discount_rate" placeholder="Enter Discount %" name="discount_rate">
                    </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label for="Cheese Paining"><b>Valid from</b></label>
                      <input type="date" class="form-control" id="valid_from" placeholder="Enter Product Cheese Paining" name="valid_from">
                    </div>

                    </div>
                    <div class="col-lg-6">

                      <div class="form-group">
                      <label for="Cheese Paining"><b>Valid to</b></label>
                      <input type="date" class="form-control" id="valid_to" placeholder="Enter Product Cheese Paining" name="valid_to">
                    </div>
                    </div>
                    </div> 

                    
                    </div>


                    </div>

                    <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                      <label for="Product Quantity"><b>Product Quantity:<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="product_quantity" placeholder="Enter Product Quantity" name="quantity">
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                      <label for="Vintage"><b>Vintage:</b></label>
                      <input type="text" class="form-control" id="vintage" placeholder="Enter Product Vintage" name="vintage">
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                      <label for="Alcohol"><b>Alcohol%:</b></label>
                      <input type="text" class="form-control" id="alcohol" placeholder="Enter Alcohol%" name="alcohol">
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Product Name"><b><?php echo $specification[0]->specification_name;?>:</b></label>
                      <input type="text" class="form-control" id="country" placeholder="Enter <?php echo $specification[0]->specification_name;?> Name" name="country">
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Product Name"><b><?php echo $specification[1]->specification_name;?>:</b></label>
                      <input type="text" class="form-control" id="varietals " placeholder="Enter <?php echo $specification[1]->specification_name;?> Name" name="varietals">
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Product Name"><b><?php echo $specification[2]->specification_name;?>:</b></label>
                      <input type="text" class="form-control" id="color" placeholder="Enter <?php echo $specification[2]->specification_name;?> Name" name="color">
                    </div>
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="Nose"><b>Nose:</b></label>
                      <textarea class="form-control" id="nose" rows="4" name="nose"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Meta Keyword"><b>Meta Keyword:</b></label>
                      <input type="text" class="form-control" id="meta_keyword" placeholder="Enter Meta Keyword" name="meta_keyword">
                    </div>
                    <div class="form-group">
                      <label for="Meta Description"><b>Meta Description:</b></label>
                      <textarea class="form-control" id="meta_description" rows="4" name="meta_description"></textarea>
                    </div>
                    
                    <div class="row">
                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Products Choose as a Gifts:</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="gifts" id="gifts" value="gifts">
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Products Choose as a Weddings:</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="weddings" id="weddings" value="weddings">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Products Choose as a Both:</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="events" id="events" value="both">
                    </div>
                    </div>

                    </div>

                    <div class="row">
                    <div class="col-lg-6">

                      <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Shipping Charge</b></label>&nbsp;&nbsp;
                    <input type="text" name="shipping_charge" id="shipping_charge" placeholder="Enter Shipping Charge" class="form-control">
                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Free Delivery</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="free_delivery" id="free_delivery" value="free" >
                    </div>
                    </div>
                  </div>

                    



                    </div>

                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Taxes:</b></label>&nbsp;&nbsp;
                    <input type="text" name="taxes" id="taxes" placeholder="Enter Taxes" class="form-control">
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Featured Product:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="featured" id="featured">
                      <option value="">Select</option>
                      <option value="1">Featured Product</option>
                      <option value="0">Non Featured Product</option>
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Stock<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="stock" id="stock">
                      <option value="0">Select</option>
                      <option value="1">In Stock</option>
                      <option value="2">Out Of Stock</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="status" id="status">
                      <option value="0">Select</option>
                      <option value="1">Active</option>
                      <option value="2">Deactive</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" id="insert_product">Submit</button>
                    <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/product';">Cancel</button>
                    </div>
                    </div>
                  </form>
              </div>
          </div>  
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          //alert(1);
    $('#events').click(function(){
            if($(this).prop("checked") == true){
                //alert("Checkbox is checked.");
                $("#gifts"). prop("checked", true);
                $("#weddings"). prop("checked", true);
            }
            else if($(this).prop("checked") == false){
                //alert("Checkbox is unchecked.");
                $("#gifts"). prop("checked", false);
                $("#weddings"). prop("checked", false);
            }
    
  });

$('#gifts').click(function(){
            if($(this).prop("checked") == true){
                //alert("Checkbox is checked.");
               if($('#events').prop("checked") == true)
               {
                $("#weddings"). prop("checked", true);
               }
                //$("#gifts"). prop("checked", true);
                
            }

});
$('#weddings').click(function(){
            if($(this).prop("checked") == true){
                //alert("Checkbox is checked.");
               if($('#events').prop("checked") == true)
               {
                $("#gifts"). prop("checked", true);
               }
                //$("#gifts"). prop("checked", true);
                
            }

});


});

      </script>