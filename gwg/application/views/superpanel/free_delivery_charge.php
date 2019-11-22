               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
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

                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Global Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Free delivery amount</span></li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </br>
             <div class="row">
             <div class="col-lg-12">
                       <form action="<?php echo base_url();?>superpanel/free_delivery_charge/update_amount" method="post">
                          
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label"><b>Enter Amount:</b></label>
                              </div>
                              <div class="col-lg-6">
                                <input class="form-control"  name="amount" id="amount" type="text" placeholder="exam:100 usd=1 creadit" value="<?=$change_amount[0]->amount;?>" required>
                                <span id="er1" class="mandatory"></span> </div>
                            </div>
                            
                            
                            <div class="form-group row">
                              <div class="col-lg-3"> </div>
                              <div class="col-lg-8">
                                <input class="btn btn-primary" type="submit" value="Submit" >
                              </div>
                            </div>
                  </form>
              </div>
          </div>  
        </div>
      </div>

               


         


                 
