               
          <div class="main-panel">
            <div class="content-wrapper">
               <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>superpanel/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Visitor Enquiry</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Visitor Enquiry</span></li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>

              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Visitor Enquiry</h4>
                    <div class="row">
                      <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th><b>Slno.</b></th>
                                <th><b>Visitor Name</b></th>
                                <th><b>Visitor Email</b></th>
                                <th><b>Visitor Phone</b></th>
                                <th><b>Visitor Message</b></th>
                                <th><b>Enquiry</b></th>
                                <th><b>View</b></th>
                                <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>1</td>
                                <td>2012/08/03</td>
                                <td>Edinburgh</td>
                                <td>2012/08/03</td>
                                <td>Edinburgh</td>
                                <td>2012/08/03</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Reply</button></td>
                                <td>
                                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div> 
           

           <!-- Modal starts -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" align="center">Reply Visitor</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Reply</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

         


                 
