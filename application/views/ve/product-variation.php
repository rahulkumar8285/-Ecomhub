<!-- Add Size and Color  -->
<h2> Add Product Item's</h2>
<form name="provar" action='<?php echo base_url('ve/addvar');?>' method="post" onsubmit="return check();"
    enctype="multipart/form-data">
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
                    <div class="col"> <input id="productmrp" name="productmrp[]" type="text" class="form-control"
                            required>
                    </div>
                    <div class="col"> <input id="sellingprice" name="sellingprice[]" type="text" class="form-control"
                            required>
                    </div>
                    <div class="col"> <input id="qunty" name="qunty[]" type="text" class="form-control" required>
                    </div>
                    <div class="col"> <select class="form-control" id="setstatus" name="setstatus[]" required>
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
    <input type="hidden" name="pid" value="<?php  echo $pid ;?>" />
    <button class="btn btn-primary" type="submit">Add Product Variation</button>
</form>

<!-- product list  -->
<?php if($data->num_rows()>0 ){?>
<div class="card">

    <div class="card-header">
        <h3 class="mb-0">All Product List </h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>V.ID</th>
                        <th>P.ID</th>
                        <th>P.Size</th>
                        <th>P.Color</th>
                        <th>MRP</th>
                        <th>Selling</th>
                        <th>Quntity</th>
                        <th>Public Date</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                     $i =1;
                    foreach($data->result() as $row){?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->id ; ?></td>
                        <td><?php echo $row->pid ; ?></td>
                        <td><?php echo $row->selectsize ; ?></td>
                        <td><?php echo $row->color ; ?></td>
                        <td><?php echo $row->productmrp ; ?></td>
                        <td><?php echo $row->sellingprice ; ?></td>
                        <td><?php echo $row->qunty ; ?></td>
                        <td><?php echo $row->date ; ?></td>
                        <td><?php  echo ($row->setstatus)? ' <span class="badge badge-success">ON</span>' : '<span class="badge badge-danger">OFF</span>';?>
                        </td>
                        <td>
                            <a href="<?php echo base_url('ve/edit-var/').$row->id;?>" class="btn btn-outline-warning"><i
                                    class="far fa-edit"></i></a>
                            <button id="deletebtn" data-toggle="modal" data-target="#exampleModalCenter"
                                data-del="<?php echo $row->id; ?>" class="btn btn-outline-danger"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <?php  $i++; } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Deleted Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Delete This Item
                <form action="<?php echo base_url('deletedata');?>" method="POST">
                    <input type="hidden" name="data-id" id="data-delid" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            <form>
        </div>
    </div>
</div>
<?php }?>