<h1>Add Category</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!---style---->
<style>
#error{
    border: 2px solid #e81111;
}
</style>
 
<!-----style----> 
<div class="form-group">
    <input type="text" class="form-control" id="category" placeholder="Add Category" name="category">
    <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
    <img src="<?php echo base_url('public/commonfiles/Spinner-2.gif') ?>" alert="reloadgif" style="height:20;"
        id="wait-load" />
</div>
<!----load---the --tabel--->
<div id="customers-list">
</div>
<!---->



<script type="text/javascript">
$(document).ready(function() {
    $('#wait-load').hide();
    // Coll Data function Using ajax //
    getdata();
    ///  add data function ///
    $('#butsave').on('click', function() {
        //1///
        $('#wait-load').show();
        var name = $('#category').val();
        if (name !== "") {
            // if and else cd- //
            //validation//
            var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
            if (format.test(name)) {
              alert('special ch not valid');
              $('#wait-load').hide();
              $('#category').add('#error');
            } else {
                $.ajax({
                // ajax start //
                type: "POST",
                url: "<?php echo base_url('ad/operation/AddCategory'); ?>",
                data: {
                    cname: name
                },
                success: function(res) {
                    if (res == 1) {
                        $('#wait-load').hide();
                        $('#category').val('');
                        getdata();
                    } else {

                        alert('data not add');

                    }
                }

            });
            }

            //end of validation //
            
            //ajax end  //
        } else {
            alert('Data Empty Pls Check ');
            $('#wait-load').hide();
            $('#category').add('#error');

        }
        // this is ajax //
    })
    // add function close //


    //data show function //
    function getdata() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ad/operation/ShowCategory'); ?>",
            success: function(data) {
                $("#customers-list").html(data);
            }
        });
    }
    //data show //


    function DeleteCat(id){
        
    }

});
</script>