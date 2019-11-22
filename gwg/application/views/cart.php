
    <!-- Top navbar start here -->
    <div class="clearfix"></div>
    <!-- Breadcrumps start here -->
    <div class="bradcumps01">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <ul>
                        <li><a href="<?=base_url();?>" style="text-decoration:none;">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>wines</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumps end here -->

    <!-- Inner banner start here -->
<div class="innerbanners01">
    <img src="<?php echo base_url();?>assets_front/image/innerbgs01.jpg" alt="great wine">
        <div class="innerabvs01">
            <h2>Cart Page</h2>
        </div>
</div>
    <!-- Inner banner end here -->
<div class="clearfix"></div>
    <!-- Inner content start here -->

<?php if($this->session->userdata('cus_id')) {?>
<div id="idwrapcartpages01" class="wrapcartpages01">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php if ($cart){?>
                    <?php $i=1; foreach ($cart as $c){
                        $product=$this->General_model->show_data_id('product',$c->product_id,'product_id','get','');
                          $sales_price[]=$product[0]->sales_price*$c->quantity;?>
                            <div class="cartlstpage01">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?php echo $product[0]->product_img?>" alt="great wine">
                                                <div class="cartplmiprts01">

                                                    <i class="fa fa-minus" aria-hidden="true"><a href="javascript:void(0);" onclick="product_minus(<?php echo $i ?>)"></a></i>
                                                        
                                                    <input type="text" class="form-control text-center"  id="quantity<?php echo $i;?>" value="<?php echo $c->quantity?>" readonly>

                                                    <i class="fa fa-plus" aria-hidden="true"><a href="javascript:void(0);" onclick="product_plus(<?php echo $i ?>)"></a></i>
                                                        
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cartrtsprt01">
                                                <h2><?php echo $product[0]->product_name?></h2>
                                                <p>Item #:<?php echo $product[0]->product_code?></p>
                                                <p>Minimum Order Quantity: 1</p>
                                                <p>Total items: <span class="totalitems01"><?=$c->quantity;?></span></p>
                                                <h3>USD <span class="grnclrs01" id="single_price<?php echo $i ?>"><?= number_format((float)($product[0]->sales_price*$c->quantity), 2, '.', ''); ?></span>
                                                </h3>
                                                
                                                <input type="hidden" name="price" id="price<?php echo $i ?>" value="<?= $product[0]->sales_price ?>">
                                                <input type="hidden" id="product_id<?php echo $i ?>" value="<?= $product[0]->product_id ?>">

                                                <input type="hidden" value="<?php echo $c->quantity?>" id="total_product">
                                                <input type="hidden" id="selling_price" value="<?php echo array_sum($sales_price)?>">
                                                
                                                <div class="cartplmiprts02">
                                                    <a href="javascript:void(0)" onclick="return product_plus_minus(<?php echo $i ?>)">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="<?=base_url();?>product/remove/<?=$c->cart_id;?>" onclick="return confirm('Are you sure about this Remove?');">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                <?php $i++;}?>
                <div class="cartshprebtn01">
                    <a href="<?php echo base_url()?>product" class="conshop01">Continue Shopping</a>
                    <a href="javascript:void(0)" class="preorders01"  data-toggle="modal" data-target="#lsdjflksdjflsd">Preview Order</a>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="cartpridets01">
                    <?php $i=1; foreach ($cart as $c){
                        $product=$this->General_model->show_data_id('product',$c->product_id,'product_id','get','');
                        $price[]=$product[0]->sales_price*$c->quantity;
                        $shipping_charge[]=$product[0]->shipping_charge;
                        $taxes[]=$product[0]->taxes;
                        $products=$this->General_model->show_data_id('discount',$c->product_id,'product_id','get','');
                        if (!empty($products)) {
                            $discount[]=$products[0]->discount_amount;
                        } 
                    $i++;}?>

                    <h2>PRICE DETAILS</h2>
                    <div class="cartparboxes01">
                        <p>Product price</p>
                        <p>USD <?=number_format(array_sum($price),'2','.','');?></p>
                    </div>
                    <div class="cartparboxes01">
                        <p>Shipping charge</p>
                        <p>USD <?=number_format(array_sum($shipping_charge),'2','.','');?></p>
                    </div>
                    <div class="cartparboxes01">
                        <p>Taxes (if any)</p>
                        <p>USD <?=number_format(array_sum($taxes),'2','.','');?></p>
                    </div>
                    <div class="cartparboxes01">
                        <p>Discounts  (if any)</p>
                        <p>USD <?=number_format(array_sum($discount),'2','.','');?></p>
                    </div>
                    <div class="cartparboxes02">
                        <p><span class="cartboldtxts01">Payable Amount</span></p>
                        <p><span class="cartboldtxts01">USD </span>
                           <span class="cartboldtxts01" id="total_price_text"> <?=number_format(array_sum($price)+array_sum($shipping_charge)+array_sum($taxes)-array_sum($discount),'2','.','');?></span>
                           </span>
                        </p>

                        <input type="hidden" id="total_price" value="<?=number_format(array_sum($price),'2','.','');?>">

                        <input type="hidden" id="total_shipping_price" value="<?=number_format(array_sum($shipping_charge),'2','.','');?>">

                        <input type="hidden" id="total_tax_price" value="<?=number_format(array_sum($taxes),'2','.','');?>">

                        <input type="hidden" id="total_discount_price" value="<?=number_format(array_sum($discount),'2','.','');?>">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="lsdjflksdjflsd">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header cartpreviewpops01">
                  <h2 class="modal-title">Order Preview</h2>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="cartpreviewpops02">
                    <?php $j=''; $i=1; foreach ($cart as $c){
                        $product=$this->General_model->show_data_id('product',$c->product_id,'product_id','get','');
                        $sales_price[]=$product[0]->sales_price*$c->quantity;
                    ?>
                        <div class="row justify-content-center">
                            <div class="col-sm-2">
                                <img src="<?php echo $product[0]->product_img?>" alt="great wine">
                            </div>
                            <div class="col-sm-9">
                              <div class="carpopreboxex01">
                                <div class="row">
                                    <div class="col-sm-6"><h2><?php echo $product[0]->product_name?></h2></div>
                                    <div class="col-sm-6"><h2>USD <span class="grnclrs01"><?= number_format((float)($product[0]->sales_price*$c->quantity), 2, '.', ''); ?></span></h2> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Item #: <?php echo $product[0]->product_code?></p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Minimum Order Quantity: 1</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Total items: <span class="totalitems01">1</span></p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12"><p>Payable Amount: USD <?= number_format((float)($product[0]->sales_price*$c->quantity), 2, '.', ''); ?></p></div>
                                </div>

                              </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12">
                            <div class="cartprewpopbtns01">
                                <a href="javascript:void(0)"  data-dismiss="modal">Edit Order</a>
                                <?php
                                if($i==$j){
                                ?>
                                <a href="<?php echo base_url();?>checkout" class="prepopgreens01">Place Order</a>
                            <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php $i++;$j=$i;}}?>
                </div>
            </div>
        </div>
    </div>

<?php }else{?>
    <div id="idwrapcartpages01" class="wrapcartpages01">
        <div class="container">
            <div class="row">
                <?php if($this->cart->contents()){?>
                    <div class="col-sm-8">
                        <?php $i=1; foreach ($this->cart->contents() as $items){
                            $product_id=$items['id'];
                            $product=$this->General_model->show_data_id('product',$product_id,'product_id','get','');
                            $sales_price[]=$product[0]->sales_price*$items['qty'];
                            $shipping_charge[]=$product[0]->shipping_charge;
                            $taxes[]=$product[0]->taxes;
                            $products=$this->General_model->show_data_id('discount',$product_id,'product_id','get','');
                            if (!empty($products)) {
                                $discount[]=$products[0]->discount_amount;
                            }
                        ?>
                        <div class="cartlstpage01">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?php echo $product[0]->product_img?>" alt="great wine">
                                        <div class="cartplmiprts01">

                                            <i class="fa fa-minus" aria-hidden="true"><a href="javascript:void(0);" onclick="product_minus(<?php echo $i ?>)"></a></i>
                                                        
                                            <input type="text" class="form-control text-center" id="quantity<?php echo $i ;?>" value="<?php echo $items['qty'] ?>" readonly>

                                            <i class="fa fa-plus" aria-hidden="true"><a href="javascript:void(0);" onclick="product_plus(<?php echo $i ?>)"></a></i>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="cartrtsprt01">
                                            <h2><?php echo $product[0]->product_name?></h2>
                                            <p>Item #:<?php echo $product[0]->product_code?></p>
                                            <p>Minimum Order Quantity: 1</p>
                                            <p>Total items: <span class="totalitems01">1</span></p>
                                            <h3>USD <span class="grnclrs01" id="single_price<?php echo $i ?>"><?= number_format((float)($product[0]->sales_price*$items['qty']), 2, '.', ''); ?></span>
                                            </h3>

                                            <input type="hidden" name="price" id="price<?php echo $i ?>" value="<?= $product[0]->sales_price ?>">

                                            <input type="hidden" id="selling_price" value="<?php echo array_sum($sales_price)?>">
                                            
                                            <input type="hidden" value="<?php echo $items['qty'];?>" id="total_product">

                                            <input type="hidden" id="product_id<?php echo $i ;?>" value="<?=$product_id;?>">

                                            <input type="hidden" id="rowid<?php echo $i ;?>" value="<?=$items['rowid'];?>">

                                            

                                            <div class="cartplmiprts02">
                                                <a href="javascript:void(0)" onclick="return product_plus_minus(<?php echo $i ?>)">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </a>
                                                <a href="<?=base_url();?>product/remove/<?=$items['rowid'];?>"  onclick="return confirm('Are you sure about this Remove?');">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php }?>

                    <div class="cartshprebtn01">
                        <a href="<?php echo base_url()?>product" class="conshop01">Continue Shopping</a>
                        <a href="javascript:void(0)" class="preorders01"  data-toggle="modal" data-target="#lsdjflksdjflsd">Preview Order</a>
                    </div>
                    </div>
                <?php  foreach ($this->cart->contents() as $items){
                    $product_id=$items['id'];
                    $product=$this->General_model->show_data_id('product',$product_id,'product_id','get','');
                    $price[]=$product[0]->sales_price*$items['qty'];                                      
                ?>
                <?php }?>
                <div class="col-sm-4">
                    <div class="cartpridets01">
                        
                        <h2>PRICE DETAILS</h2>
                        <div class="cartparboxes01">
                            <p>Product price</p>
                            <p>USD <?=number_format(array_sum($price),'2','.','');?></p>
                        </div>
                        <div class="cartparboxes01">
                            <p>Shipping charge</p>
                            <p>USD <?=number_format(array_sum($shipping_charge),'2','.','');?></p>
                        </div>
                        <div class="cartparboxes01">
                            <p>Taxes (if any)</p>
                            <p id="taxes">USD <?=number_format(array_sum($taxes),'2','.','');?></p>
                        </div>
                        <div class="cartparboxes01">
                            <p>Discounts(if any)</p>
                            <p>USD <?=number_format(array_sum($discount),'2','.','');?></p>
                        </div>
                        <div class="cartparboxes02">
                            <p><span class="cartboldtxts01">Payable Amount</span></p>
                            <p><span class="cartboldtxts01">USD </span>
                                <span class="cartboldtxts01" id="total_price_text"> <?=number_format(array_sum($price)+array_sum($shipping_charge)+array_sum($taxes)-array_sum($discount),'2','.','');?></span>
                            </p>

                            <input type="hidden" id="total_price" value="<?=number_format(array_sum($price),'2','.','');?>">

                            <input type="hidden" id="total_shipping_price" value="<?=number_format(array_sum($shipping_charge),'2','.','');?>">

                            <input type="hidden" id="total_tax_price" value="<?=number_format(array_sum($taxes),'2','.','');?>">

                            <input type="hidden" id="total_discount_price" value="<?=number_format(array_sum($discount),'2','.','');?>">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="lsdjflksdjflsd">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header cartpreviewpops01">
                  <h2 class="modal-title">Order Preview</h2>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="cartpreviewpops02">
                    <?php $i=1; foreach ($this->cart->contents() as $items){
                        $product_id=$items['id'];
                        $product=$this->General_model->show_data_id('product',$product_id,'product_id','get','');
                        $sales_price[]=$product[0]->sales_price*$items['qty'];
                    ?>
                    <div class="row justify-content-center">
                        <div class="col-sm-2">
                            <img src="<?php echo $product[0]->product_img?>" alt="great wine">
                        </div>
                        <div class="col-sm-9">
                            <div class="carpopreboxex01">
                                <div class="row">
                                    <div class="col-sm-6"><h2><?php echo $product[0]->product_name?></h2></div>
                                    <div class="col-sm-6"><h2>USD <span class="grnclrs01"><?= number_format((float)($product[0]->sales_price*$items['qty']), 2, '.', ''); ?></span></h2> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Item #: <?php echo $product[0]->product_code?></p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Minimum Order Quantity: 1</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Total items: <span class="totalitems01">1</span></p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12"><p>Payable Amount: USD <?= number_format((float)($product[0]->sales_price*$items['qty']), 2, '.', ''); ?></p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="cartprewpopbtns01">
                                            <a href="javascript:void(0)"  data-dismiss="modal">Edit Order</a>
                                            <a href="<?php echo base_url();?>checkout" class="prepopgreens01">Place Order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php $i++;}}?>
                </div>
            </div>
        </div>
    </div>        
<?php }?>

    <!-- Preview pop start here -->

    
    <!-- Preview pop start here -->


    <!-- Inner content end here -->

    