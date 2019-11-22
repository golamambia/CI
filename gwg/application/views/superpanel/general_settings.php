               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Global Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>General Settings</span></li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </br>
             <div class="row">
             <div class="col-lg-12">
                <form class="forms-sample" method="post"  action="<?php echo base_url();?>superpanel/general_settings/insert_general_settings">
                    <div class="form-group">
                      <label for="Email"><b>Email<em style="color:red">*</em>:</b></label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="Phone"><b>Phone<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="phone" placeholder="Enter Phone No" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="Address"><b>Address<em style="color:red">*</em>:</b></label>
                      <textarea class="form-control" id="address" rows="4" name="address"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Google Map"><b>Google Map:</b></label>
                      <input type="text" class="form-control" id="google_map" placeholder="Enter Google Map" name="google_map">
                    </div>
                    <div class="form-group">
                      <label for="Facebook"><b>Facebook<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="facebook" placeholder="Enter Facebook Link" name="  facebook_link">
                    </div>
                    <div class="form-group">
                      <label for="Instragram"><b>Instragram<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="instragram" placeholder="Enter Instragram Link" name="instragram_link">
                    </div>
                    <div class="form-group">
                      <label for="Google Plus"><b>Google Plus:</b></label>
                      <input type="text" class="form-control" id="google_plus" placeholder="Enter Google Plus Link" name="  googleplus_link">
                    </div>
                    <div class="form-group">
                      <label for="Youtube"><b>Youtube<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="youtube" placeholder="Enter Youtube Link" name="youtube_link">
                    </div>
                    <div class="form-group">
                      <label for="Pinterest"><b>Pinterest<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="pinterest" placeholder="Enter Pinterest Link" name="pinterest_link">
                    </div>
                    <div class="form-group">
                      <label for="Twitter"><b>Twitter<em style="color:red">*</em>:</b></label>
                      <input type="text" class="form-control" id="twitter" placeholder="Enter Twitter Link" name="twitter_link">
                    </div>
                    <div class="form-group">
                      <label for="Rss"><b>Rss:</b></label>
                      <input type="text" class="form-control" id="rss" placeholder="Enter Rss Link" name="rss_link">
                    </div>
                    <button type="submit" class="btn btn-success mr-2" id="insert_general_settings">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>

               


         


                 
