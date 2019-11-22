<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
    <link rel="icon" href="<?php echo base_url();?>assets/front/images/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="font/flaticon.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/animations.css" type="text/css">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/front/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/front/css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- header area start -->

    <header class="header_area clearfix">
        <div class="container clearfix">
            <div class="logobox">
                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/front/images/logo.png" alt="logo" title="" /> </a>
            </div>
            <div class="menuboxarea">
                <nav class="menubox">
                    <a class="btn-topmenu d-lg-none" href="javascript:void(0)"><i class="icofont-navigation-menu"></i></a>
                    <div class="top-menu">
                        <a class="btn-topmenu-close d-lg-none" href="javascript:void(0)"><i class="icofont-close-line"></i></a>
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url();?>assets/front/images/menuber.png" alt="menuber" title="" /></a></li>
                            <li><a href="<?php echo base_url();?>event">Events</a></li>
                            <li><a href="#">Venue</a></li>
                            <li><a href="#">Discuss</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="header_right">
                <div class="sarchbox">
                    <div class="has-search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="So, what are you looking for?">
                        </div>
                    </div>
                    <div class="has-search two">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icon.png" alt=""></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Locations">
                        </div>
                    </div>
                </div>
                <div class="btnarea">
                    <a href="<?php echo base_url();?>login" class="btn btn-outline-light">Login</a>
                    <a href="<?php echo base_url();?>register" class="btn btn-outline-light">Register</a>
                </div>
            </div>
        </div>
    </header>