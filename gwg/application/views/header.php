<?php
@$general_settings=$this->General_model->show_data_id('general_setting','1','id','get','');
@$customer_id=$this->session->userdata('cus_id');
if(@$customer_id)
{
    @$wl_cart=$this->General_model->show_data_id('cart',@$customer_id,'customer_id','get','');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets_front/css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets_front/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700|Philosopher:400,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets_front/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets_front/css/owl.theme.default.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets_front/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets_front/css/style.css">
    <link href="<?php echo base_url();?>assets_front/css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets_front/image/favicon.ico" />
    <!-- Zooming Functionality css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>user_panel/dist/plugins/thumbelina-master/thumbelina.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>user_panel/dist/plugins/thumbelina-master/cloudzoom.css" />
    <!-- Zooming Functionality css -->
    <title>Great Wine</title>
  </head>
  <body>

 

    <!-- Fixed logo start here -->
        <div class="fixedlogos01">
            <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets_front/image/logos01.png" alt="great wine"></a>
        </div>
    <!-- Fixed logo end here -->
    <!-- Top navbar start here -->
    <div class="wraptopnaves01">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mobilelogos01">
                        <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets_front/image/logos01.png" alt="great wine"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <div class="topnavbtns01">

                        <div class="dropdown dparahs01">
                            <a data-toggle="dropdown" style="cursor:pointer">Explore</a>
                            <ul class="dropdown-menu">
                            <img src="<?php echo base_url();?>assets_front/image/menuarrows01.png" alt="great wine">
                            <li><a href="<?php echo base_url();?>page/about-us">About Us</a></li>
                            <li><a href="<?php echo base_url();?>page/wine-making">Wine Making</a></li>
                            <li><a href="<?php echo base_url();?>page/how-works">How It Works</a></li>
                            <li><a href="<?php echo base_url();?>page/our-team">Our team</a></li>
                          </ul>
                        </div>

                        <div class="dropdown dparahs01">
                            <a href="<?php echo base_url();?>product">Our wines</a>
                            <span data-toggle="dropdown"></span>
                            <ul class="dropdown-menu">
                            <img src="<?php echo base_url();?>assets_front/image/menuarrows01.png" alt="great wine">
                            <li><a href="<?php echo base_url();?>product">Classic Wines</a></li>
                            <li><a href="<?php echo base_url();?>product">Premium Wines</a></li>
                            <li><a href="<?php echo base_url();?>product">Bundle</a></li>
                          </ul>
                        </div>
                        
                        <a href="<?php echo base_url();?>product/gifts">Gifts</a>
                        <a href="<?php echo base_url();?>product/weddings">Weddings</a>
                        <!-- <a href="<?php echo base_url();?>product/events">Events</a> -->
                        <a href="<?php echo base_url();?>page/events">Events</a>
                        <a href="<?php echo base_url();?>page/blog">Blog</a>
                        <a href="<?php echo base_url();?>page/contact-us">Contact</a>
                        

                        <div class="dropdown dparahs01">        
                            <ul>
                            <?php  if($this->session->userdata('cus_id')==''){?>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" id="login_de" data-target="#login_pop" class="actcolors02">Log In
                                </a>
                                <div id="login_pop" class="collapse login-form">
                                    <div class="login-form-inner text-left">
                                        <?php if($this->session->flashdata('logerror')!=''){?>
                                            <div class="alert alert-danger" >
                                                <strong><?php echo @$this->session->flashdata('logerror');?></strong>
                                            </div>
                                        <?php }?>
                                        <form action="<?=base_url();?>login/cus_login_validation" method="post" onclick="return cus_login()">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-user-circle"></i></span>
                                                <input type="text" class="form-control" id="login_email" placeholder="Email id" name="login_email" value="<?php if (get_cookie('cust_username') != ''){ echo get_cookie('cust_username'); }?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group"> 
                                                    <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                                    <input type="password" class="form-control" id="login_password" placeholder="Password" name="login_password" value="<?php if (get_cookie('cust_username') != ''){ echo get_cookie('cust_password'); }?>">
                                                </div>
                                            </div>
                                            
                                            <div class="allsignboxes02">
                                                <p>Don't have an account?</p>
                                                <a class="signupbtn02" href="<?php echo base_url()?>home/register">Sign up</a>
                                                <div class="allsignlink01">
                                                    <button type="submit" class="button">Login</button>
                                                </div>  
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <ul>
                        
                        <?php }else{?>
                        <li role="presentation" class="dropdown hed_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>&nbsp;&nbsp;My Profile 
                            </a>
                            <ul class="dropdown-menu">
                                <img src="http://127.0.0.1/great_wine_global/assets_front/image/menuarrows01.png" alt="great wine">
                                <li>
                                    <a href="<?=base_url();?>customer/dashboard/profile">
                                        <span><i class="fa fa-user" aria-hidden="true"></i></span>&nbsp;&nbsp;My Account
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo base_url();?>product/customer_logout"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>&nbsp;&nbsp;Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        </div>
                        <a href="<?php echo base_url();?>subscription" class="actcolors02">Subscription</a>&nbsp;&nbsp;
                        <a href="<?php echo base_url();?>product/cart" id="cart" class="cart_hov">
                            <span><i class="fa fa-cart-plus" aria-hidden="true"></i></span>
                            (<span id="cartCount"><?php if(@$customer_id){ @$cart_count=count($wl_cart); if($cart_count){echo $cart_count;}else{echo "0";}}else{ echo count($this->cart->contents());}; ?></span>) 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top navbar End here -->
