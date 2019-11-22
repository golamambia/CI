      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 align="center">Entry New Slider</h3>
               <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/slider/insert_slider">
                    <div class="form-group">
                      <label for="Slider Heading"><b>Slider Heading:</b></label>
                      <input type="text" class="form-control" id="slider_heading" placeholder="Enter Slider Heading" name="slider_heading">
                    </div>
                     <div class="form-group">
                      <label for="Slider Description"><b>Slider Description:</b></label>
                      <textarea class="form-control" id="slider_description" rows="4" name="slider_description"></textarea>
                    </div>
    
                    <div class="form-group">
                      <label for="Slider Image"><b>Slider Image(*):</b></label>
                      <input type="file" class="dropify" data-height="300" / name="slider_img">
                    </div>

                    <div class="form-group">
                      <label for="Slider Button Url"><b>Slider Button Url:</b></label>
                      <input type="text" class="form-control" id="slider_button_url" placeholder="Enter Slider Button Url" name="slider_button_url">
                    </div>

                    <div class="form-group">
                      <label for="Slider Button Text"><b>Slider Button Text:</b></label>
                      <input type="text" class="form-control" id="slider_button_text" placeholder="Enter Slider Button Text" name="slider_button_text">
                    </div>
    
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status:</b></label>
                    <select class="form-control border-success" id="status" name="status">
                      <option value="1">Active</option>
                      <option value="2">Deactive</option>
                    </select>
                  </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>