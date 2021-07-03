<script src="<?php echo base_url('public/commonfiles/formvalid.js')?>" type="text/javascript"></script>
<form name="Singup" method="post" onsubmit="return Singupvalid();">
    <!-- full name -->
    <label for="fullname">fullname</label>
    <input type="text" name="fullname">
    <br>
    <!-- email -->
    <label for="Email">Email</label>
    <input type="Email" name="Email">
    <br>
    <!-- psd -->
    <label for="password">Password</label>
    <input type="password" name="password">
    <br>

    <!-- full name -->
    <label for="mobile">mobile</label>
    <input type="text" name="mobile">
    <br>

    <!-- full name -->
    <label for="addresss">addresss</label>
    <input type="text" name="addresss">
    <br>

    <!-- full name -->
    <label for="city">city</label>
    <input type="text" name="city">
    <br>
    <!-- full name -->
    <label for="state">state</label>
    <input type="text" name="state">
    <br>
    <!-- filer -->
    <label for="fullname">Upload Document</label>
    <small> Select five document adharid,penid,bank,gst, <br>All are must all file is pdf formate </small>
    <input type="file" name="doc" id="doc" multiple accept="application/pdf">
    <br>
    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>



</form>