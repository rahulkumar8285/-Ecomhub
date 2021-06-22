<h1>hi iam login</h1>

<form name="Login" action="<?php echo base_url('ad/adminauth/login');?>" method="post" onsubmit="return LoginValid();">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" requird />
    <label for="password">password</label>
    <input type="password" name="password" id="password" requird />
    <input type="submit" value="Login">
</form>
<script src="<?php echo base_url('public/commonfiles/formvalid.js')?>" type="text/javascript"></script>