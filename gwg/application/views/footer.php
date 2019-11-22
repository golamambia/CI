<!-- Footer start here -->
    <div class="wrapfooters01">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-3">
                    <div class="footers01">
                        <img src="<?php echo base_url();?>assets_front/image/footerlogos01.png" alt="great wine">
                        <p>Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p> 
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footers01">
                        <h2>Links</h2>
                        <ul>
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li><a href="<?php echo base_url();?>product">Wines</a></li>
                            <li><a href="<?php echo base_url();?>product/gifts">Gifts</a></li>
                            <li><a href="<?php echo base_url();?>product/weddings">Weddings</a></li>
                            <li><a href="<?php echo base_url();?>page/support">Support</a></li>
                            <li><a href="<?php echo base_url();?>page/term-and-condition">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footers01">
                        <h2>information</h2>
                        <ul>
                            <li><a href="javascript:void(0)" class="actcolors01" data-toggle="modal" data-target="#loginmodals01">Sign In</a></li>
                            <li><a href="<?php echo base_url();?>home/register">Register</a></li>
                            <li><a href="<?php echo base_url();?>page/about-us">About Us</a></li>
                            <li><a href="<?php echo base_url();?>page/events">Events</a></li>
                            <li><a href="<?php echo base_url();?>page/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footers01">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="javascript:void(0)"><i class="fas fa-map-marker-alt"></i><?php echo $general_setting[0]->address;?></a></li>
                            <li><a href="javascript:void(0)"><i class="fas fa-phone-volume"></i><?php echo $general_setting[0]->phone;?></a></li>
                            <li><a href="javascript:void(0)"><i class="fas fa-envelope"></i><?php echo $general_setting[0]->email;?></a></li>
                        </ul>
                    </div>
                    <div class="footericons01">
                        <a href="<?php echo $general_setting[0]->instragram_link;?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $general_setting[0]->facebook_link;?>"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo $general_setting[0]->twitter_link;?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $general_setting[0]->youtube_link;?>"><i class="fab fa-youtube"></i></a>
                        <a href="<?php echo $general_setting[0]->pinterest_link;?>"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footers02">
        <p>© Copyright GWG 2019</p>
    </div>
    <!-- Footer end here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="<?php echo base_url();?>assets_front/js/bootstrap.min.js"></script>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets_front/js/materialize.js"></script>
    <script src="<?php echo base_url();?>assets_front/js/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>assets_front/js/myscript.js"></script>
    <script src="<?php echo base_url();?>assets_front/js/formvalidation.js"></script>
    <script src="<?php echo base_url();?>assets_front/js/jquery.bxslider.js"></script>
    <!-- <script src="<?php echo base_url();?>assets_front/js/search.js"></script> -->
    <script src="<?php echo base_url();?>assets_front/js/myscript02.js"></script>
    <script src="<?php echo base_url();?>assets_front/js/placeorder.js"></script>
    <script src="<?php echo base_url();?>assets_front/js/cartpage.js"></script>
    


    <!-- Zooming Functionality js -->
    <script type="text/javascript" src="<?=base_url();?>user_panel/dist/plugins/thumbelina-master/thumbelina.js"></script>
    <script type="text/javascript" src="<?=base_url();?>user_panel/dist/plugins/thumbelina-master/cloudzoom.js"></script>
    <!-- Zooming Functionality js -->

     <script>

        var slidermain= $('.bxslider').bxSlider({
            controls:true,
            pager:false,
            minSlides: 1,
            maxSlides: 1

        });
        $('#bx-pager').bxSlider({
            minSlides: 1,
            maxSlides: 4,
            slideWidth: 79,
            slideMargin: 10,
            controls:true,
            pager:false,
        onSliderLoad:function() {
            $("#bx-pager a").click(function(e){
                e.preventDefault();
            slidermain.goToSlide($(this).attr("data-slide-index"));
            $(this).addClass("active").siblings("a").removeClass("active");
            })
         }
        });
    </script>
    <script>
        function add_cart(e)
        {
            var cartCount  = $('#cartCount').text();
            var product_id = $('#product_id'+e).val();
            var quantity   = $('#quantity'+e).val();

                $.ajax({
                    url:"<?php echo base_url();?>product/add_cart",
                    method:"POST",
                    data:{product_id:product_id,quantity:quantity},
                    success:function(responce)
                    {
                        //console.log(responce);
                        alert('Added To Cart');
                        $('#cartCount').text(responce);
                    },
                });                      
        }
    </script>

    <script>
        function add_wishlist(e)
        {
            var product_id = $('#product_id'+e).val();

                $.ajax({
                    url:"<?php echo base_url();?>product/wishlist",
                    method:"POST",
                    data:{product_id:product_id},
                    success:function(responce)
                    {
                        console.log(responce);
                        alert('Added To Wishlist');
                    },
                });                      
        }
    </script>

    

    <script>
        $(document).ready(function(){
        $("#remove").click(function(e){
            $this  = $(this);
            e.preventDefault();
            var url = $(this).attr("href");
            $.get(url, function(r){
                if(r.success){
                    $this.closest("tr").remove();
                    $('#cartCount').text(responce);
                }
            })
        });
      });
    </script>

    <!----------------------------------- CART PRODUCT PLUS AND MINUS ------------------> 
