      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 align="center">Update Slider</h3>
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>superpanel/slider/update_slider/<?php echo $slider[0]->id?>">
                    <div class="form-group">
                      <label for="Slider Heading">Slider Heading:</label>
                      <input type="text" class="form-control" value="<?php echo $slider[0]->slider_heading?>" name="slider_heading">
                    </div>
                     <div class="form-group">
                      <label for="Slider Description">Slider Description:</label>
                      <textarea class="form-control" rows="4" name="slider_description"><?php echo $slider[0]->slider_description?></textarea>
                    </div>
    
                    <div class="form-group">
                      <label for="Slider Image"><b>Slider Image(*):</b></label>
                      <div class="row">
                      <div class="col-sm-6">
                      <img src="<?php echo $slider[0]->slider_img?>"class="img-lg rounded" style="width:160px;height:100px;">
                      </div>
                      <div class="col-sm-6">  
                      <input type="file" class="dropify" name="slider_img" data-height="150" />
                      </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Slider Button Url">Slider Button Url:</label>
                      <input type="text" class="form-control" name="slider_button_url" value="<?php echo $slider[0]->slider_button_url?>">
                    </div>

                    <div class="form-group">
                      <label for="Slider Button Text">Slider Button Text:</label>
                      <input type="text" class="form-control" name="slider_button_text" value="<?php echo $slider[0]->slider_button_text?>">
                    </div>
    
                    <div class="form-group">
                    <label for="exampleSelectSuccess"><b>Status:</b></label>
                    <select class="form-control border-success" id="status" name="status">
                      <option value="1" <?php if($slider[0]->status == 1){ echo 'selected';} ?>>Active</option>
                      <option value="0" <?php if($slider[0]->status == 0){ echo 'selected';} ?>>Deactive</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" id="slider_update">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
              </div>
          </div>  
        </div>
      </div>