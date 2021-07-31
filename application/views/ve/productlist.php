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
                        <th>P.ID</th>
                        <th>P.Name</th>
                        <th>P.Band</th>
                        <th>Public Date</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $i =1;
                    foreach($data->result() as $row){?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->id ; ?></td>
                        <td><?php echo $row->productname ; ?></td>
                        <td><?php echo $row->productband ; ?></td>
                        <td><?php echo $row->date ; ?></td>
                        <td><?php  echo ($row->status)? ' <span class="badge badge-success">ON</span>' : '<span class="badge badge-danger">OFF</span>';?>
                        </td>
                        <td>
                            <a href="<?php echo base_url('ve/pro-edit/').$row->id;?>  " class="btn btn-outline-warning"
                                data-toggle="tooltip" title="Product Edit"> <i class="fas fa-edit"></i></a>
                            <button id="deletebtn" data-toggle="modal" data-target="#exampleModalCenter"
                                data-del="<?php echo $row->id; ?>" class="btn btn-outline-danger"><i
                                    class="fas fa-trash-alt"></i></button>

                            <a href="<?php echo base_url('ve/add-var/').$row->id;?>  " class="btn btn-outline-info"><i
                                    data-toggle="tooltip" title="Add Multi Variaction" class="fas fa-plus"></i></a>
                            <a href="<?php echo base_url('ve/pr-img/').$row->id;?>  " class="btn btn-outline-success"><i
                                    data-toggle="tooltip" title="Add Product Images" class="fas fa-plus"></i></a>


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
                <form action="<?php echo base_url('deletepro');?>" method="POST">
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