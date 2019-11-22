<div class="clearfix"></div>
    <!-- Breadcrumps start here -->
    <div class="bradcumps01">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <ul>
                        <li><a href="<?=base_url();?>" style="text-decoration:none;">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>wines</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumps end here -->

    <!-- Inner banner start here -->
    <div class="innerbanners01">
        <img src="<?php echo base_url()?>assets_front/image/innerbgs01.jpg" alt="great wine">
        <div class="innerabvs01">
            <h2><?=$page[0]->page_title;?></h2>
        </div>
    </div>
    <!-- Inner banner end here -->
    <div class="clearfix"></div>
    <!-- Inner content start here -->

    <div class="container">
            <div class="row">
                <div class="col col-sm-12">
                    <div class="cmspages01">
      
                          <div class="cmspagelefts01">
                              <h2><?php echo $page[0]->page_name?></h2>
                              <p><?php echo $page[0]->description?></p>
                          </div>
      
                          <div class="cmspagerights01">
                              <img src="<?php echo $page[0]->image?>" alt="cms">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- Inner content end here -->