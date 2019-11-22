 //=================== Insert Category Validation====================//

  $(document).on('click','#insert_category',function(){
    
    var category_parent_Id   =$('#category_parent_Id').val();
    var category_name        =$('#category_name').val();
    // var category_slug        =$('#category_slug').val();
    // var ext                  =$('#category_img').val();
    // var split_val            = ext.split(".");
    // var ext_val              = split_val[1];
    // var meta_keyword         =$('#meta_keyword').val();
    // var meta_description     =$('#meta_description').val();
    var status               =$('#status').val();

    if (category_parent_Id=='') 
        {
          alert('Please Select Category!!');
          $("#category_parent_Id").focus();
          return false;
        }
    if (category_name.length==0) 
        {
          alert('Enter Category Name!!');
          $("#category_name").focus();
          return false;
        }
    // if (category_slug.length==0) 
    //     {
    //       alert('Enter Category Slug!!');
    //       $("#category_slug").focus();
    //       return false;
    //     }
  
    // if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
    //     {
    //       alert('Please select correct format of your file');
    //       return false;
    //     }
    // if (meta_keyword.length==0) 
    //     {
    //       alert('Enter Meta Keyword!!');
    //       $("#meta_keyword").focus();
    //       return false;
    //     }
    // if (meta_description.length==0) 
    //     {
    //       alert('Enter Meta Description!!');
    //       $("#meta_description").focus();
    //       return false;
    //     }
    if (status=='0') 
        {
          alert("please select your status");
          $("#status").focus();
          return false;
        }                              

  });

 //===================End Insert Category Validation====================// 

 //=================== Update Category Validation====================//

  $(document).on('click','#edit_category',function(){
    
    var category_name        =$('#category_name').val();
    var category_slug        =$('#category_slug').val();
    // var ext                  =$('#category_img').val();
    // var split_val            = ext.split(".");
    // var ext_val              = split_val[1];
    // var meta_keyword         =$('#meta_keyword').val();
    // var meta_description     =$('#meta_description').val();
    var status               =$('#status').val();

    if (category_name.length==0) 
        {
          alert('Enter Category Name!!');
          $("#category_name").focus();
          return false;
        }
    if (category_slug.length==0) 
        {
          alert('Enter Category Slug!!');
          $("#category_slug").focus();
          return false;
        }
  
    // if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
    //     {
    //       alert('Please select correct format of your file');
    //       return false;
    //     }
    // if (meta_keyword.length==0) 
    //     {
    //       alert('Enter Meta Keyword!!');
    //       $("#meta_keyword").focus();
    //       return false;
    //     }
    // if (meta_description.length==0) 
    //     {
    //       alert('Enter Meta Description!!');
    //       $("#meta_description").focus();
    //       return false;
    //     }
    if (status.length==0) 
        {
          alert('Enter Status!!');
          $("#status").focus();
          return false;
        }                             

  });

 //===================End Update Category Validation====================//   

  
 //===================Insert Product Validation====================//

  $(document).on('click','#insert_product',function(){
    
    var category_Id          =$('#category_Id').val();
    var product_name         =$('#product_name').val();
    var product_slug         =$('#product_slug').val();
    
    var ext                  =$('#product_img').val();
    var split_val            = ext.split(".");
    var ext_val              = split_val[1];

    var price                =$('#price').val();
    // var meta_keyword         =$('#meta_keyword').val();
    // var meta_description     =$('#meta_description').val();
    var stock                =$('#stock').val();
    var status               =$('#status').val();
    

    if (category_Id=='') 
        {
          alert('Please Select Category!!');
          $("#category_Id").focus();
          return false;
        }
    if (product_name.length==0) 
        {
          alert('Enter Product Name!!');
          $("#product_name").focus();
          return false;
        }
    if (product_slug.length==0) 
        {
          alert('Enter Product Slug!!');
          $("#product_slug").focus();
          return false;
        }    
  
    if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
        {
          alert('Please select correct format of your file');
          return false;
        }
    if (price.length==0) 
        {
          alert('Enter Price!!');
          $("#price").focus();
          return false;
        }      
    // if (meta_keyword.length==0) 
    //     {
    //       alert('Enter Meta Keyword!!');
    //       $("#meta_keyword").focus();
    //       return false;
    //     }
    // if (meta_description.length==0) 
    //     {
    //       alert('Enter Meta Description!!');
    //       $("#meta_description").focus();
    //       return false;
    //     }
        
    if (stock=='0') 
        {
          alert("please select your stock");
          $("#stock").focus();
          return false;
        }     
    if (status=='0') 
        {
          alert("please select your status");
          $("#status").focus();
          return false;
        }                             

  });

 //===================End Insert Product Validation====================//

 //===================Update Product Validation====================//

  $(document).on('click','#update_product',function(){
    
    var category_Id          =$('#category_Id').val();
    var product_name         =$('#product_name').val();
    var product_slug         =$('#product_slug').val();
    
    // var ext                  =$('#product_img').val();
    // var split_val            = ext.split(".");
    // var ext_val              = split_val[1];

    var price                =$('#price').val();
    // var meta_keyword         =$('#meta_keyword').val();
    // var meta_description     =$('#meta_description').val();
    var stock                =$('#stock').val();
    var status               =$('#status').val();
    

    if (category_Id=='') 
        {
          alert('Please Select Category!!');
          $("#category_Id").focus();
          return false;
        }
    if (product_name.length==0) 
        {
          alert('Enter Product Name!!');
          $("#product_name").focus();
          return false;
        }
    if (product_slug.length==0) 
        {
          alert('Enter Product Slug!!');
          $("#product_slug").focus();
          return false;
        }    
  
    // if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
    //     {
    //       alert('Please select correct format of your file');
    //       return false;
    //     }
    if (price.length==0) 
        {
          alert('Enter Price!!');
          $("#price").focus();
          return false;
        }      
    // if (meta_keyword.length==0) 
    //     {
    //       alert('Enter Meta Keyword!!');
    //       $("#meta_keyword").focus();
    //       return false;
    //     }
    // if (meta_description.length==0) 
    //     {
    //       alert('Enter Meta Description!!');
    //       $("#meta_description").focus();
    //       return false;
    //     }
        
    if (stock=='0') 
        {
          alert("please select your stock");
          $("#stock").focus();
          return false;
        }     
    if (status=='0') 
        {
          alert("please select your status");
          $("#status").focus();
          return false;
        }                             

  });

 //===================End Update Product Validation====================//

 //=================== Insert Admin Validation====================//

  $(document).on('click','#insert_admin',function(){
    
    var username       =$('#username').val();
    var password       =$('#password').val();
    var admin_email    =$('#admin_email').val();
    var email_pattern  = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    var ext            =$('#admin_image').val();
    var split_val      = ext.split(".");
    var ext_val        = split_val[1];
    var status         =$('#status').val();

    if (username.length==0) 
        {
          alert('Enter Username!!');
          $("#username").focus();
          return false;
        }
    if (password.length==0) 
        {
          alert('Enter Password!!');
          $("#password").focus();
          return false;
        }
    if (admin_email.length==0) 
        {
          alert('Enter Admin Email!!');
          $("#admin_email").focus();
          error=1;
        }
    else if(email_pattern.test(admin_email))
        {
                    //alert("valid email");
        }
    else{
          alert("Please Enter Valid email");
          $("[name=admin_email]").css("background-color","red");
          return false;
        }
    if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
        {
          alert('Please select correct format of your file');
          return false;
        }
    if (status=='0') 
        {
          alert("please select your status");
          return false;
        }               

  });

  //===================End Insert Admin Validation====================//  


  //=================== Edit Admin Validation====================//

  $(document).on('click','#update_admin_user',function(){
    
    var username       =$('#username').val();
    var password       =$('#password').val();
    var admin_email    =$('#admin_email').val();
    var ext            =$('#admin_image').val();
    var split_val      = ext.split(".");
    var ext_val        = split_val[1];
    var status         =$('#status').val();

    if (username.length==0) 
        {
          alert('Enter Username!!');
          $("#username").focus();
          return false;
        }
    if (password.length==0) 
        {
          alert('Enter Password!!');
          $("#password").focus();
          return false;
        }
    if (admin_email.length==0) 
        {
          alert('Enter Admin Email!!');
          $("#admin_email").focus();
          return false;
        }
    if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
        {
          alert('Please select correct format of your file');
          return false;
        }
    if (status=='') 
        {
          alert("please select your status");
          return false;
        }               

  });

  //===================End Edit Admin Validation====================//  
 
  //=================== Insert General Settings Validation====================//

  $(document).on('click','#insert_general_settings',function(){
    
    var email          =$('#email').val();
    var phone          =$('#phone').val();
    var address        =$('#address').val();
    var google_map     =$('#google_map').val();
    var facebook       =$('#facebook').val();
    var instragram     =$('#instragram').val();
    var google_plus    =$('#google_plus').val();
    var twitter        =$('#twitter').val();
    var rss            =$('#rss').val();

    if (email.length==0) 
        {
          alert('Enter Email!!');
          $("#email").focus();
          return false;
        }
    if (phone.length==0) 
        {
          alert('Enter Phone!!');
          $("#phone").focus();
          return false;
        }
    if (address.length==0) 
        {
          alert('Enter Address!!');
          $("#address").focus();
          return false;
        }
    if (google_map.length==0) 
        {
          alert('Enter GoogleMap Link!!');
          $("#google_map").focus();
          return false;
        }    
    if (facebook.length==0) 
        {
          alert('Enter Facebook Link!!');
          $("#facebook").focus();
          return false;
        }               
    if (instragram.length==0) 
        {
          alert('Enter Instragram Link!!');
          $("#instragram").focus();
          return false;
        }
    if (google_plus.length==0) 
        {
          alert('Enter GooglePlus Link!!');
          $("#google_plus").focus();
          return false;
        }
    if (twitter.length==0) 
        {
          alert('Enter Twitter Link!!');
          $("#twitter").focus();
          return false;
        }
    if (rss.length==0) 
        {
          alert('Enter rss!!');
          $("#rss").focus();
          return false;
        }            
  });

