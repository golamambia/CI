 
         
  </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <!-- container-scroller -->

 <!-- plugins:js -->
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url();?>assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendors/tinymce/themes/modern/theme.js"></script>
  <script src="<?php echo base_url();?>assets/vendors/summernote/dist/summernote-bs4.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>assets/js/misc.js"></script>
  <script src="<?php echo base_url();?>assets/js/settings.js"></script>
  <script src="<?php echo base_url();?>assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url();?>assets/js/data-table.js"></script>
  <script src="<?php echo base_url();?>assets/js/modal-demo.js"></script>
  <script src="<?php echo base_url();?>assets/js/editorDemo.js"></script>
  <script src="<?php echo base_url();?>assets/js/dropify.js"></script>
  <script src="<?php echo base_url();?>assets/js/form-repeater.js"></script>
  <script src="<?php echo base_url();?>assets/js/formpickers.js"></script>
  <script src="<?php echo base_url();?>assets/js/iCheck.js"></script>
  <script src="<?php echo base_url();?>assets/js/select2.js"></script>
  <script src="<?php echo base_url();?>assets/js/form-validation.js"></script>
  <script src="<?php echo base_url();?>assets/js/bt-maxLength.js"></script>
  <script src="<?php echo base_url();?>assets/js/init-tinymce.js"></script>
  <script src="<?php echo base_url();?>assets/js/file-upload.js"></script>

  
  <script>
      $(document).on('keyup','#category_slug', function () {
      if (this.value.match(/[^a-zA-Z0-9]/g)) {
      this.value = this.value.replace(/[^a-zA-Z0-9]/g, '-');
      }
      });
  </script>

  

   

  <!-- End custom js for this page-->
   
  </body>
  </html>