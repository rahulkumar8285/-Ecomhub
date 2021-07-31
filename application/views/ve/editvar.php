<?php 
 $data = $data->row();
//  print_r($size);
//  foreach($size->result() as  $row){
//      echo $row->size;
//  }
// die();
 ?>
<div class="card">
    <h5 class="card-header">Eddit You Product </h5>
    <div class="card-body">
        <form  name="editvar"  action="<?php echo base_url('/ve/updatevar') ?>"  method="post"   >
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="inputText3" class="col-form-label">Select Id Num </label>
                    <input id="inputText3" type="text" class="form-control" value="<?php  echo $data->id; ?>" disabled>
                </div>
                <div class="form-group col-5">
                    <label for="inputText3" class="col-form-label">Select Color</label>
                    <select class="form-control" id="color" name="color">
                        <?php  foreach($color->result() as  $row){?>
                        <option value='<?php echo $row->color; ?>'
                            <?php echo ($row->color == $data->color )?'selected':''  ?>><?php echo $row->color ;?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-5">
                    <label for="inputText3" class="col-form-label">Select Size</label>
                    <select class="form-control" id="size" name="selectsize">
                        <?php  foreach($size->result() as  $row){?>
                        <option value='<?php echo $row->size; ?>'
                            <?php  echo ( $row->size == $data->selectsize)?'selected' : ''; ?>><?php echo $row->size ;?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="inputText3" class="col-form-label">Enetr MRP</label>
                    <input id="productmrp" name="productmrp" value="<?php echo $data->productmrp  ;  ?>" type="text"
                        class="form-control" required>
                </div>
                <div class="form-group col-3">
                    <label for="inputText3" class="col-form-label">Enter Selling Price </label>
                    <input id="sellingprice" name="sellingprice" value="<?php echo $data->sellingprice  ;  ?>"
                        type="text" class="form-control" required>
                </div>
                <div class="form-group col-3">
                    <label for="inputText3" class="col-form-label">Enter Qunity </label>
                    <input id="qunty" name="qunty" type="text" value="<?php echo $data->qunty  ;  ?>"
                        class="form-control" required>
                </div>
                <div class="form-group col-3">
                    <label for="inputText3" class="col-form-label">Select Status </label>
                    <select class="form-control" id="setstatus" name="setstatus" required>
                        <option value='1' <?php echo ($data->setstatus == 1)? 'selected':''   ?>>Public </option>
                        <option value='0' <?php echo ($data->setstatus == 0)? 'selected':''   ?>>Draf </option>
                    </select>
                </div>
                <input type="hidden" name="vid" value="<?php  echo $data->id ;?>" />
                <input type="hidden" name="pid"  value="<?php  echo $data->pid ;?>" />

                <button class="btn btn-primary" type="submit">Update Data</button>
            </div>
        </form>
    </div>
</div>