<script>
    function product_plus(e)
    {
        var qnt=$('#quantity'+e).val();  
    }

    function product_minus(e)
    {
        var qnt=$('#quantity'+e).val();
    }

    function product_plus_minus(e)
    {
        var product_id               = $('#product_id'+e).val();
        var rowid                    = $('#rowid'+e).val();
        var total_product            = $('#quantity'+e).val();
        var price                    = $('#price'+e).val();
        var total_price              = $('#total_price').val();
        var total_shipping_price     = $('#total_shipping_price').val();
        var total_tax_price          = $('#total_tax_price').val();
        var total_discount_price     = $('#total_discount_price').val();

        var update_single_price      = price*total_product;

        var update_total_price       = (parseFloat(total_price) + parseFloat(total_shipping_price) + parseFloat(total_tax_price) + parseFloat(update_single_price)- parseFloat(total_discount_price) - parseFloat(price));

        $('#single_price'+e).text(update_single_price.toFixed(2));
        $('#total_price').val(update_total_price.toFixed(2));
        $('#total_price_text').text(update_total_price.toFixed(2));

        $.ajax({
            type:"POST",
            url:"<?php echo site_url('product/cart_plus_minus')?>",
            data:{product_id:product_id,total_product:total_product,rowid:rowid,total_product:total_product},
            success:function(data)
            {
                console.log(data);
            }
        });
    }

</script>
<!----------------------------------- // CART PRODUCT PLUS AND MINUS ------------------>

<!-------------------------- //Product Sorting and filtering -------------------------> 
 <script>
    $("#filter_form").on("change", "select", function() {
        var form_data = $('#filter_form').serialize();

        $.ajax({
            type:"get",
            url:"<?php echo site_url('product/filter_product');?>",
            data:form_data,
            success:function(data)
            {
                console.log(data);
                $('#filter_product').html(data);
                window.history.replaceState({foo: 'bar'}, '', "<?php echo site_url('product');?>?"+form_data);
                // window.location.reload();
            }
        });
    });
</script>
<!-------------------------- //Product Sorting and filtering  -------------------------> 

<!-------------------------- //Product Searching -------------------------> 
 <script>
    $("#filter_form").on("change", "input[type='text']", function() {
        var form_data = $('#filter_form').serialize();

        $.ajax({
            type:"get",
            url:"<?php echo site_url('product/filter_product');?>",
            data:form_data,
            success:function(data)
            {
                console.log(data);
                $('#filter_product').html(data);
                window.history.replaceState({foo: 'bar'}, '', "<?php echo site_url('product');?>?"+form_data);
                // window.location.reload();
            }
        });
    });
