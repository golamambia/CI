               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Product Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Specification</span></li>
                      </ol>
                    </nav>
                  </div>
                  <a href="<?php echo base_url();?>superpanel/specification/add_specification"><button type="button" class="btn btn-success btn-lg" id="add_new">Add New</button></a>
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Specification</h4>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Sl.</b></th>
                                <th><b>Specification Name</b></th>
                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach ($product_specification as $ps){?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $ps->specification_name;?></td>
                                <td>
                                  <a href="<?php echo base_url();?>superpanel/specification/edit_specification/<?php echo $ps->specification_id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                                  </a>
                                  <a href="<?php echo base_url();?>superpanel/specification/delete_specification/<?php echo $ps->specification_id?>" onclick="return confirm('Are you sure about this delete?');"><button type="button" class="btn btn-danger btn-sm">Delete</button>
                                  </a>
                                  
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

               