<!-- Add Form -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Category</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Add new cat -->
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <input type="text" id="category" class="form-control " placeholder="Add New Category"
                        name="fname-column">
                </div>
            </div>
            <!-- status -->
            <div class="col-md-4 col-12">
                <div class="input-group ">
                    <label class="input-group-text" for="inputGroupSelect01">status</label>
                    <select class="form-select" id="status">
                        <option value="1">Public</option>
                        <option value="0">Draf</option>
                    </select>
                </div>
            </div>
            <!-- add button -->
            <div class="col-md-2 col-12">
                <input type="button" name="save" class="btn btn-primary" value="Add" id="butsave">
            </div>
        </div>

    </div>
</div>
<!--End Form -->
<div class=" container alert  msfgbox"><i class="bi bi-check-circle"></i> </div>
<!-- Show List -->
<div class="card p-3">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>S.No</th>
                    <th>C.ID</th>
                    <th>C Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="cha-tab">

            </tbody>
        </table>
    </div>
</div>
<!-- Delete Id -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Category Delete
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure Delete this Category
                </p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="cid" />
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block " id="data-del">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!--------show opmsg--->

<!-- Edit Data -->
<div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Category Edit
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="eid" />
                <input type="text" class="col-12" id="ename" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block " id="data-edit">Edit</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- test code -->
<?php $this->load->view('ad/ajaxcurd');?>