</script> 
<!-------------------------- //Product Searching  ------------------------->
<!-------------------------- //Product Zooming  ------------------------->
<script>
    $(function () {  
    CloudZoom.quickStart(); 
    $('.bxslider').Thumbelina({
    orientation:'vertical',         // Use vertical mode (default horizontal).
    $bwdBut:$('.bxslider .top'),     // Selector to top button.
    $fwdBut:$('.bxslider .bottom')   // Selector to bottom button.
    }); 

    $('.bxslider').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:7
        }
    }

}); 
});
</script>

<!-------------------------- //Product Zooming  ------------------------->

<script>
    $(document).on('change', '.fillshipping', function (e) {
        e.preventDefault();
        var value = $(this).data("value");
        $.ajax({
            type:"POST",
            url:"<?php echo site_url('checkout/filling_shipping_billing_address');?>",
            data:{id:value},
            success:function(data)
            {
                console.log(data);
                data = JSON.parse(data);
                $("#firstname").val(data[0].frist_name);
                $("#lastname").val(data[0].last_name);
                $("#email_id").val(data[0].email_id);
                $("#address").val(data[0].address);
                $("#phone_no").val(data[0].phone_no);
                $("#zipcode").val(data[0].zip_code);
                $("#city").val(data[0].city);
                $("#s_state").val(data[0].state);
                $("#country").val(data[0].country);
            }
        });
    });
</script>

<script>
$(document).on('click', '.insertshippingaddress', function (e) {
        e.preventDefault();    
        var flag                 = $('#flag').val();
    if(flag == 0)
    {    
        var first_name           = $('#firstname').val();
        var last_name            = $('#lastname').val();
        var email_id             = $('#email_id').val();
        var address              = $('#address').val();
        var phone_no             = $('#phone_no').val();
        var city                 = $('#city').val();
        var state                = $('#s_state').val();
        var zipcode              = $('#zipcode').val();
        var country              = $('#country').val();
        var shippingaddress_name = $('#shippingaddress_name').val();

    if(shippingaddress_name != '')
    {
        $.ajax({

        type:"POST",
        url:"<?php echo site_url('checkout/multiple_address_add');?>",
        data:{first_name:first_name,last_name:last_name,email_id:email_id,address:address,
        phone_no:phone_no,zipcode:zipcode,city:city,
        state:state,country:country,shippingaddress_name:shippingaddress_name,flag:flag},
        success:function(data)
            {
                $('#saveshippingaddress').modal('close');
            }
        });
    }
    else
    {
                $('#err').html('Please enter address book name.')
    }    
    } 

    if(flag == 1)
    {    
        var first_name           = $('#b_firstname').val();
        var last_name            = $('#b_lastname').val();
        var email_id             = $('#b_email_id').val();
        var address              = $('#b_address').val();
        var phone_no             = $('#b_phone_no').val();
        var city                 = $('#b_city').val();
        var state                = $('#b_s_state').val();
        var zipcode              = $('#b_zipcode').val();
        var country              = $('#b_country').val();
        var shippingaddress_name = $('#shippingaddress_name').val();    

    if(shippingaddress_name != '')
    {
        $.ajax({
        type:"POST",
        url:"<?php echo site_url('checkout/multiple_address_add');?>",
        data:{first_name:first_name,last_name:last_name,email_id:email_id,address:address,
        phone_no:phone_no,zipcode:zipcode,city:city,
        state:state,country:country,shippingaddress_name:shippingaddress_name,flag:flag},
        success:function(data)
            {
            $('#saveshippingaddress').modal('close');
            }
        });
    }
    else
    {
             $('#err').html('Please enter address book name.')
    }    
    }
});
</script>

