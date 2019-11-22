<div class="main-panel">
        <div class="content-wrapper">
              <h1 style="color:blue" align="center"><b>Update Specification</b></h1></br></br>
              <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url()?>superpanel/specification/update_specification/<?php echo $specification[0]->specification_id?>">
            <fieldset>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label"><b>Select Category:</b></label>
                           <div class="col-sm-8">
                               <select select class="js-example-basic-multiple" multiple="multiple" style="width:100%" id="Category" name="category_name">
                                  <option value="Select">Select Category</option>
                                  <option value="Premium Wine" <?php if($category[0]->category_name){ echo 'selected';} ?>>Premium Wine</option>
                                  <option value="Classic Wine" <?php if($category[0]->category_name){ echo 'selected';}  ?>>Classic Wine</option>
                                  <option value="Combo Wine" <?php if($category[0]->category_name){ echo 'selected';} ?>>Combo Wine</option>
                               </select>
                           </div>
                        </div>    
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Specification Name</b></label>
                            <div class="col-sm-8">
                                <input name="specification_name[]" id="sport_name" class="form-control" type="text" placeholder="Specification name" autocomplete="off" required value="<?php echo $specification[0]->specification_name?>">
                            </div>
                        </div>
                    </div>
                </div>

                <span id="AppendData"></span>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-9 product_add">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            </form>
        </div>
     </div> 