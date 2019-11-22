      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 style="color:blue" align="center"><b>Update Product</b></h1>
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/product/update_product/<?php echo $product[0]->product_id?>">

                    <div class="form-group">
                      <label for="exampleSelectSuccess"><b>Select Category<em style="color:red">*</em>:</b></label>
                        <select class="js-example-basic-single" name="category_name" style="width:100%">
                          <?php foreach($category as $c1){?>
                             <option <?php if($category[0]->category_Id == 1){ echo 'selected';} ?>>Premium Wine</option>
                             <option <?php if($category[0]->category_Id == 2){ echo 'selected';} ?>>Classic Wine</option> 
                             <option <?php if($category[0]->category_Id == 3){ echo 'selected';} ?>>Combo Wine</option>
                         <?php }?>
                        </select>
                    </div>
                     <div class="form-group">
                      <label for="Product Code"><b>Product Code<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="product_code" name="product_code" value="<?php echo $product[0]->product_code?>">
                    </div>
                    <div class="form-group">
                      <label for="Product Name"><b>Product Name<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $product[0]->product_name?>">
                    </div>
                    <div class="form-group">
                      <label for="Product Slug"><b>Product Slug<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="product_slug" name="product_slug" readonly value="<?php echo $product[0]->product_slug?>">
                    </div>
                    <div class="form-group">
                      <label for="Product Type"><b>Product Type:</b></label>
                      <input type="text" class="form-control" id="product_type" name="product_type" value="<?php echo $product[0]->product_type?>">
                    </div>
                    <div class="form-group">
                      <label for="Product Description"><b>Product Description<em style="color:red">*</em>:</b></label>
                      <textarea class="form-control" id="product_description" rows="5" name="product_description"><?php echo $product[0]->product_description?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Product Image"><b>Product Front End View Image<em style="color:red">*</em>:</b></label>
                      <div class="row">
                      <div class="col-sm-6">
                      <img src="<?php echo $product[0]->product_img?>"class="img-lg rounded" style="width:200px;height:150px;">
                      </div>
                      <div class="col-sm-6">  
                      <input type="file" class="dropify" name="userfile" data-height="150" / id="product_img">
                      </div>
                      </div>
                    </div>
                    <br>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-4">
                        <label for="Product Thumbnail Image1"><b>Product Thumbnail Image1</b></label>
                        <img src="<?php echo $product_multi_image[0]->images?>"class="img-lg rounded" style="width:200px;height:150px;">
                        </div>
                        <div class="col-sm-4">
                         <label for="Product Thumbnail Image2"><b>Product Thumbnail Image2</b></label>
                         <img src="<?php echo $product_multi_image[1]->images?>"class="img-lg rounded" style="width:200px;height:150px;">
                        </div>
                        <div class="col-sm-4">
                          <label for="Product Thumbnail Image3"><b>Product Thumbnail Image3</b></label>
                          <img src="<?php echo $product_multi_image[2]->images?>"class="img-lg rounded" style="width:200px;height:150px;">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-lg-4"> 
                    <div class="form-group">
                      <label for="Price"><b>Price:</b></label>
                      <input type="text" class="form-control" id="price" name="price" value="<?php echo $product[0]->price?>">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="sales Price"><b>Sales Price<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="sales_price" name="sales_price" value="<?php echo $product[0]->sales_price?>">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Cheese Paining"><b>Cheese Paining:</b></label>
                      <input type="text" class="form-control" id="cheese_paining" name="cheese_paining" value="<?php echo $product[0]->cheese_paining?>">
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
                      <input type="text" class="form-control" id="product_quantity" name="quantity" value="<?php echo $product[0]->quantity?>">
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                      <label for="Vintage"><b>Vintage:</b></label>
                      <input type="text" class="form-control" id="vintage" name="vintage" value="<?php echo $product[0]->vintage?>">
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                      <label for="Alcohol"><b>Alcohol%:</b></label>
                      <input type="text" class="form-control" id="alcohol"  name="alcohol" value="<?php echo $product[0]->alcohol?>">
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Product Name"><b><?php echo $specification[0]->specification_name;?>:</b></label>
                      <input type="text" class="form-control" id="country" value="<?php echo $product[0]->country;?>" name="country">
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Product Name"><b><?php echo $specification[1]->specification_name;?>:</b></label>
                      <input type="text" class="form-control" id="varietals" value="<?php echo $product[0]->varietals;?>" name="varietals">
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="Product Name"><b><?php echo $specification[2]->specification_name;?>:</b></label>
                      <input type="text" class="form-control" id="color" value="<?php echo $product[0]->color;?>"name="color" >
                    </div>
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="Nose"><b>Nose:</b></label>
                      <textarea class="form-control" id="nose" rows="4" name="nose"><?php echo $product[0]->nose?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Meta Keyword"><b>Meta Keyword:</b></label>
                      <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="<?php echo $product[0]->meta_keyword?>">
                    </div>
                    <div class="form-group">
                      <label for="Meta Description"><b>Meta Description:</b></label>
                      <textarea class="form-control" id="meta_description" rows="4" name="meta_description"><?php echo $product[0]->meta_description?></textarea>
                    </div>

                    <div class="row">
                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Products Choose as a Gifts:</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="gifts" id="gifts" value="gifts" <?php if($product[0]->gifts == 'gifts'){echo "checked";}?>>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Products Choose as a Weddings:</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="weddings" id="weddings" value="weddings" <?php if($product[0]->weddings == 'weddings'){echo "checked";}?>>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Products Choose as a Both:</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="events" id="events" value="both" <?php if($product[0]->events == 'both'){echo "checked";}?>>
                    </div>
                    </div>


                    </div>

                    <div class="row">
                    <div class="col-lg-6">
                      <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Shipping Charge</b></label>&nbsp;&nbsp;
                    <input type="text" name="shipping_charge" id="shipping_charge" class="form-control" value="<?php echo $product[0]->shipping_charge?>">
                    </div>
                  </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Free Delivery</b></label>&nbsp;&nbsp;
                    <input type="checkbox" name="free_delivery" id="free_delivery" value="free" <?php if($product[0]->free_delivery == 'free'){echo "checked";}?>>
                    </div>
                    </div>
                  </div>
                    </div>
                  

                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Taxes:</b></label>&nbsp;&nbsp;
                    <input type="text" name="taxes" id="taxes" class="form-control" value="<?php echo $product[0]->shipping_charge?>">
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Featured Product:</b></label>
                    <select class="js-example-basic-single" style="width:100%" name="featured" id="featured">
                      <option value="1" <?php if($product[0]->featured == 1){ echo 'selected';} ?>>Featured Product</option>
                      <option value="0" <?php if($product[0]->featured == 0){ echo 'selected';} ?>>Non Featured Product</option>
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Stock<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" id="stock" name="stock">
                      <option value="1" <?php if($product[0]->stock == 1){ echo 'selected';} ?>>In Stock</option>
                      <option value="0" <?php if($product[0]->stock == 0){ echo 'selected';} ?>>Out Of Stock</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status<em style="color:red">*</em>:</b></label>
                    <select class="js-example-basic-single" style="width:100%" id="status" name="status">
                      <option value="1" <?php if($product[0]->status == 1){ echo 'selected';} ?>>Active</option>
                      <option value="0" <?php if($product[0]->status == 0){ echo 'selected';} ?>>Deactive</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" id="update_product">Update</button>
                    <button type="button" class="btn btn-light" onclick="location.href ='<?php echo base_url()?>superpanel/product';">Cancel</button>
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