<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Vendor List</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>

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
                            <?php echo $row->name; ?>
                        </td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->mobile; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td>
                            <?php if($row->status){?>
                            <span class="badge bg-success getId" data-id='<?php echo $row->id; ?>'
                                status-id='<?php echo $row->status; ?>' data-bs-toggle="modal"
                                data-bs-target="#deactiveModalCenter">Active</span>
                            <?php }else{?>
                            <span class="badge bg-danger getId" data-id='<?php echo $row->id; ?>'
                                status-id='<?php echo $row->status; ?>' data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Inactive</span>
                            <?php }?>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Data Active Model Centered modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Vendor Data Active
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Croissant jelly-o halvah chocolate sesame snaps. Brownie
                    caramels candy
                    canes chocolate cake
                    marshmallow icing lollipop I love. Gummies macaroon donut
                    caramels
                    biscuit topping danish.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" id="active" class="btn btn-success ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Data DeActive Model Centered modal Modal -->
<div class="modal fade" id="deactiveModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Deactive Vendor
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Croissant jelly-o halvah chocolate sesame snaps. Brownie
                    caramels candy
                    canes chocolate cake
                    marshmallow icing lollipop I love. Gummies macaroon donut
                    caramels
                    biscuit topping danish.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" id="deactive" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    let user_id = null;
    let sta_id = null;
    $('.getId').on('click', function() {
        user_id = $(this).attr('data-id');
        // sta_id = $(this).attr('status-id');
        $('#active').on('click', function() {
            alert(user_id);
            Statuschnage(user_id);
        });
        $('#deactive').on('click', function() {
            alert(user_id);
            Statuschnage(user_id);
        });

    });

    function Statuschnage(user_id) {
        $.ajax({
            // ajax start //
            type: "POST",
            cache: false,
            url: "<?php echo base_url('ad/operation/venderstatus'); ?>",
            data: {
                eid: user_id,
            },
            success: function(res) {
                if (res == 1) {
                    location.reload();
                } else {
                    location.href = "<?php echo base_url('ad/admin/');?>";
                }
            }
        });
    }

});
</script>