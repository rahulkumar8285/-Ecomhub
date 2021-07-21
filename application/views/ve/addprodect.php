 <?php print_r($color);?>
 <?php print_r($size);?>
 <form name="prodectadd" action="<?php echo base_url('ve/AddProdect');?>" method="POST"
     onsubmit="return VeAddProduct()">
     <div class="card">
         <h5 class="card-header">Add New Prodect</h5>
         <div class="card-body">
             <div class="alert alert-danger" style='display:none;' id='error'>
                 All Filed Is Requrid !
             </div>
             <div class="row">
                 <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-2">
                     <label for="productname" class="col-form-label">Product Name</label>
                     <input id="productname" name="productname" type="text" class="form-control">
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                     <label for="brandname" class="col-form-label">Brand Name</label>
                     <input id="brandname" name="brandname" type="text" class="form-control">
                 </div>
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                     <label for="shortdis">Short textarea</label>
                     <textarea class="form-control" id="shortdis" name="shortdis" rows="3"></textarea>
                 </div>
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                     <label for="longdic">Long textarea</label>
                     <textarea class="form-control" id="longdic" name='longdic' class="longdic" rows="5"></textarea>
                 </div>
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                     <label for="prodectspc">Specification</label>
                     <textarea class="form-control" id="prodectspc" name="prodectspc" rows="5"></textarea>
                 </div>
                 <!-- Product cat list -->
                 <div class="col-6">
                     <div class="form-group">
                         <label for="input-select"> Select catagrey</label>
                         <select class="form-control" id="selectcat" name="selectcat">
                             <?php  foreach($data->result() as  $row){?>
                             <option value='<?php echo $row->id; ?>'><?php echo $row->name ;?> </option>
                             <?php } ?>
                         </select>
                     </div>
                 </div>
                 <!-- status  -->
                 <div class="col-6">
                     <div class="form-group">
                         <label for="input-select">Status</label>
                         <select class="form-control" id="publicstats" name="publicstats">
                             <option value='0'>Draf</option>
                             <option value='1'>Public</option>

                         </select>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- form -->

     <!-- Add Size and Color  -->
     <div class="card">
         <div class="card-body">
             <div class=" card-header clearfix">
                 <h5 class=" float-left">Add New Set</h5>
                 <button type="button" id="addfiled" class="btn btn-success float-right">+</button>
             </div>
             <!-- Add dynamic set addfiled -->
             <div class="container">
                 <div class="row mt-2">
                     <div class="col">Select Size</div>
                     <div class="col">Select Color</div>
                     <div class="col">Enter Mrp</div>
                     <div class="col">Selling Price</div>
                     <div class="col">Qunty</div>
                     <div class="col">status</div>
                     <div class="col">Delete</div>
                 </div>
             </div>
             <div class="container">
                 <div class="row mt-3" id="inputFormRow">
                     <div class="col"><select class="form-control" id="size" name="selectsize[]">
                             <option value='0'>size</option>
                             <?php  foreach($size->result() as  $row){?>
                             <option value='<?php echo $row->size; ?>'><?php echo $row->size ;?> </option>
                             <?php } ?>
                         </select></div>
                     <div class="col"> <select class="form-control" id="color" name="color[]">
                             <option value='0'>color</option>
                             <?php  foreach($color->result() as  $row){?>
                             <option value='<?php echo $row->id; ?>'><?php echo $row->color ;?> </option>
                             <?php } ?>
                         </select></div>
                     <div class="col"> <input id="productmrp" name="productmrp[]" type="text" class="form-control">
                     </div>
                     <div class="col"> <input id="sellingprice" name="sellingprice[]" type="text" class="form-control">
                     </div>
                     <div class="col"> <input id="qunty" name="qunty[]" type="text" class="form-control">
                     </div>
                     <div class="col"> <select class="form-control" id="setstatus" name="setstatus[]">
                             <option value='1'>Public </option>
                             <option value='0'>Draf </option>
                         </select></div>
                     <div class="col">
                     </div>
                 </div>
             </div>
             <div class="container" id='setbox'>
                 <!-- dynamic set box -->
             </div>
         </div>
     </div>
     <!---add image--->
     <div class="card">
         <div class="card-body">
             <div class=" card-header clearfix">
                 <h5 class=" float-left">Add Color Multi Images</h5>
                 <button type="button" id="addimg" class="btn btn-success float-right">+</button>
             </div>
             <div class="container">
                 <div class="row mt-3">
                     <div class="col">Select Color</div>
                     <div class="col-8">Multi Images</div>
                 </div>
                 <div class="row">
                     <div class="col"><select class="form-control" id="imgcolor" name="imgcolor[]">
                             <option value='0'>color</option>
                             <?php  foreach($color->result() as  $row){?>
                             <option value='<?php echo $row->id; ?>'><?php echo $row->color ;?> </option>
                             <?php } ?>
                         </select></div>
                     <div class="col-3 mr-2">
                         <input type="file" class="custom-file-input" id="mainimg" name="mainimg[]" >
                         <label class="custom-file-label" for="customFile">Profile Image</label>
                     </div>
                     <div class="col-5">
                         <input type="file" class="custom-file-input" id="multimge" name="multimge[]" multiple>
                         <label class="custom-file-label" for="customFile">Product Multi Images</label>
                     </div>
                 </div>
                 <div id='imgbox'>
                     <!-- Dynamic box -->
                 </div>
             </div>
         </div>
     </div>


     <button class="btn btn-primary" type="submit">Submit form</button>
     <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
 </form>