<script>

    function copydetail() {

        alert("Are you sure ?") ;

        var firstname = document.getElementById("firstname").value ;

        var lastname  =  document.getElementById("lastname").value ;

        var address   =  document.getElementById("address").value ;

        var email_id  =  document.getElementById("email_id").value ;

        var phone_no  =  document.getElementById("phone_no").value ;

        var city      =  document.getElementById("city").value ;

        var s_state   =  document.getElementById("s_state").value ;

        var zipcode   =  document.getElementById("zipcode").value ;

        var country   =  document.getElementById("country").value ;


        if(document.getElementById("same_sipp_bill").checked){

        document.getElementById("b_firstname").value    = firstname ;

        document.getElementById("b_firstname").readOnly = true;

        document.getElementById("b_lastname").value     = lastname ;

        document.getElementById("b_lastname").readOnly  = true;

        document.getElementById("b_address").value      = address ;

        document.getElementById("b_address").readOnly   = true;

        document.getElementById("b_email_id").value     = email_id ;

        document.getElementById("b_email_id").readOnly  = true;

        document.getElementById("b_phone_no").value     = phone_no ;

        document.getElementById("b_phone_no").readOnly  = true;

        document.getElementById("b_city").value         = city ;

        document.getElementById("b_city").readOnly      = true;

        document.getElementById("b_s_state").value      = s_state ;

        document.getElementById("b_s_state").readOnly   = true;

        document.getElementById("b_zipcode").value      = zipcode ;

        document.getElementById("b_zipcode").readOnly   = true;

        document.getElementById("b_country").value      = country ;

        document.getElementById("b_country").readOnly   = true;
         
        } else {

        document.getElementById("b_firstname").value    = '' ;

        document.getElementById("b_firstname").readOnly = false;

        document.getElementById("b_lastname").value     = '' ;

        document.getElementById("b_lastname").readOnly  = false;

        document.getElementById("b_address").value      = '' ;

        document.getElementById("b_address").readOnly   = false;

        document.getElementById("b_email_id").value     = '' ;

        document.getElementById("b_email_id").readOnly  = false;

        document.getElementById("b_phone_no").value     = '' ;

        document.getElementById("b_phone_no").readOnly  = false;

        document.getElementById("b_city").value         = '' ;

        document.getElementById("b_city").readOnly      = false;

        document.getElementById("b_s_state").value      = '' ;

        document.getElementById("b_s_state").readOnly   = false;

        document.getElementById("b_zipcode").value      = '' ;

        document.getElementById("b_zipcode").readOnly   = false;

        document.getElementById("b_country").value      = '' ;

        document.getElementById("b_country").readOnly   = false;

        }
    }
    </script>
<script>

        function shipping_valid(){

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
            $("#s5").html("Phone number is mandatory");
            return false;
        }else if(isNaN($("#phone_no").val())){
            $("#phone_no").focus();
            $("#s5").html("Phone number code must be in digit");
            return false;
        }else{ $("#s5").html("");}

        if($("#city").val() == "" ){
            $("#city").focus();
            $("#s6").html("city is mandatory");
            return false;
        }else{ $("#s6").html("");}

        if($("#s_state").val() == "" ){
            $("#s_state").focus();
            $("#s7").html("State is mandatory");
            return false;
        }else{ $("#s7").html("");}

        if($("#zipcode").val() == "" ){
            $("#zipcode").focus();
            $("#s8").html("Shipping zipcode is mandatory");
            return false;
        }else{ $("#s8").html("");}

        if($("#country").val() == "" ){
            $("#country").focus();
            $("#s9").html("Shipping country is mandatory");
            return false;
        }else{ $("#s10").html("");}

        if(confirm('Do you want to save it in address book ?') == true){
            $('.modal').modal({
            dismissible: true
            });
            $('#saveshippingaddress').modal('open');
            $('#flag').val(0);
        }
    }


