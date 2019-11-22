               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Slider Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Slider</span></li>
                      </ol>
                    </nav>
                  </div>
                  <a href="<?php echo base_url();?>superpanel/slider/add_slider"><button type="button" class="btn btn-success btn-lg" id="add_new">Add New</button></a>
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Slider</h4>
                    <div class="row">
                      <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Slno.</b></th>
                                <th><b>Slider Heading</b></th>
                                <th><b>Slider Image</b></th>
                                <th><b>Status</b></th>
                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($slider as $s){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $s->slider_heading;?></td>
                                <td><img src="<?php echo $s->slider_img;?>"alt="<?php echo $s->slider_img;?>" class="img-lg rounded" style="width:160px;height:100px;"></td>
                                <td>
                                    <?php if($s->status==1){?>
                                      <label class="badge badge-success">Active</label>
                                      <?php }else if($s->status==0){?>
                                      <label class="badge badge-danger">Deactive</label>
                                    <?php }?>
                                </td>
                                <td>
                                  <a href="<?php echo base_url();?>superpanel/slider/edit_slider/<?php echo $s->id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                                  <a href="<?php echo base_url();?>superpanel/slider/delete_slider/<?php echo $s->id?>" onclick="return confirm('Are you sure about this delete?');"><button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <?php $i++; }?>
                          </tbody>
                        </table>
                      </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div> 


         


                 
