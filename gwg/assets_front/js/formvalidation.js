//=================== Insert Admin Validation====================//

  $(document).on('click','#insert_register',function(){
    
    var customer_fullname  =$('#fullnames01').val();
    var email_id           =$('#email_id').val();
    var password           =$('#password01').val();
    var confirm_password   =$('#conformpassword01').val();
    var phone_no           =$('#contacts01').val();
    var gender             =$('#gender').val();
    // var wine_interest      =$('#wine_interest').val();
    var checkbox           =$('#checkbox').val();


    if (customer_fullname.length==0) 
        {
          alert('Enter Customer Fullname!!');
          $("#fullnames01").focus();
          return false;
        }
    if (email_id.length==0) 
        {
          alert('Enter Email!!');
          $("#email_id").focus();
          return false;
        }
    if (password.length==0) 
        {
          alert('Enter Password!!');
          $("#password01").focus();
          return false;
        }
    if (confirm_password.length==0) 
        {
          alert('Enter Confirm Password!!');
          $("#conformpassword01").focus();
          return false;
        }    
      
    if (phone_no.length==0) 
        {
          alert('Enter Phone No!!');
          $("#contacts01").focus();
          return false;
        }

    if ($('input[name=gender]:checked').length<=0) 
        {
          alert("please select your Gender");
          $('#gender').focus();
          return false;
        }
    // if (wine_interest=='') 
    //     {
    //       alert("please select your Wine Interest");
    //       return false;
    //     }        
           
    if ($('input[name=checkbox]:checked').length<=0) 
        {
          alert("please select Checkbox ");
          $('#checkbox').focus();
          return false;
        }               

  });

  //===================End Insert Admin Validation====================//  