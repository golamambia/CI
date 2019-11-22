      
      <div class="main-panel">
        <div class="content-wrapper">
              <h1 style="color:blue" align="center"><b>Add Specification</b></h1></br></br>
              <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url()?>superpanel/specification/insert_specification">
            <fieldset>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label"><b>Select Category:</b></label>
                           <div class="col-sm-8">
                               <select  class="js-example-basic-multiple" multiple="multiple" style="width:100%" id="Category" name="category_Id[]">
                                  <option value="Select">Select Category</option>
                                  <?php foreach($category as $c1){?>
                                  <option value="<?=$c1->category_Id?>"><?php echo $c1->category_name;?>  
                                  </option>
                                  <?php }?>
                               </select>
                           </div>
                        </div>    
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Specification Name</b></label>
                            <div class="col-sm-8">
                                <input name="specification_name[]" id="sport_name" class="form-control" type="text" placeholder="Specification name" autocomplete="off" required>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0);" onclick="addMore()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Add More </a>
                                <input type="hidden" id="SlRow" value="1">
                            </div>
                        </div>
                    </div>
                </div>

                <span id="AppendData"></span>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-9 product_add">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            </form>
        </div>
     </div>       

<script>
    function addMore(){
        var SlRow = $('#SlRow').val();
        var NewSl = parseInt(SlRow)+1;
        $('#SlRow').val(NewSl);
        // var Appenddata = '<div class="form-group row" id="ColumnRow'+NewSl+'"><label class="col-sm-3 col-form-label"></label><div class="col-sm-7"><input id="sp_name" class="form-control" name="sp_name[]" type="text" autocomplete="off"></div><div class="col-sm-2"><a href="javascript:void(0)" onclick="DeleteRow('+NewSl+')" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete Row"><i class="fa fa-trash"></i></a></div></div>';


        var Appenddata = '<div class="form-group row" id="ColumnRow'+NewSl+'">'+
                            '<label class="col-sm-2 col-form-label">Specification Name</label>'+
                            '<div class="col-sm-8">'+
                                '<input name="specification_name[]" id="sport_name'+NewSl+'" class="form-control" type="text" placeholder="Specification name" autocomplete="off" required>'+
                            '</div>'+
                            '<div class="col-sm-2">'+
                                '<a href="javascript:void(0)" onclick="DeleteRow('+NewSl+')" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete Row"><i class="fa fa-trash"></i></a>'+
                            '</div>'+
                        '</div>';


        $('#AppendData').append(Appenddata);
        // jQuery("#Validation").validationEngine();
    }
    function DeleteRow(id){
        $('#ColumnRow'+id).remove();
    }
</script>