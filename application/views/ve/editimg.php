<form action="<?php echo base_url('');?>">
    <div class="card">
        <div class="card-body">
            <h5>Eddit Product Images</h5>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col"><select class="form-control" id="color" name="color" required>
                                <option value='0'>color</option>
                                <?php  foreach($color->result() as  $row){?>
                                <option value='<?php echo $row->color; ?>'><?php echo $row->color ;?> </option>
                                <?php } ?>
                            </select></div>
                        <div class="col">
                            <div class="">
                            <button>1</button>
                            <button>2</button>
                            <button>3</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>