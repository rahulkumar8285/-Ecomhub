<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup </title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/') ?>adminasset/assets/css/bootstrap.css">
    <link rel="stylesheet"
        href="<?php echo base_url('public/') ?>adminasset/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('public/') ?>adminasset/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url('public/') ?>adminasset/assets/css/pages/auth.css">
    <script src="<?php echo base_url('public/commonfiles/formvalid.js')?>" type="text/javascript"></script>
    <style>
    #errormsg {
        display: none;
    }
    </style>

</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-7 col-12">
                <div id="auth-left">
                    <h1>Sign Up</h1><br>
                    <?php if(!empty($this->session->flashdata('mail-already'))){?>
                    <div class=" container alert  alert-danger"> <?php
                        echo  $this->session->flashdata('mail-already');?>
                    </div> <?php } ?>
                    <form name="Vendorsingup" action="<?php echo base_url('ve/vendorauth/AuthSingup') ?>" method="POST"
                        onsubmit="return VendorSingup()">
                        <div class="form-group position-relative  mb-4">
                            <input type="text" class="form-control form-control-xl" id="Full_Name" name="Full_Name"
                                placeholder="Full Name" value="<?php echo set_value('Full_Name'); ?>" required>
                        </div>
                        <div class="form-group position-relative  mb-4">
                            <input type="email" class="form-control form-control-xl" id="Email" name="Email"
                                placeholder="Email" value="<?php echo set_value('Email'); ?>" required>
                        </div>
                        <div class="form-group position-relative  mb-4">
                            <input type="text" class="form-control form-control-xl" id="Mobile" name="Mobile"
                                placeholder="Mobile" value="<?php echo set_value('Mobile'); ?>"  required>
                        </div>
                        <div class="form-group position-relative  mb-4">
                            <input type="password" class="form-control form-control-xl" id="password" name="Password"
                                placeholder="Password" value="<?php echo set_value('Password'); ?>" required>
                        </div>
                        <label for="fullname">Profile Image </label>
                        <div class="input-group mb-3">

                            <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-upload"></i></label>
                            <input type="file" class="form-control" id="venprofile" name="venprofile" value="<?php echo set_value('venprofile'); ?>"   >
                        </div>
                        <label for="fullname">Adhar,Bank,Pen,Gst 4 Document is must And All is Pdf Format</label>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-upload"></i></label>
                            <input type="file" class="form-control" id="doc" name="doc[]" multiple
                                accept="application/pdf" onchange="return showname()">
                        </div>
                        <span id="filename"></span>
                        <div class="alert alert-danger " id="errormsg">
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Sign Up</button>
                    </form>
                    <div class="text-center mt-2 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="<?php echo base_url('vendorlogin')?>"
                                class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>


        </div>

    </div>
</body>

</html>