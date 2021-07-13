 <form name="prodectadd" action="<?php echo base_url('ve/AddProdect');?>" method="POST" onsubmit="return VeAddProduct()">
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

            </div>
        </div>
    </div> 
<!-- form -->
<!-- Add Size and Color  -->
<div class="card">
    <div class=" clearfix card-header">
        <h5 class="  float-left ">Add Size With Color And Price</h5>
        <div class="float-right">
            <input type="text" name="size" id='size' class="text-uppercase" />
            <button type="button" class="btn btn-success " onclick='createsize();'>Add New Size</button>
        </div>
    </div>

        <div class="card-body" id='sizecolor'>
            <!-- div one -->

            <!-- div one -->
        </div>
        <input type='submit' name='data-send' value='submit' />
   
</div>
</form>