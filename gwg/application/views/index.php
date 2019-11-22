

    <!-- Banner start here -->
    <div class="slider banners01">
        <ul class="slides">
            <?php $i=1; foreach ($slider as $key => $s){?>
            <li>
                <img src="<?php echo $s->slider_img;?>" alt="great wine"> <!-- random image -->
                <div class="caption left-align">
                    <div class="avebanners01 <?php if($key == '1' || $key == '3'){ echo "avebanrights01"; }?>">
                        <h2><?php echo $s->slider_heading;?></h2>
                        <p><?php echo $s->slider_description;?></p>
                        <a href="javascript:void(0)">get started</a>
                    </div>
                </div>
            </li>
          <?php $i++; }?>
        </ul>
    </div>
    <!-- Banner end here -->

    <!-- Great wine start here -->
    <?php echo $cms[0]->description;?> 
    <!-- Great wine end here -->

    <!-- How we work start here -->
    <div class="wraphowewrks01">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="howewrkheads01">
                        <h2>How we work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="howewokboxes01">
                        <ul>
                            <li>
                                <img src="<?php echo base_url();?>assets_front/image/howeworks01.png" alt="great wine">
                                <p>Select your preferred membership</p>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>assets_front/image/howeworks02.png" alt="great wine">
                                <p>Complete your Taste Profile</p>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>assets_front/image/howeworks03.png" alt="great wine">
                                <p>Your Wines will be delivered to you monthly</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How we work end here -->

    <!-- Recommended wines start here -->
    <div class="wraprecomdwnes01 parallax-container">
            <div class="parallax"><img src="<?php echo base_url();?>assets_front/image/recomandbgs01.jpg" alt="great wine"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <div class="recomdimgs01">
                            <img src="<?php echo base_url();?>assets_front/image/recomandbottles01.png" alt="great wine">
                        </div>
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <div class="recomdimgs02">
                            <p>START YOUR JOURNEY BY DISCOVERING OUR 2 TYPES OF</p>
                            <h2>RECOMMENDED WINES</h2>
                            <div class="recombtns01">
                                <a href="<?php echo base_url();?>product/premium_wine">PREMIUM WINES</a>
                                <a href="<?php echo base_url();?>product/classic_wine" class="recomactbtns01">CLASSIC WINES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Recommended wines end here -->

    <!-- Surprise and premium start here -->
    <div class="wrapspecialbg01">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="spcialdisimg01">
                        <img src="<?php echo base_url();?>assets_front/image/specialimg01.jpg" alt="great wine">
                        <div class="abespcialboxes01">
                            <p>Surprise someone with a flexible and thoughtful gift, delivered right to them.</p>
                            <a href="<?php echo base_url();?>product/gifts">BROWSE GIFT COLLECTION NOW</a>                    
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="spcialdisimg01">
                        <img src="<?php echo base_url();?>assets_front/image/specialimg02.jpg" alt="great wine">
                        <div class="abespcialboxes01">
                            <p>Offering premium wines priced to reduce your wedding expenses</p>
                            <a href="<?php echo base_url();?>product/weddings">SELECT WEDDING WINES NOW</a>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Surprise and premium end here -->

    <!-- Our recommended wine start here -->
    <div class="wraprecomwnes01">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="recomdwneheds01">
                        <h2>our recommended wine</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="recomdwneslde01 owl-carousel">
                     <?php $i=1; foreach ($product as $p){?>
                        <img src="<?php echo $p->product_img ?>" alt="great wine">
                    <?php }?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="recomdsldebtn01">
                            <a href="<?php echo base_url();?>product">Browse wines</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our recommended wine end here -->

    <!-- Check out start here -->
    <div class="wrapcheckouttest01">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="homechotams01">
                        <h2>Check out what our amazing wine squad has to say:</h2>
                        <p>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span><?php echo count($product_review);?> Review(s)</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="homecarosol01 owl-carousel">
                        <?php foreach ($product_review as $r){?>
                        <div class="homechotams02"> 
                            <p>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span><?php echo count($product_review1);?> Review(s)</span>
                            </p>
                            <h2><?php echo ucwords($r->product_name);?></h2>
                            <div class="homechotboxes01">
                                <div class="homechotlefts01"><img src="<?php echo base_url();?>assets_front/image/quotes01.jpg" alt="great wine"></div>
                                <div>
                                    <p>
                                        <?php echo $r->review?>
                                    </p>
                                    <p class="bold"><?php echo $r->name?></p>
                                </div>
                            </div>
                        
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Check out end here -->

    