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
    <!-- Review popup start here -->
          <!-- The Modal -->
      <div class="modal fade" id="reviewmodals01">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modelcontents01">
            <div class="modal-header modaheader0s1">
                <button type="button" class="close clrwhites01" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
          
            <!-- Modal Header -->
            <div id="idallsignboxes01" class="allsignboxes01">      
                <h2>Review</h2>
                    <form action="<?php echo base_url();?>product/rating" method="POST" id="login-form1">
                        <input type="text" name="name" id="mini-login" placeholder="Name">
                        <input type="hidden" name="product_id" id="mini-login" value="<?php echo $pdetails[0]->product_id;?>" readonly>
                        <input type="text" class="form-control" name="product_name" id="mini-login" value="<?php echo $pdetails[0]->product_name;?>" readonly>
                        <label><strong><b>Please Select Rating</b></strong></label>
                        <div class="selstarboxes01">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value=".5" /><label class="half" for="starhalf" title="0.5 stars"></label>
                            </fieldset>
                        </div>
                        <textarea class="form-control" id="review" rows="5" name="review" placeholder="Customer Review"></textarea>
                        </br>
                        <div class="allsignlink01">
                            <button type="submit" class="button">Submit</button>
                        </div>  
                    </form>
            </div>    
          </div>
        </div>
      </div>
    <!-- Review popup end here --> 
    <!-- Inner banner start here -->
    <div class="innerbanners01">
        <img src="<?php echo base_url();?>assets_front/image/innerbgs01.jpg" alt="great wine">
        <div class="innerabvs01">
            <h2>Product details</h2>
        </div>
    </div>
    <!-- Inner banner end here -->
    <div class="clearfix"></div>
    <!-- Inner content start here -->
            
    <div class="wrapregis01">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="prodetaibanners01 product_big_image cloudzooms01">
                        <ul class="bxslider">
                            <li><img src="<?php echo $pdetails[0]->product_img;?>" class="cloudzoom" id="zoom1" data-cloudzoom="zoomPosition:'inside',autoInside: true"  alt="Cloud Zoom small image" style="user-select: none;" height="25%" width="100%" alt="great wine"/></li>
                            <li><img src="<?php echo $product_multi_image[0]->images;?>" class="cloudzoom" id="zoom1" data-cloudzoom="zoomPosition:'inside',autoInside: true"  alt="Cloud Zoom small image" style="user-select: none;" height="25%" width="100%" alt="great wine"/></li>
                            <li><img src="<?php echo $product_multi_image[1]->images;?>" class="cloudzoom" id="zoom1" data-cloudzoom="zoomPosition:'inside',autoInside: true"  alt="Cloud Zoom small image" style="user-select: none;" height="25%" width="100%" alt="great wine"/></li>
                            <li><?php echo $pdetails[0]->video;?></li>
                        </ul>
                    </div>

                    <div class="prodethumps01">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="<?php echo $pdetails[0]->product_img;?>"></a>
                            <a data-slide-index="1" href=""><img src="<?php echo $product_multi_image[0]->images;?>"></a>
                            <a data-slide-index="2" href=""><img src="<?php echo $product_multi_image[1]->images;?>"></a>
                            <a data-slide-index="3" href=""><img src="https://dummyimage.com/600x900/3e6161/eb0eb4.jpg&text=YouTube+Video"></a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-8">
                    <div class="proinnerdes01">
                        <h2><?=@ucwords(strtolower($pdetails[0]->product_name));?></h2>
                        <p><b>Item Code :</b> <span><?php echo $pdetails[0]->product_code;?></span></p>
                        <p><b>Quantity :</b> <span><?=@$pdetails[0]->quantity;?></span></p>
                        <hr>

                        <p><b>Type:</b> <span><?=@ucwords(strtolower($pdetails[0]->product_type));?></span></p>
                        <p><b>Varietals:</b> <span><?=@ucwords(strtolower($pdetails[0]->varietals));?></span></p>
                        <p><b>Vintage:</b> <span><?=@ucwords(strtolower($pdetails[0]->vintage));?></span></p>
                        <p><b>Color:</b> <span><?=@ucwords(strtolower($pdetails[0]->color));?></span></p>
                        <p><b>Country Source Alcohol:</b> <span><?=@ucwords(strtolower($pdetails[0]->country));?></span></p>
                        <p><b>Alcohol%:</b> <span><?=@ucwords(strtolower($pdetails[0]->alcohol));?></span></p>
                        <p><b>Chesse Pairing:</b> <span><?=@ucwords(strtolower($pdetails[0]->cheese_paining));?></span></p>
                        <p><b>Smell:</b> <span><?=@ucwords(strtolower($pdetails[0]->nose));?></span></p>
                        <p><b>Palate:</b> <span><?=@ucwords(strtolower($pdetails[0]->product_description));?></span></p>
                        <hr>

                        <p><del>$<?=@$pdetails[0]->price;?></del> <span class="orangetexts01">$<?=@$pdetails[0]->sales_price;?></span></p>

                        <div class="proinbtns01">
                            <form action="#" method="POST">
                            <?php $c=1;?>
                            <input type="text" name="product_id" value="<?=$pdetails[0]->product_id;?>" id="product_id<?=$c?>" style="display:none;" />
                            <p><b>Qty</b></p>
                            <input type="number" value="1" minlength="1" name="quantity" id="quantity<?=$c?>">
                            <a href="javascript:void(0);"><button type="button" onclick="add_cart(<?php echo $c?>)">ADD TO CART</button></a>
                            <input type="hidden" name="product_id" id="product_id<?php echo $c ?>" value="<?php echo $c ?>">
                            </form>
                        </div>

                        <a href="https://www.facebook.com/sharer.php?u=gwg.ecore.com.sg/gwg/post/home" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://in.pinterest.com/sharer.php?u=gwg.ecore.com.sg/gwg/post/home" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="prodestab01 nav">
                        <a class="active" data-toggle="tab" href="#descricontent01">Description</a>
                        <a data-toggle="tab" href="#reviewcontents01">Reviews(<?php echo count($product_review);?>)</a>
                        <div class="rewritecontents01">
                            <?php if($product_review){?>

                            <?php echo $avg_rating?><i class="fas fa-star"></i>

                            <?php }else{?>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <?php }?>

                            <p><?php echo count($product_review);?>Reviews</p>
                            <a href="javascript:void(0)" class="actcolors01" data-toggle="modal" data-target="#reviewmodals01"><i class="far fa-edit"></i>Write a review</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrapprocontentabs01 tab-content">
                            <div id="descricontent01" class="procontentabs01 tab-pane fade in active show">
                                <h2><?=@ucwords(strtolower($pdetails[0]->product_name));?></h2>
                                <p><?=@ucwords(strtolower($pdetails[0]->product_description));?>
                                </p>
                                
                            </div>
                            <div id="reviewcontents01" class="procontentabs01 tab-pane fade">
                                <?php foreach ($product_review as $r){?>      
                                <h2><?php echo $r->name;?></h2>
                                <?php if ($product_review){?>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <?php }?>    
                                <p><?php echo  $r->review;?></p>
                                <?php } ?>    
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="gratwnheads01">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <?php if ($product_need){?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="wraprelaprodinners01 owl-carousel">
                        <?php $i=1; foreach($product_need as $t){?>
                            <div class="relaprodinners01">
                                <img src="<?=$t->product_img;?>" alt="GWG" height="auto" width="auto">
                                <a href="<?php echo base_url();?>product/details/<?=$t->product_slug;?>"style="text-decoration:none;"><p><?=$t->product_name;?></p>
                                </a>
                                <p><span>$<?=$t->price;?></span></p>
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>  
                            </div>
                        <?php }?>     
                    </div>
                </div>
            </div>
        <?php }else{?>
    <p class="center"><strong><b>No Products Found</b></strong><p>
<?php }?>
        </div>
    </div>
    <!-- Inner content end here -->

    