//===================End Insert General Settings Validation====================//  

//=================== Update Insert Change Password Validation====================//

  $(document).on('click','#change_password',function(){
    
    var old_pass          =$('#old_pass').val();
    var password          =$('#password').val();
    var confirm_password  =$('#confirm_password').val();
    

    if (old_pass.length==0) 
        {
          alert('Enter Current Password!!');
          $("#old_pass").focus();
          return false;
        }
    if (password.length==0) 
        {
          alert('Enter New Password!!');
          $("#password").focus();
          return false;
        }
    if (confirm_password.length==0) 
        {
          alert('Enter confirm password!!');
          $("#confirm_password").focus();
          return false;
        }
                              
  });

//===================Update Insert Change Password Validation====================// 

//=================== Insert CMS Validation====================//

  $(document).on('click','#insert_cms',function(){
    
    var page_name            =$('#page_name').val();
    var page_title           =$('#page_title').val();
    var slug                 =$('#slug').val();
    // var tinyMceExample       =$('#tinyMceExample').val();
    // var meta_keyword         =$('#meta_keyword').val();
    // var meta_description     =$('#meta_description').val();
    var ext                  =$('#cms_img').val();
    var split_val            = ext.split(".");
    var ext_val              = split_val[1];
    var status               =$('#status').val();

    if (page_name.length==0) 
        {
          alert('Enter Page Name!!');
          $("#page_name").focus();
          return false;
        }
    if (page_title.length==0) 
        {
          alert('Enter Page Title!!');
          $("#page_title").focus();
          return false;
        }
    if (slug.length==0) 
        {
          alert('Enter Slug!!');
          $("#slug").focus();
          return false;
        }
    // if (tinyMceExample.length==0) 
    //     {
    //       alert('Enter Description!!');
    //       $("#tinyMceExample").focus();
    //       return false;
    //     }    
    // if (meta_keyword.length==0) 
    //     {
    //       alert('Enter Meta Keyword!!');
    //       $("#meta_keyword").focus();
    //       return false;
    //     }
    // if (meta_description.length==0) 
    //     {
    //       alert('Enter Meta Description!!');
    //       $("#meta_description").focus();
    //       return false;
    //     }
    if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
        {
          alert('Please select correct format of your file');
          return false;
        }
    
    if (status=='0') 
        {
          alert("please select your status");
          $("#status").focus();
          return false;
        }                              

  });

 //===================End Insert CMS Validation====================//  


