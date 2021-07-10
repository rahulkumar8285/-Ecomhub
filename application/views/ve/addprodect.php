<div class="card">
    <h5 class="card-header">Add New Prodect</h5>
    <div class="card-body">
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-2">
                    <label for="productname" class="col-form-label">Product Name</label>
                    <input id="productname" type="text" class="form-control">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                    <label for="productname" class="col-form-label">Brand Name</label>
                    <input id="productname" type="text" class="form-control">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                    <label for="exampleFormControlTextarea1">Short textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mb-2">
                    <label for="exampleFormControlTextarea1">Select Size</label><br>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" checked="" class="custom-control-input"><span
                            class="custom-control-label">Option 1</span>
                    </label>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Option
                            2</span>
                    </label>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Option
                            3</span>
                    </label>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Option
                            3</span>
                    </label>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Option
                            3</span>
                    </label>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Option
                            3</span>
                    </label>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mb-2">
                    <label for="exampleFormControlTextarea1">Chose Color</label><br>
                    <input type="color" name="col1" />
                    <input type="color" name="col1" />
                    <input type="color" name="col1" />
                    <input type="color" name="col1" />
                    <input type="color" name="col1" />
                    
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 mb-2">
                    <label for="exampleFormControlTextarea1">Extra Amout on Size </label>
                    <input id="productname" type="number" class="form-control">
                </div>

            </div>
            <div class="form-row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                    <label for="validationCustom03">City</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                    <label for="validationCustom04">State</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                    <label for="validationCustom05">Zip</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </div>
        </form>
    </div>
</div>