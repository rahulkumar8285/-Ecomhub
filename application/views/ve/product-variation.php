<!-- Add Size and Color  -->
<h2> Add Product Item's</h2>
<form name="provar" action='<?php echo base_url('ve/addvar');?>' method="post" onsubmit="return check();" enctype="multipart/form-data" >
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
                            <option value='<?php echo $row->color; ?>'><?php echo $row->color ;?> </option>
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
                        <input type="file" class="custom-file-input" id="mainimg" name="mainimg[]">
                        <label class="custom-file-label" for="customFile">Profile Image</label>
                    </div>
                    <div class="col-5">
                        <input type="file" class="custom-file-input" id="multimge" name="multimge[0][]" multiple>
                        <label class="custom-file-label" for="customFile">Product Multi Images</label>
                    </div>
                </div>
                <div id='imgbox'>
                    <!-- Dynamic box -->
                </div>
            </div>
        </div>
    </div>
    <input type="hidden"  name="pid" value="<?php  echo $pid ;?>" />
    <button class="btn btn-primary" type="submit">Add Product Variation</button>
</form>