//=================== Update CMS Validation====================//

  $(document).on('click','#edit_cms',function(){
    
    var page_name            =$('#page_name').val();
    var page_title           =$('#page_title').val();
    var slug                 =$('#slug').val();
    // var tinyMceExample       =$('#tinyMceExample').val();
    // var meta_keyword         =$('#meta_keyword').val();
    // var meta_description     =$('#meta_description').val();
    var ext                  =$('#cms_img').val();
    var split_val            = ext.split(".");
    var ext_val              = split_val[1];
    var status               =$('#status').val();

    if (page_name.length==0) 
        {
          alert('Enter Page Name!!');
          $("#page_name").focus();
          return false;
        }
    if (page_title.length==0) 
        {
          alert('Enter Page Title!!');
          $("#page_title").focus();
          return false;
        }
    if (slug.length==0) 
        {
          alert('Enter Slug!!');
          $("#slug").focus();
          return false;
        }
    // if (tinyMceExample.length==0) 
    //     {
    //       alert('Enter Description!!');
    //       $("#tinyMceExample").focus();
    //       return false;
    //     }    
    // if (meta_keyword.length==0) 
    //     {
    //       alert('Enter Meta Keyword!!');
    //       $("#meta_keyword").focus();
    //       return false;
    //     }
    // if (meta_description.length==0) 
    //     {
    //       alert('Enter Meta Description!!');
    //       $("#meta_description").focus();
    //       return false;
    //     }
    if ($.inArray(ext_val,['gif','png','jpg','jpeg'])==-1) 
        {
          alert('Please select correct format of your file');
          return false;
        }
    
    if (status=='0') 
        {
          alert("please select your status");
          $("#status").focus();
          return false;
        }                              

  });

 //===================End Update CMS Validation====================// 