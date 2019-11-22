<div class="container">
<br><br><br><br>
    <!-- <div class="starter-template">
        <h1>PayPal Payment</h1>
        <p class="lead">Success</p>
    </div> -->

    <div class="contact-form">
        <div>
            <h2 style="font-family: 'quicksandbold'; font-size:20px; color:#313131; padding-bottom:8px;">Thank you for your order. Your order is being processed and you will be notified of the result shortly.</h2>
            <?php if($this->session->flashdata('cod_num')!=''){?>
                                             <h1 style="font-size: 20px;">Your Order Id : <?php echo @$this->session->flashdata('cod_num');?></h1>
                                                <?php }?>
                                            </div>
                                        
           <br/>
        </div>
    <!-- /.container -->

<br><br>
</div>