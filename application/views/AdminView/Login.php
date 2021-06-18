<hi>Hii I am Login </h1>
<form  action="<?php echo base_url('AdminCl/AdminAuthCl/Login')?>"  name="AdminForm" onsubmit="return AdminValid()" method="POST" >
<input type="email" name="email" id="email"><br>
<input type="password" name="psd" id="psd"><br>
<input type="submit">
</form>

<script>
 function AdminValid(){
    var email = document.forms["AdminForm"]["email"].value;  
    var psd = document.forms["AdminForm"]["psd"].value;  
    if(email == "" || psd == ""){
        alert('Enter All Fild')
        return false;
    }
    else{
       return true;
    }
 
 }

</script>