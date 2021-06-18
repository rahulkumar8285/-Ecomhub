<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <hi>Vendor Login Form </h1>
        <form name="Login" action="<?php echo base_url('AdminCl/AdminAuthCl/Login')?>" name="AdminForm"
            onsubmit="return LoginValid()" method="POST">
            <input type="email" name="email" id="email" required><br>
            <input type="password" name="password" id="password" required ><br>
            <input type="submit">
        </form>
   <script src="<?php echo base_url('/public/commonfiles/formvalid.js')?>"></script>
</body>

</html>