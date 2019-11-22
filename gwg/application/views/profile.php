
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
            <h2>My Profile</h2>
        </div>
    </div>
    <!-- Inner banner end here -->
    <div class="clearfix"></div>
    <!-- Inner content start here -->
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
    <div class="alert alert-success" id="my_profile"  style="color:#008000; display:contents; padding-right:10px"></div>
    <div class="wrapmyprfiles01">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                  <div class="myprofleftboxes01">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="personalinformation01-tab" data-toggle="pill" href="#personalinformation01" role="tab" aria-controls="personalinformation01" aria-selected="true">Personal Information</a>
                        <a class="nav-link" id="addressbooks01-tab" data-toggle="pill" href="#addressbooks01" role="tab" aria-controls="addressbooks01" aria-selected="false">Address Book</a>
                        <a class="nav-link" id="my0rders01-tab" data-toggle="pill" href="#my0rders01" role="tab" aria-controls="my0rders01" aria-selected="false">My Orders</a>
                        <a class="nav-link" id="mywishlist01-tab" data-toggle="pill" href="#mywishlist01" role="tab" aria-controls="mywishlist01" aria-selected="false">My Wishlist</a>
                        <a class="nav-link" id="settings01-tab" data-toggle="pill" href="#settings01" role="tab" aria-controls="settings01" aria-selected="false">Settings</a>
                    </div>                      
                  </div>

                </div>
                <div class="col-sm-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="personalinformation01" role="tabpanel" aria-labelledby="personalinformation01-tab">
                            <div class="wrapallperinfmns01">
                                <div class="allperinfmns01">
                                    <h2>Personal Information</h2>
                                </div>
                                <div class="myprofilforms01">
                                    <form action="" method="POST">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-2">
                                                <a class="persnlinfrm01" href="javascript:void(0)"><i class="fa fa-pencil" aria-hidden="true"></i> <span>Edit</span></a>
                                            </div>
                                            <div class="col-sm-2 persnlinone01">
                                                <a class="persnlinfrm01" href="javascript:void(0)" onclick="return update_profile();"><i class="fa fa-pencil" aria-hidden="true"></i><span>Update</span></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Name <span>*</span></p>
                                                <input type="text" name="customer_fullname" id="customer_fullname" placeholder="First Name" value="<?php echo $customer[0]->customer_fullname;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p>Email Id <span>*</span></p>
                                                <input type="text" name="email" id="email" placeholder="Email Id" value="<?php echo $customer[0]->email;?>" disabled>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Contact Number <span>*</span></p>
                                                <input type="text" name="phone_no" id="phone_no" placeholder="Contact Number" value="<?php echo $customer[0]->phone_no;?>" disabled>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="addressbooks01" role="tabpanel" aria-labelledby="addressbooks01-tab">
                            <div class="billshiptab01">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#shippingaddress01">Shipping Address</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#billingaddress01">Billing Address</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="wrapbillshipboxes01 tab-content">
                                    <div id="shippingaddress01" class="billshipcontent01 tab-pane active">
                                        <h2 class="shadre01 plaminus01">Shipping address</h2>
                                        <?php if($this->session->userdata('cus_id')!=''){?>
                                        <?php $i=1; foreach($shipping_address as $ma){?>
                                        <div class="myprofilforms01">
                                            <form action="" method="POST">
                                                <input type="hidden" name="flag" id="flag" value="<?php echo $ma->flag;?>">
                                                <div class="row justify-content-between">
                                                    <div class="col-sm-12">
                                                        <div class="myproflinkboxes01">
                                                            <p>*</p>
                                                            <div>
                                                                <a class="spbleditbtn01" href="javascript:void(0)">Edit</a>
                                                                <a class="spbleditbtn01 persnlinone02" href="javascript:void(0)" onclick="return update_shipping();">Update</a>
                                                                <a class="spbldeletebtn01 delbtns01" href="<?php base_url();?>shipping_address_remove/<?php echo $ma->id?>" onclick="return confirm('Are you sure about this delete?');">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p>First Name</p>
                                                        <input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $ma->first_name;?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Last Name</p>
                                                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $ma->last_name;?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p>Email Id</p>
                                                        <input type="text" name="email_id" id="email_id" placeholder="Email Id" value="<?php echo $ma->email_id;?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Contact Number</p>
                                                        <input type="text" name="phone_no" id="phone_no" placeholder="Contact Number" value="<?php echo $ma->phone_no;?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p>Address</p>
                                                        <textarea name="address" id="address" placeholder="Address" value="Address" disabled><?php echo $ma->address;?></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-sm-6">
                                                            <p>City</p>
                                                            <input type="text" name="city" id="city" placeholder="city" disabled value="<?php echo $ma->city;?>">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p>State</p>
                                                            <select class="form-control" name="state" id="state" disabled>
                                                                <option value=""><?php echo $ma->state;?></option>
                                                                <option value="North Singapore">North Singapore</option>
                                                                <option value="South Singapore">South Singapore</option>
                                                                <option value="East Singapore">East Singapore</option>
                                                                <option value="West Singapore">West Singapore</option>                 
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-sm-6">
                                                            <p>Zip Code</p>
                                                            <input type="text" name="zip_code" id="zip_code" placeholder="Zip Code" disabled value="<?php echo $ma->zip_code;?>">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p>Country</p>
                                                            <select class="form-control" name="country" id="country" disabled>
                                                                    <option value="singapore"><?php echo $ma->country;?></option>                                                    
                                                            </select>
                                                        </div>
                                                </div>
                                            </form>
                                        </div>
                                        <?php $i++;}}?>
                                    </div>

                                    <div id="billingaddress01" class="billshipcontent01 tab-pane fade">
                                        <h2 class="shadre01 plaminus01">Billing address</h2>
                                        <?php if($this->session->userdata('cus_id')!=''){?>
                                        <?php $i=1; foreach($billing_address as $ba){?>
                                        <div class="myprofilforms01">
                                            <form action="" method="POST">
                                                <div class="row justify-content-between">
                                                    <div class="col-sm-12">
                                                        <div class="myproflinkboxes01">
                                                            <p>*</p>
                                                            <div>
                                                                <a class="spbleditbtn01" href="javascript:void(0)">Edit</a>
                                                                <a class="spbleditbtn01 persnlinone02a" href="javascript:void(0)" onclick="return update_billing();">Update</a>
                                                                <a class="spbldeletebtn01 delbtns01" href="<?php base_url();?>billing_address_remove/<?php echo $ba->id?>" onclick="return confirm('Are you sure about this delete?');">Delete</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p>First Name</p>
                                                        <input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $ba->first_name?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Last Name</p>
                                                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $ba->last_name?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p>Email Id</p>
                                                        <input type="text" name="email_id" id="email_id" placeholder="Email Id" value="<?php echo $ba->email_id?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Contact Number</p>
                                                        <input type="text" name="phone_no" id="phone_no" placeholder="Contact Number" value="<?php echo $ba->phone_no?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p>Address</p>
                                                        <textarea name="address" id="address" placeholder="Address" value="Address" disabled><?php echo $ba->address?></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-sm-6">
                                                            <p>City</p>
                                                            <input type="text" name="city" id="city" placeholder="city" disabled value="<?php echo $ba->city?>">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p>State</p>
                                                            <select class="form-control" name="state" id="state" disabled>
                                                                <option value=""><?php echo $ba->state?></option>
                                                                <option value="North Singapore">North Singapore</option>
                                                                <option value="South Singapore">South Singapore</option>
                                                                <option value="East Singapore">East Singapore</option>
                                                                <option value="West Singapore">West Singapore</option>         
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-sm-6">
                                                            <p>Zip Code</p>
                                                            <input type="text" name="zipcode" id="zip_code" placeholder="Zip Code" disabled value="<?php echo $ba->zip_code?>">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p>Country</p>
                                                            <select class="form-control" name="country" id="country" disabled>
                                                                    <option value=""><?php echo $ba->country?></option>                                                 
                                                            </select>
                                                        </div>
                                                </div>
                                            </form>
                                        </div>
                                        <?php $i++;}}?>
                                    </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="my0rders01" role="tabpanel" aria-labelledby="my0rders01-tab">
                           <div class="allmyprmyorder01">
                                <div class="myprmyorder01">
                                    <h2>My Orders</h2>
                                </div>
                                <?php if($this->session->userdata('cus_id')!=''){?>
                                <?php $i=1; foreach($sales_order as $so){?>
                                <div class="myprmyorder02">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="addbgs01"><?php echo $so->uni_order_id;?></h2>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                            <div class="col-sm-1"><img src="<?php echo $so->product_img;?>" alt="great wine"></div>
                                            <div class="col-sm-3">
                                                    <h2><?php echo $so->product_name;?> <a href="<?php base_url();?>order_remove/<?php echo $so->order_id?>" onclick="return confirm('Are you sure about this delete?');"><i class="fa fa-trash-o" aria-hidden="true"></i></a></h2>
                                                    <p>Product code : <span><?php echo $so->product_code;?></span></p>
                                                    <p>Quantity : <span><?php echo $so->quantity;?></span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                    <p><del><?php echo $so->price;?></del> <span class="orangetexts01"><?php echo $so->sales_price;?></span></p>
                                                    <!-- <p>Ex Tax: <span>$115.00</span></p> -->
                                            </div>
                                            <div class="col-sm-3">
                                                    <p>Delivered on Fri, jan 11th 19</p>
                                                    <p><span>Return policy ended on jan 21st 19</span></p>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" style="text-decoration:none;" class="actcolors01" data-toggle="modal" data-target="#reviewmodals01">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                Rate & Review Product
                                                </a>
                                            </div>
                                    </div>
                                </div>
                                <?php $i++;}}?>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="mywishlist01" role="tabpanel" aria-labelledby="mywishlist01-tab">
                                    <div class="allmywishlist01">
                                            <div class="myprmywishlist01">
                                                <h2>My Wishlist</h2>
                                                <?php if($this->session->userdata('cus_id')!=''){?>
                                                <?php $i=1; foreach($wishlist as $w){?>
                                                <div class="myprmywishlist02">
                                                    <div class="row">
                                                        <div  class="col-sm-3">
                                                            <a href="<?=base_url();?>product/details/<?=$w->product_slug;?>">
                                                            <img src="<?php echo $w->product_img?>" alt="great wine">
                                                            </a>
                                                        </div>
                                                        <div  class="col-sm-9">
                                                                <h2><a href="<?=base_url();?>product/details/<?=$w->product_slug;?>" style="text-decoration:none;"><?php echo $w->product_name?>
                                                                    </a></h2>
                                                                <h2>
                                                                    <a href="<?php base_url();?>wishlist_remove/<?php echo $w->id?>" onclick="return confirm('Are you sure about this delete?');">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </h2>
                                                                <p>Product code : <span><?php echo $w->product_code?></span></p>
                                                                <p>Quantity : <span><?php echo $w->quantity?></span></p>
                                        
                                                                <p><del><?php echo $w->price;?></del> <span class="orangetexts01"><?php echo $w->sales_price;?></span></p>

                                                        </div>
                                                        <div  class="col-sm-2"></div>
                                                    </div>
                                                </div>
                                                <?php $i++;}}?>
                                            </div>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="settings01" role="tabpanel" aria-labelledby="settings01-tab">
                            <div class="allmyprsetting01">
                                <div class="myprmysetting01"><h2>Settings</h2></div>
    
                                <?php if($this->session->userdata('cus_id')!=''){?>
                                <?php $i=1; foreach($customer as $cus){?>
                                <div class="myprmysetting02">
                                    <form action="<?php echo base_url();?>customer/dashboard/change_password" method="POST">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p>User Id</p>
                                                <input type="text" name="email" id="" placeholder="userid" value="<?php echo $cus->email?>" disabled="">
                                            </div>
                                            <div class="col-sm-4">
                                                <p>Password</p>
                                                <input type="password" name="password" id="" placeholder="password" value="<?php echo $cus->password?>" disabled="">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="myprmyboxes01">
                                                    <a href="javascript:void(0)">Change Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row myprmysetdisopcl01">
                                            <div class="col-sm-4">
                                                <p>Current Password</p>
                                                <input type="password" name="cpassword" placeholder="Current Password" id="cpassword">
                                            </div>
                                            <div class="col-sm-4">
                                                <p>New Password</p>
                                                <input type="password" name="npassword" id="" placeholder="New Password" id="npassword">
                                            </div>
                                            <div class="col-sm-4">
                                                <p>Retype Password</p>
                                                <input type="password" name="repassword" id="repassword" placeholder="Retype Password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <button type="submit" id="change_password">Save</button>
                                            </div>
                                        </div>
                                            
                                    </form>
                                </div>
                                <?php $i++;}}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>



    <!-- Preview pop start here -->
    <div class="modal fade" id="lsdjflksdjflsd">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header cartpreviewpops01">
                  <h2 class="modal-title">Order Preview</h2>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="cartpreviewpops02">
                        <div class="row justify-content-center">
                            <div class="col-sm-2">
                                <img src="image/bottles01.png" alt="great wine">
                            </div>
                            <div class="col-sm-9">
                              <div class="carpopreboxex01">

                                <div class="row">
                                    <div class="col-sm-6"><h2>Great Wine</h2></div>
                                    <div class="col-sm-6"><h2>USD <span class="grnclrs01">561.08</span></h2> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Item #: F220410211264-000</p></div>
                                    <div class="col-sm-6"><p>Shipping charge: USD 10.00</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Minimum Order Quantity: 1</p></div>
                                    <div class="col-sm-6"><p>Taxes (if any): USD 10.00</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><p>Total items: <span class="totalitems01">1</span></p></div>
                                    <div class="col-sm-6"><p>Discounts (if any): USD 10.00</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12"><p>Payable Amount: USD 581.08</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                            <div class="cartprewpopbtns01">
                                                <a href="javascript:void(0)">Edit Order</a>
                                                <a href="javascript:void(0)" class="prepopgreens01">Place Order</a>
                                            </div>
                                    </div>
                                </div>

                              </div>

                            </div>
                        </div>
                </div>
                
              </div>
            </div>
          </div>
    <!-- Preview pop start here -->


    <!-- Inner content end here -->
    
