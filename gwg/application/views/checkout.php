
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
        <img src="<?php echo base_url()?>assets_front/image/innerbgs01.jpg" alt="great wine">
        <div class="innerabvs01">
            <h2>Place Order</h2>
        </div>
    </div>
    <!-- Inner banner end here -->
    <div class="clearfix"></div>
    <!-- Inner content start here -->

    <div id="idwrapplceordrpanels01" class="wrapplceordrpanels01">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <?php if($this->session->userdata('cus_id')==''){?>
                    <div class="wrapplceordrpanels02">
                        <div class="plceordrpanels01">
                            <h2 class="shadre01">Login</h2>
                        </div>
                        <div class="placeordrformpnls01">
                            <?php if($this->session->flashdata('login_error2')!=""){?>
                            <?php echo $this->session->flashdata('login_error2');?>
                            <?php } ?>
                            <form action="<?=base_url();?>checkout/login" method="POST">
                                <div class="col-md-12 che_pad_l form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email *" name="login_email" required="required">
                                </div>
                                <div class="col-md-12 che_pad_l form-group">
                                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password *" name="login_password" required="required">
                                </div>                                    
                                
                                <div class="allsignboxes02">
                                    <div class="allsignlink01">
                                        <button type="submit" class="button">Login</button>
                                    </div>
                                    <p>Don't have an account? <a class="signupbtn02" href="<?php echo base_url()?>home/register" style="text-decoration:none;">Sign up</a></p>
                                </div>
                            </form>
                        </div>  
                    </div>
                    <?php }else{ ?>
                    <form action="<?php echo base_url()?>checkout/insert_order" method="POST">    
                    <div class="wrapplceordrpanels02">
                        <div class="plceordrpanels01">
                            <h2 class="shadre01">Shipping address</h2>
                        </div>
                        <?php if($this->session->userdata('cus_id')!=''){?>
                    <div class="placeordrformpnls01">
                        <?php if($meta_address){?>
                            <div class="col-md-8" style="margin-bottom: 30px;margin-right: 18px;" id="modal">
                                <a href="javascript:void(0)" class="actcolors01" data-toggle="modal" data-target="#loginmodals01" style="text-decoration:none">
                                    <button type="button" class="btn btn-default">SELECT FROM ADDRESS BOOK</button>
                                </a>
                            </div>
                        <?php }?>
                            <div class="modal fade" id="loginmodals01">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content modelcontents01">
                                        <div class="modal-header modaheader0s1">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Address Book</h4>
                                        </div>
                                    <!-- Modal Header -->
                                        <div class="modal-body">
                                            <?php foreach($meta_address as $ms){if($ms->flag == 1){?>
                                                <div class="col-lg-12">
                                                    <label>
                                                    <input type="radio" class="with-gap fillshipping" name="fillshipping" value="<?php echo $ms->address_name?>" checked> 
                                                    <span><?php echo $ms->address_name?></span>
                                                    </label>
                                                </div>
                                            <?php }}?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                                        </div>   
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-sm-6">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" name="first_name" id="firstname" placeholder="Enter First Name">
                                    <span id="s1" class="checkout_error"></span>
                                </div>
                                <div class="col-sm-6">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" name="last_name" id="lastname" placeholder="Enter Last Name">
                                    <span id="s2" class="checkout_error"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Address <span>*</span></p>
                                    <textarea rows="3" name="address" id="address" placeholder="Enter Address"></textarea>
                                    <span id="s3" class="checkout_error"></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Email id <span>*</span></p>
                                            <input type="text" name="email_id" id="email_id" placeholder="Enter Email Id">
                                            <span id="s4" class="checkout_error"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Phone number <span>*</span></p>
                                            <input type="text" name="phone_no" id="phone_no" placeholder="Enter Phone Number">
                                            <span id="s5" class="checkout_error"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <p>City <span>*</span></p>
                                        <input type="text" name="city" id="city" placeholder="Enter city">
                                        <span id="s6" class="checkout_error"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>State <span>*</span></p>
                                        <span id="s7" class="checkout_error"></span>
                                        <select class="form-control" name="state" id="s_state">
                                            <option value="">--- Select State ---</option>
                                            <option value="North Singapore">North Singapore</option>
                                            <option value="South Singapore">South Singapore</option>
                                            <option value="East Singapore">East Singapore</option>
                                            <option value="West Singapore">West Singapore</option>        
                                        </select>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <p>Zip Code <span>*</span></p>
                                        <span id="s8" class="checkout_error"></span>
                                        <input type="text" name="zip_code" id="zipcode" placeholder="Zip Code">
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Country (Do you want to change Country?) <span>*</span></p>
                                        <span id="s9" class="checkout_error"></span>
                                        <select class="form-control" name="country" id="country">
                                            <option value="">--- Select Country ---</option>
                                            <option value="Singapore">Singapore</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-default yelo-btn btn_mar_to"  onclick="return shipping_valid();">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                   </div>

                    <div class="wrapplceordrpanels02">
                        <div class="plceordrpanels01">
                            <h2 class="shadre01">Billing address</h2>
                        </div>
                        
                        <div class="placeordrformpnls01" id="ba">
                            <div class="row"> 
                                <div class="col-sm-12">
                                    <label>
                                        <input type="checkbox" id="same_sipp_bill" onChange="return copydetail()">
                                        <span>Billing Address is same as Shipping Address</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>First Name <span>*</span></p>
                                    <span id="b1" class="checkout_error"></span>
                                    <input type="text" name="first_name" id="b_firstname" placeholder="Enter First Name">
                                </div>
                                <div class="col-sm-6">
                                    <p>Last Name <span>*</span></p>
                                    <span id="b2" class="checkout_error"></span>
                                    <input type="text" name="last_name" id="b_lastname" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Address <span>*</span></p>
                                    <span id="b3" class="checkout_error"></span>
                                    <textarea rows="3" name="address" id="b_address" placeholder="Enter Address"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <span id="b4" class="checkout_error"></span>
                                            <p>Email id <span>*</span></p>
                                            <input type="text" name="email_id" id="b_email_id" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Phone number <span>*</span></p>
                                            <span id="b5" class="checkout_error"></span>
                                            <input type="text" name="phone_no" id="b_phone_no" placeholder="Phone Number">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <p>City <span>*</span></p>
                                        <span id="b6" class="checkout_error"></span>
                                        <input type="text" name="city" id="b_city" placeholder="city">
                                    </div>
                                    <div class="col-sm-6">
                                        <p>State <span>*</span></p>
                                        <span id="b7" class="checkout_error"></span>
                                        <select class="form-control" name="state" id="b_s_state">
                                                <option value="">--- Select State ---</option>
                                                <option value="North Singapore">North Singapore</option>
                                                <option value="South Singapore">South Singapore</option>
                                                <option value="East Singapore">East Singapore</option>
                                                <option value="West Singapore">West Singapore</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <p>Zip Code <span>*</span></p>
                                        <span id="b8" class="checkout_error"></span>
                                        <input type="text" name="zip_code" id="b_zipcode" placeholder="Enter Zip Code">
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Country (Do you want to change Country?) <span>*</span></p>
                                        <span id="b9" class="checkout_error"></span>
                                        <select class="form-control" name="country" id="b_country">
                                                <option value="">--- Select State ---</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Baharin">Baharin</option>                                       
                                        </select>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button type="button"  class="btn btn-default yelo-btn btn_mar_to" onclick="return billing_valid();">CONTINUE</button>
                                </div>
                            </div>
                        </div>     
                    </div>

                  <div class="wrapplceordrpanels02">
                        <div class="plceordrpanels01">
                            <h2 class="shadre01">Payment Options</h2>
                        </div>
                        <?php if($this->session->userdata('cus_id')!=''){?>
                        <div class="placeordrformpnls01">  
                            <div class="row mt-20">
                                <div class="col-sm-6">
                                    <label>
                                        <input class="with-gap" name="pay_check" type="radio" value="cod" checked/>
                                        <span>COD</span>
                                    </label>
                                </div>
                                <div class="col-sm-6">
                                    <label>
                                        <input class="with-gap" name="pay_check" type="radio" value="paypal" />
                                        <span>PAYPAL</span>
                                    </label>
                                </div>
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


                    <input title="item_tax" name="item_price" type="hidden" value="<?=number_format(array_sum($price)+array_sum($shipping_charge)+array_sum($taxes)-array_sum($discount),'2','.','');?>">

                    <input title="item_name" name="item_name" type="hidden" value="ahmed fakhr">
                        <input title="item_number" name="item_number" type="hidden" value="12345">
                        <input title="item_description" name="item_description" type="hidden" value="to buy samsung smart tv">
                        <input title="item_tax" name="item_tax" type="hidden" value="1">
                        
                        <input title="details_tax" name="details_tax" type="hidden" value="1">
                        <input title="details_subtotal" name="details_subtotal" type="hidden" value="1">
                        <input title="details_subtotal" name="price_item" type="hidden" value="1">

                                <div>
                                    <button type="submit" class="btn btn-default" onclick="return confirm_order();">CONFIRM ORDER</button>    
                                </div>          
                            </div>
                        </div>
                     <?php }?>      
                    </div>
                <?php }?>
                </div>
            </div>
        </form>
        </div>
    </div>

<div class="modal fade" id="saveshippingaddress">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="saveshippingaddress">Address Book Save As</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"> <i class="fa fa-home" aria-hidden="true"></i> </span>
                        <input type="text" id="shippingaddress_name" name="address_name" class="form-control" placeholder="Address Book Name">
                    </div>
                    <span id="err" class="error"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="flag" class="insertshippingaddress">Save</button>
            </div>
        </div>
    </div>
</div>

   
    <!-- Inner content end here -->
<script>
    function confirm_order() 
    {
        var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
        var formemail = $("#email_id").val();
        

        if($("#firstname").val() == "" ){
            $("#firstname").focus();
            $("#s1").html("Shipping first name is mandatory");
            return false;
        }else{ $("#s1").html("");}

        if($("#lastname").val() == "" ){
            $("#lastname").focus();
            $("#s2").html("Shipping last name is mandatory");
            return false;
        }else{ $("#s2").html("");}

        if($("#address").val() == "" ){
            $("#address").focus();
            $("#s3").html("Shipping address is mandatory");
            return false;
        }else{$("#s3").html(""); }

        if($("#email_id").val() == "" ){
            $("#email_id").focus();
            $("#s4").html("Shipping email is mandatory");
            return false;
        }
        else  if(!emailRegex.test(formemail)){
            $("#email_id").focus();
            $("#s4").html("Re enter the valid email");
            return false;
        }else{$("#s4").html("");}

        if($("#phone_no").val() == "" ){
            $("#phone_no").focus();
            $("#s5").html("Code is mandatory");
            return false;
        }else if(isNaN($("#phone_no").val())){
            $("#phone_no").focus();
            $("#s5").html("Phone number code must be in digit");
            return false;
        }else{ $("#s5").html("");}


        if($("#city").val() == "" ){
            $("#city").focus();
            $("#s7").html("City is mandatory");
            return false;
        }else{ $("#s7").html("");}

        if($("#s_state").val() == "" ){
            $("#s_state").focus();
            $("#s8").html("Shipping state is mandatory");
            return false;
        }else{ $("#s8").html("");}

        if($("#zipcode").val() == "" ){
            $("#zipcode").focus();
            $("#s9").html("Zipcode is mandatory");
            return false;
        }else{ $("#s9").html("");}

        if($("#country").val() == "" ){
            $("#country").focus();
            $("#s10").html("Shipping country is mandatory");
            return false;
        }else{ $("#s10").html("");}

        var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
        var formemail1 = $("#b_email_id").val();

        if($("#b_firstname").val()==""){
            $("#b_firstname").focus();
            $("#b1").html("Billing first name is mandatory");
            return false;
        }else{ $("#b1").html("");}

        if($("#b_lastname").val()==""){
            $("#b_lastname").focus();
            $("#b2").html("Billing last name is mandatory");
            return false;
        }else{ $("#b2").html("");}

        if($("#b_address").val()==""){
            $("#b_address").focus();
            $("#b3").html("Billing address is mandatory");
            return false;
        }else{$("#b3").html(""); }

        if($("#b_email_id").val()==""){
            $("#b_email_id").focus();
            $("#b4").html("Billing email is mandatory");
            return false;
        }
        else  if(!emailRegex.test(formemail1)){
            $("#b_email_id").focus();
            $("#b4").html("Re enter the valid email");
            return false;
        }else{$("#b4").html("");}

        if($("#b_phone_no").val()==""){
            $("#b_phone_no").focus();
            $("#b5").html("Code is mandatory");
            return false;
        }else if(isNaN($("#b_phone_no").val())){
            $("#b_phone_no").focus();
            $("#b5").html("Phone number code must be in digit");
            return false;
        }else{ $("#b5").html("");}

        if($("#b_phone_no").val()==""){
            $("#b_phone_no").focus();
            $("#b6").html("Phone is mandatory");
            return false;
        }else if(isNaN($("#b_phone_no").val())){
            $("#b_phone_no").focus();
            $("#b6").html("Phone number code must be in digit");
            return false;
        }else{ $("#b6").html("");}

        if($("#b_city").val()==""){
            $("#b_city").focus();
            $("#b7").html("City is mandatory");
            return false;
        }else{ $("#b7").html("");}

        if($("#b_s_state").val()==""){
            $("#b_s_state").focus();
            $("#b8").html("Billing state is mandatory");
            return false;
        }else{ $("#b8").html("");}

        if($("#b_zipcode").val() == "" ){
            $("#b_zipcode").focus();
            $("#s9").html("Zipcode is mandatory");
            return false;
        }else{ $("#s9").html("");}

        if($("#b_country").val()==""){
            $("#b_country").focus();
            $("#b10").html("Billing country is mandatory");
            return false;
        }else{ $("#b10").html("");}
        
    }
</script>    

    
   