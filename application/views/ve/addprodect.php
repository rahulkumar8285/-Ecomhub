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
     <button class="btn btn-primary" type="submit">Submit form</button>
     <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
 </form>