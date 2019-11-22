<?php $access_id = $this->session->userdata('access_id'); ?>
<?php $query = $this->General_model->show_data_id('admin_access',$access_id,'admin_id','get','');
$admin_img=$this->General_model->show_data_id('admin_details',$access_id,'id','get','');

if($query){?> 
 
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link d-flex">
              <div class="profile-image">
                <img src="<?php echo base_url();?>images/GWG_logo.png" alt="image"/>
                <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome
                  <?=$query[0]->name;?>
                </p>
                <p class="designation">
                  <strong>Great Wine Global</strong>
                </p>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>superpanel/home">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user_management" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Manage User</span>
              <span class="badge badge-danger">1</span>
              
            </a>
            <div class="collapse" id="user_management">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/customer">User</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product_management" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-globe menu-icon"></i>
              <span class="menu-title">Manage Product</span>
              <span class="badge badge-warning">5</span>
            </a>
            <div class="collapse" id="product_management">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/categorie">Categories</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/product">Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/specification">Specification</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/discount">Discount & coupon</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/shippnig">Shipping</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product_management2" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Report Section</span>
              <span class="badge badge-warning">3</span>
            </a>
            <div class="collapse" id="product_management2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/sales_order_customer">Customer</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/sales_order">Product(Sales)</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/transaction">Transaction</a></li> -->
                
              </ul>
            </div>
          </li>


          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sales_order" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-layers menu-icon"></i>
              <span class="menu-title">Sales Order</span>
              <span class="badge badge-success">1</span>
            </a>
            <div class="collapse" id="sales_order">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/sales_order">Order</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/transaction">Transaction</a></li>
              </ul>
            </div>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>superpanel/slider">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Manage Slider</span>
              <span class="badge badge-primary">1</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>superpanel/cms">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">CMS</span>
              <span class="badge badge-danger">1</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>superpanel/subscription">
              <i class="icon-lock menu-icon"></i>
              <span class="menu-title">Subscription</span>
              <span class="badge badge-warning">1</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#newsletter" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-mail menu-icon"></i>
              <span class="menu-title">Newsletter</span>
              <span class="badge badge-success">1</span>
            </a>
            <div class="collapse" id="newsletter">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/newsletter">Newsletter</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#visitor_enquery" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-speech-bubble menu-icon"></i>
              <span class="menu-title">Visitor Enquiry</span>
              <span class="badge badge-primary">1</span>
            </a>
            <div class="collapse" id="visitor_enquery">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/visitor_enquery">Visitor Enquiry</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#global_settings" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Global Settings</span>
              <span class="badge badge-info">6</span>
            </a>
            <div class="collapse" id="global_settings">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/general_settings">General Settings</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/credit">Credit</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/redeem_creadit">Redeem Credit</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/free_delivery_charge">Set Free Delivery Amount</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/admin_user">Admin User</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>superpanel/change_password">Change Password</a></li>  
              </ul>
            </div>
          </li>

        </ul>
      </nav>
     <?php }?> 
   