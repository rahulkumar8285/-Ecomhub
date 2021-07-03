<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/adminasset/')?>assets/css/bootstrap.css">
    <link rel="stylesheet"
        href="<?php echo base_url('public/adminasset/')?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('public/adminasset/')?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url('public/adminasset/')?>assets/css/pages/auth.css">
    <script src="<?php echo base_url('public/commonfiles/formvalid.js')?>" type="text/javascript"></script>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-7 col-12">
                <div id="auth-left">
                    <?php if(!empty($this->session->flashdata('invalid-user'))){?>
                    <div class=" container alert  alert-danger"> <?php
                        echo  $this->session->flashdata('invalid-user');?>
                    </div> <?php } ?>
                    <h1 class="auth-title">Log in.</h1>
                    <form name="Login" action="<?php echo base_url('ad/adminauth/login');?>" method="post"
                        onsubmit="return LoginValid();">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>"
                                class="form-control form-control-xl" placeholder="Enter Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" id="password"
                                value="<?php echo set_value('password'); ?>" class="form-control form-control-xl"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>