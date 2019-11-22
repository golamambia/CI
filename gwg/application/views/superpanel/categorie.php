               
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          
          <?php if($this->session->flashdata('success')!=''){?>
              <center>
                <div class="alert alert-success" > <strong><?php echo @$this->session->flashdata('success');?></strong> </div>
              </center>
              <?php }?>
              <?php if($this->session->flashdata('error')!=''){?>
              <center>
                <div class="alert alert-danger" > <strong><?php echo @$this->session->flashdata('error');?></strong> </div>
              </center>
          <?php }?>

          <div class="template-demo">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                <li class="breadcrumb-item"><a href="">Manage Product</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Categories</span></li>
              </ol>
            </nav>
          </div>
            <a href="<?php echo base_url();?>superpanel/categorie/add_category"><button type="button" class="btn btn-success btn-lg" id="add_new">Add New</button>
            </a>
        </div>
      </div>
                
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Categories</h4>
            <div class="table-responsive">
              <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th><b>Sl.</b></th>
                        <th><b>Categorie Name</b></th>
                        <th><b>Parent_category</b></th>
                        <th><b>Categorie Slug</b></th>
                        <th><b>Status</b></th>
                        <th><b>Action</b></th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php $i=1; foreach ($category as $c){?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $c->category_name;?></td>
                            <td>
                                <?php if($c->category_parent_Id==0){?>
                                <label class="badge badge-success">Main Category</label>
                                <?php }else if($c->category_parent_Id!=0 && $c->category_Id==$c->category_parent_Id){?>
                                  <?php echo $c->category_name?>
                                <?php }?>
                            </td>
                            <td><?php echo $c->category_slug;?></td>
                            <td><?php if($c->status==1){?>
                                <label class="badge badge-success">Active</label>
                                <?php }else if($c->status==0){?>
                                <label class="badge badge-danger">Deactive</label>
                                <?php }?>
                            </td>
                            <td>
                              <a href="<?php echo base_url();?>superpanel/categorie/edit_category/<?php echo $c->category_Id?>"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                              </a>
                              <a href="<?php echo base_url();?>superpanel/categorie/delete_category/<?php echo $c->category_Id?>" onclick="return confirm('Are you sure about this delete?');"><button type="button" class="btn btn-danger btn-sm">Delete</button>
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
           
          

         


                 
