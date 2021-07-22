<div class="card">

    <div class="card-header">
        <h3 class="mb-0">All Product List </h3>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Add Product:-</strong>You Product will be panding Click to add button and add Product img,size,color and etc.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
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
                        <td><?php echo $row->productname ; ?></td>
                        <td><?php echo $row->productband ; ?></td>
                        <td><?php echo $row->date ; ?></td>
                        <td><?php echo $row->status ; ?></td>
                        <td>
                            <a href="#" class="btn btn-outline-warning"><i class="far fa-edit"></i></a>
                            <a href="<?php echo base_url('ve/add-var/').$row->id;?>  " class="btn btn-outline-success"><i class="fas fa-plus"></i></a>
                        </td>
                    </tr>
                    <?php  $i++; } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>