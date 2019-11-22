
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
        <img src="<?php echo base_url();?>assets_front/image/innerbgs01.jpg" alt="great wine">
        <div class="innerabvs01">
            <h2><?php
            $mth=$this->router->fetch_method();
            if($mth!='index'){
                echo strtoupper($mth);
            }else{
                echo "WINES";
            }
            
            ?></h2>
        </div>
    </div>
    <!-- Inner banner end here -->
    <div class="clearfix"></div>
    <!-- Inner content start here -->
    <div class="container">        

<form id="filter_form">
    <div id="filter_product">
        <div class="row">    
            <div class="col-sm-3">
                <div class="innprodfilters01">
                    <h2>product filter</h2>
                    <p>Wine Type</p>
                    <select name="wine_type" class="form-control">
                        <option value="">Select Your Wine Type</option>
                        <?php $i=1; foreach ($categorie as $c){?>
                        <option value="<?php echo str_replace('-',' ', $c->category_Id)?>"<?php if($this->input->get('wine_type') == str_replace(' ','-',$c->category_Id)){ echo 'selected';}?>><?php echo $c->category_name?></option>
                        <?php $i++; }?>
                    </select>

                    <p>WINE Source</p>
                    <select name="country" class="form-control">
                        <option value="">Select Your Wine Source</option>
                        <?php $i=1; foreach ($country as $c){?>
                        <option value="<?php echo str_replace('-',' ', $c->country)?>"<?php if($this->input->get('country') == str_replace(' ','-',$c->country)){ echo 'selected';}?>><?php echo $c->country?></option>
                        <?php $i++; }?>
                    </select>

                    <p>WINE Varietals</p>
                    <select name="varietals" class="form-control">
                        <option value="">Select Your Wine Varietals</option>
                        <?php $i=1; foreach ($varietals as $v){?>
                        <option value="<?php echo str_replace('-',' ',$v->varietals)?>"<?php if($this->input->get('varietals') == str_replace(' ','-',$v->varietals)){ echo 'selected';}?>><?php echo $v->varietals?></option>
                        <?php $i++; }?>
                    </select>

                    <p>WINE COLOUR</p>
                    <select name="color" class="form-control">
                        <option value="">Select Your Color</option>
                        <?php $i=1; foreach ($color as $c){?>
                        <option value="<?php echo str_replace('-',' ',$c->color)?>"<?php if($this->input->get('color') == str_replace('-',' ',$c->color)){ echo 'selected';}?>><?php echo $c->color?></option>
                        <?php $i++; }?>
                    </select>              

                </div>
            </div>
            <div class="col-sm-9">
                <div class="row justify-content-between">
                    <div class="col-sm-4">
                        <div class="innerseainput01">
                            <input type="text" name="search" id="product_name" value="<?php echo $this->input->get('search')?>"<?php if($this->input->get('search') == 'product_name');?>>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="innerseainput01">
                            <select class="form-control" name="sort_by" id="sort_by">
                                <option value="">SORT WINES BY</option>
                                <option value="featured"<?php if($this->input->get('sort_by') == 'featured'){ echo 'selected';}?>>Featured</option>
                                <option value="best-selling" <?php if($this->input->get('sort_by') == 'best-selling'){ echo 'selected';}?>>Best Selling</option>
                                <option value="price-low-to-high" <?php if($this->input->get('sort_by') == 'price-low-to-high'){ echo 'selected';}?>>Price-Low To High</option>
                                <option value="price-high-to-low" <?php if($this->input->get('sort_by') == 'price-high-to-low'){ echo 'selected';}?>>Price-High To Low</option>
                                <option value="latest-to-first" <?php if($this->input->get('sort_by') == 'latest-to-first'){ echo 'selected';}?>>Latest To First</option>
                                <option value="first-to-last" <?php if($this->input->get('sort_by') == 'first-to-last'){ echo 'selected';}?>>First To Latest</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">

                <?php $i=1; foreach ($results as $p){?>
                    <div class="col-sm-4">
                        <form action="#" method="POST">
                            <div class="wrapinnerbotboxes01">
                                  <div class="inerbotboxes01">
                                    <a href="javascript:void(0);" onclick="add_wishlist(<?php echo $i ?>)"><span><i class="fas fa-heart"></i></span></a>
                                    
                                    <a href="<?=base_url();?>product/details/<?=$p->product_slug;?>">
                                        <img src="<?php echo $p->product_img?>" alt="great wine">
                                    </a>
                                    <h2>
                                        <a href="<?=base_url();?>product/details/<?=$p->product_slug;?>" style="text-decoration:none;"><?php echo $p->product_name?>
                                        </a>
                                    </h2>
                                        <?php echo word_limiter($p->product_description,10);?>
                                    <h3><?php echo ucwords($p->color)?></h3>

                                  </div>
                                  <div class="inerbotboxes02">
                                    <p>$<?php echo $p->price?></p>
                                     <a href="javascript:void(0);" onclick="add_cart(<?php echo $i ?>)">Cart<i class="fas fa-shopping-bag"></i>
                                     </a>
                                     <input type="hidden" name="product_id" id="product_id<?php echo $i ?>" value="<?php echo $p->product_id?>">
                                     <input type="hidden" name="quantity" id="quantity<?php echo $i ?>" value="1">
                                   </div>
                            </div>
                        </form>
                    </div>
                    <?php $i++; }?>
                    
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="inerpags01">
                            <?php echo $links;?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    </div>
    <!-- Inner content end here -->

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
                                <a href="<?php echo base_url();?>product/classic_wine"class="recomactbtns01">CLASSIC WINES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Recommended wines end here -->

    