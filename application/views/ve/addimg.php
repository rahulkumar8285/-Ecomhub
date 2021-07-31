<form action="<?php echo base_url('proaddimg');?>" method="POST" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <h5>Add Color Multi Images</h5>

            <div class="container">
                <div class="row mt-3">
                    <div class="col-4">Select Color</div>
                    <div class="col-3">Main Images</div>
                    <div class="col-3">Multi Images</div>

                </div>
                <div class="row mt-3">
                    <div class="col"><select class="form-control" id="color" name="color" required>
                            <option value='0'>color</option>
                            <?php  foreach($color->result() as  $row){?>
                            <option value='<?php echo $row->color; ?>'><?php echo $row->color ;?> </option>
                            <?php } ?>
                        </select></div>
                    <div class="col-3 mr-2">
                        <input type="file" name="mainimg" id="mainimg" />
                    </div>
                    <div class="col-5">
                        <input type="file" name="multimge[]" id="multimge" multiple />
                    </div>
                    <input type="hidden" name="pid" value="<?php  echo $pid ;?>" />
                </div>
                <button class="btn btn-primary mt-3" type="submit" name="addimg">Add Images</button>
            </div>
        </div>
    </div>
</form>

<!--show data -->
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
                        <th>Image Id</th>
                        <th>P.ID</th>
                        <th>P.Color</th>
                        <th>Main Image</th>
                        <th>Multi Images</th>
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
                        <td><?php echo $row->color ; ?></td>
                        <td>
                            <div class="m-r-10"><img src="<?php  echo base_url('upload/product/').$row->mainimg ;?>"
                                    alt="Product Images" class="rounded" width="45"></div>
                        </td>
                        <td>
                            <div class="m-r-10">
                                <?php $arr = explode(',',$row->multiimg);
                            for($i=0;$i<sizeof($arr);$i++){?>
                                <img src="<?php  echo base_url('upload/product/').$arr[$i];?>" alt="Product Images"
                                    class="rounded" width="45" height="50">
                                <?php if($i==2){ echo sizeof($arr); break;}   }?>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo base_url('ve/edit-img/').$row->id;?>" class="btn btn-outline-warning"><i
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
                <form action="<?php echo base_url('DeleteImage');?>" method="POST">
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