function billing_valid(){

        var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
        var formemail = $("#b_email_id").val();

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
        else  if(!emailRegex.test(formemail)){
            $("#b_email_id").focus();
            $("#b4").html("Re enter the valid email");
            return false;
        }else{$("#b4").html("");}

        if($("#b_phone_no").val() == "" ){
            $("#b_phone_no").focus();
            $("#s5").html("Phone number is mandatory");
            return false;
        }else if(isNaN($("#b_phone_no").val())){
            $("#b_phone_no").focus();
            $("#s5").html("Phone number code must be in digit");
            return false;
        }else{ $("#s5").html("");}

        if($("#b_city").val()==""){
            $("#b_city").focus();
            $("#b6").html("City is mandatory");
            return false;
        }else{ $("#b6").html("");}

        if($("#b_s_state").val()==""){
            $("#b_s_state").focus();
            $("#b7").html("Billing state is mandatory");
            return false;
        }else{ $("#b7").html("");}

        if($("#b_zipcode").val() == "" ){
            $("#b_zipcode").focus();
            $("#s8").html("Shipping zipcode is mandatory");
            return false;
        }else{ $("#s8").html("");}

        if($("#b_country").val()==""){
            $("#b_country").focus();
            $("#b9").html("Billing country is mandatory");
            return false;
        }else{ $("#b9").html("");}

        if(confirm('Do you want to save it in address book ?') == true){
            $('.modal').modal({
            dismissible: true
            });
            $('#saveshippingaddress').modal('open');
            $('#flag').val(1);
        }

        $('#ba').removeClass("in");
        $('#po').addClass("in");
    }
 
    </script> 

    <script>
        function update_profile()
        {
            var customer_fullname     =$('#customer_fullname').val();
            var email                 =$('#email').val();
            var phone_no              =$('#phone_no').val();

            $.ajax({
                    url:"<?php echo base_url();?>customer/dashboard/update_profile",
                    method:"POST",
                    data:{customer_fullname:customer_fullname,email:email,phone_no,phone_no},
                    success:function(responce)
                    {
                        // console.log(responce);
                        $('#my_profile').html('Updated Successfully');
                    },
                });   
        }
    </script>
    <script>
        function update_shipping()
        {
            var first_name     =$('#first_name').val();
            var last_name      =$('#last_name').val();
            var email_id       =$('#email_id').val();
            var phone_no       =$('#phone_no').val();
            var address        =$('#address').val();
            var city           =$('#city').val();
            var state          =$('#state').val();
            var zip_code       =$('#zip_code').val();
            var country        =$('#country').val();
            var flag           =$('#flag').val();

            $.ajax({
                    url:"<?php echo base_url();?>customer/dashboard/update_shipping",
                    method:"POST",
                    data:{first_name:first_name,last_name:last_name,email_id:email_id,phone_no:phone_no,address:address,city:city,state:state,zip_code:zip_code,country:country},
                    success:function(responce)
                    {
                        // console.log(responce);
                        $('#my_profile').html('Updated Successfully');
                    },
                });   
        }
    </script>

    <script>
        function update_billing()
        {
            var first_name     =$('#first_name').val();
            var last_name      =$('#last_name').val();
            var email_id       =$('#email_id').val();
            var phone_no       =$('#phone_no').val();
            var address        =$('#address').val();
            var city           =$('#city').val();
            var state          =$('#state').val();
            var zip_code       =$('#zip_code').val();
            var country        =$('#country').val();
            var flag           =$('#flag').val();

            $.ajax({
                    url:"<?php echo base_url();?>customer/dashboard/update_billing",
                    method:"POST",
                    data:{first_name:first_name,last_name:last_name,email_id:email_id,phone_no:phone_no,address:address,city:city,state:state,zip_code:zip_code,country:country},
                    success:function(responce)
                    {
                        // console.log(responce);
                        $('#my_profile').html('Updated Successfully');
                    },
                });   
        }
    </script>  
    
  </body>
</html>