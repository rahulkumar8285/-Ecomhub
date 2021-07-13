<?php print_r($data);?>
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
                        <td><?php echo $row->productband ; ?></td>
                        <td><?php echo $row->productband ; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>