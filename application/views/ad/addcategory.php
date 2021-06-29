<h1>Add Category</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!---style---->
<style>
.error {
    border: 2px solid #ec0000;
}

table {
    width: 50%;
}

th {
    background: #f1f1f1;
    font-weight: bold;
    padding: 6px;
}

td {
    background: #f9f9f9;
    padding: 6px;
}
</style>


<!-----style---->
<div class="form-group">
    <input type="text" class="form-control " id="category" placeholder="Add Category" name="category">
    <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
    <img src="<?php echo base_url('public/commonfiles/Spinner-2.gif') ?>" alert="reloadgif" style="height:20;"
        id="wait-load" />
</div>
<!----load---the --tabel--->
<table id="myTable">
    <tr>
        <th>S.No</th>
        <th>C ID</th>
        <th>C Name</th>
        <th>Eddit</th>
        <th>Del</th>

    </tr>
    <tbody id="table">

    </tbody>
</table>
<!---->

<!-----Data --- Not--->
<h1 id="empty">
</h1>
<!----------->



<script type="text/javascript">
$(document).ready(function() {
    $('#wait-load').hide();
    // Coll Data function Using ajax //


    function getdata() {
        // output = null;
        // Show Data ajax //
        jQuery.ajax({
            url: "<?php  echo base_url('ad/operation/ShowCategory');?>",
            dataType: 'json',
            success: function(data) {
                console.log(data.length);
                if (data.length > 0) {
                    for (i = 0; i < data.length; i++) {
                        // console.log(data[i]);
                        var id = data[i].id;
                        var cname = data[i].name;
                        // Output //
                        var tr_str = "<tr>" +
                            "<td align='center'>" + (i + 1) + "</td>" +
                            "<td align='center'>" + id + "</td>" +
                            "<td align='center'>" + cname + "</td>" +
                            "<td align='center'>" + id + "</td>" +
                            "</tr>";
                    }
                    $("#table").html(tr_str);
                } else {
                    $("#table").text("Data Empty!");
                }
            }
        });
        // Edintin //

    }
    //data show //






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
                $('#category').addClass("error");
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
            $('#category').addClass("error");

        }
        // this is ajax //
    })
    // add function close //


    //data show function //


    getdata();

    function DeleteCat(id) {

    }

});
</script>