<!-- Review popup start here -->
    <!-- The Modal -->
      <div class="modal fade" id="reviewmodals01">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modelcontents01">
            <div class="modal-header modaheader0s1">
                <button type="button" class="close clrwhites01" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
          
            <!-- Modal Header -->
            <div id="idallsignboxes01" class="allsignboxes01">      
                <h2>Review</h2>
                    <form action="<?php echo base_url()?>customer/dashboard/rating" method="POST" id="login-form1">
                        <input type="text" name="name" id="name" placeholder="Name">
                        <input type="text" name="product_name" placeholder="Enter Product Name">
                        <label><strong><b>Please Select Rating</b></strong></label>
                        <div class="selstarboxes01">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value=".5" /><label class="half" for="starhalf" title="0.5 stars"></label>
                            </fieldset>
                        </div>
                        <textarea class="form-control" id="review" rows="5" name="review" placeholder="Customer Review"></textarea>
                        </br>
                        <div class="allsignlink01">
                            <button type="submit" class="button">Submit</button>
                        </div>  
                    </form>
            </div>    
          </div>
        </div>
      </div>

    <!-- Review popup end here -->
                                      
     

    <script>
        var myprofilforms01 = document.querySelector(".myprofilforms01 a");
        myprofilforms01.addEventListener("click", inputundiableds01);

        function inputundiableds01() {

            var myprofilforms02 = document.querySelector(".myprofilforms01 a span");
           // myprofilforms02.textContent = "Update";
           myprofilforms01.style.display = "none";
           document.querySelector(".persnlinone01").style.display = "block";
            myprofilforms01.classList.toggle("updatetxtshow01");

            var inputdispled01 = document.querySelectorAll(".myprofilforms01 input");
            for(var i = 0; i < inputdispled01.length; i++) {
                inputdispled01[i].disabled = false;
            }

            if(!myprofilforms01.classList.contains("updatetxtshow01")) {
                myprofilforms02.textContent = "Edit";
                for(var i = 0; i < inputdispled01.length; i++) {
                inputdispled01[i].disabled = true;
            }
            }
            

        }

        // Shipping and billing tabs part start here 

        var shipbillbtn01 = document.querySelector(".wrapbillshipboxes01");
        shipbillbtn01.addEventListener("click", shipbillfun01);
        function shipbillfun01(e) {

                document.querySelector(".persnlinone02").classList.add("persnlinone03");
                document.querySelector(".persnlinone02a").classList.add("persnlinone03a");
             
           //  document.querySelector(".myprofilforms01 a:nth-child(2)").style.display = "inline-block";

            if(e.target.classList.contains("spbleditbtn01")) {
                
                // console.log(e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[0]);
                e.target.parentElement.parentElement.parentElement.parentElement.parentElement.classList.toggle("fordisableinput01");

                if(e.target.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains("fordisableinput01")) {
                    e.target.parentElement.parentElement.parentElement.parentElement.parentElement.classList.remove("fordisableinput02")

                    var inputdispled01 = document.querySelectorAll(".fordisableinput01 input");
                    var selectinput01 = document.querySelectorAll(".fordisableinput01 select");

                    var textareas01 = document.querySelectorAll(".fordisableinput01 textarea");
                    // textareas01.disabled = false;

                    for(var i = 0; i < inputdispled01.length; i++) {
                            inputdispled01[i].disabled = false;
                        }

                    for(var i = 0; i < selectinput01.length; i++) {
                        selectinput01[i].disabled = false;
                        }

                    for(var i = 0; i < textareas01.length; i++) {
                        textareas01[i].disabled = false;
                        }

                    e.target.textContent = "Update";
                    e.target.style.display = "none";


                    
                }  
                if(!e.target.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains("fordisableinput01")) {
                    e.target.parentElement.parentElement.parentElement.parentElement.parentElement.classList.add("fordisableinput02")
                        var inputdispled01 = document.querySelectorAll(".fordisableinput02 input");
                        for(var i = 0; i < inputdispled01.length; i++) {
                            inputdispled01[i].disabled = true;
                            
                        }
                        var selectinput02 = document.querySelectorAll(".fordisableinput02 select");
                        for(var i = 0; i < selectinput02.length; i++) {
                            selectinput02[i].disabled = true;
                        }

                        var textareas01 = document.querySelectorAll(".fordisableinput02 textarea");
                        for(var i = 0; i < textareas01.length; i++) {
                            textareas01[i].disabled = true;
                        }

                        e.target.textContent = "Edit";

                        var textareas02 = document.querySelector(".fordisableinput02 textarea");
                        textareas02.disabled = true;
                        
                    }            
            
            }

            if(e.target.classList.contains("spbldeletebtn01")) {
                console.log(e.target.parentElement.parentElement.parentElement.parentElement.parentElement);
                e.target.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
            }
        }
        // Shipping and billing tabs part end here

        // My orders tabs part start here
        var myprmywishlist01 = document.querySelector(".myprmywishlist01");
        myprmywishlist01.addEventListener("click", myprmyorderclks01);
        function myprmyorderclks01(e) {
            if(e.target.classList.contains("fa-trash-o")) {
                let remove = e.target.parentElement.parentElement.parentElement.parentElement;
                remove.remove();
            }
        }
        // My orders tabs part end here

        // My setting tabs part start here
        var myprmysetting02 = document.querySelector(".myprmysetting02 .myprmyboxes01 a");
        myprmysetting02.addEventListener("click", myprmysetopcl01);
        function myprmysetopcl01(e) {
            var myprmysetdisopcl01 = document.querySelector(".myprmysetting02 .myprmysetdisopcl01");
            myprmysetdisopcl01.classList.toggle("myprmysetdisopcl02");

            myprmysetting02.classList.toggle("textadds01");

            if(myprmysetting02.classList.contains("textadds01")) {
                myprmysetting02.textContent = "Change Password Open";
            } else {
                myprmysetting02.textContent = "Change Password";
            }
        }
        // My setting tabs part end here
    </script>

  </body>
</html>