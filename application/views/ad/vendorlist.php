<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Vendor List</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>profile</th>

                        <th>Document</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data->result() as $row) {?>
                    <tr>
                        <td>
                            <div class="avatar me-3">
                                <img src="assets/images/faces/1.jpg" alt="" srcset="">
                            </div>
                        </td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->mobile; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td>
                            <span class="badge bg-<?php echo ($row->status==1)? 'success': 'danger';?>">
                                <?php echo ($row->status==1)? 'Active': 'Deactive';  ?>
                            </span>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</section>