</section>
</div>
<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="http://ahmadsaugi.com">A. Saugi</a></p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?php  echo base_url('public/adminasset/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js">
</script>
<script src="<?php  echo base_url('public/adminasset/') ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php  echo base_url('public/adminasset/') ?>assets/js/main.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    ///  add data function ///
    $('.msfgbox').hide();
    $('#butsave').on('click', function() {
        // $('#wait-load').show();
        var name = $('#category').val();
        var status = $('#status').val();
        if (name !== "") {
            // if and else cd- //
            $('#category').removeClass("is-invalid");
            //validation//
            var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
            if (format.test(name)) {
                alert('special ch not valid');
                $('#category').addClass("is-invalid");
            } else {
                $.ajax({
                    // ajax start //
                    type: "POST",
                    cache: false,
                    url: "<?php echo base_url('ad/operation/AddCategory'); ?>",
                    data: {
                        cname: name,
                        sta: status
                    },
                    success: function(res) {
                        $('#category').val('');
                        $('.msfgbox').fadeIn();
                        $('.msfgbox').fadeOut(4000);
                        $('.msfgbox').addClass('alert-success');
                        $(".msfgbox").text('You Data Add In Data Base');
                        getdata();
                    }
                });
            }
            //end of validation //
            //ajax end  //
        } else {
            alert('Data Empty Pls Check ');
            $('#category').addClass("is-invalid");
        }
        // this is ajax //
    })
    // add function close //
    function getdata() {
        $.ajax({
            type: 'ajax',
            url: "<?php  echo base_url('ad/operation/ShowCategory');?>",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    if (data[i].status == 1) {

                        html += '<tr><td>' + (i + 1) + '</td>' +
                            '<td>' + data[i].id + '</td>' +
                            '<td id="cname" >' + data[i].name + '</td>' +
                            '<td><a href="javascript:void(0);"  class="edit" data-bs-toggle="modal" data-bs-target="#editModalCenter"   data-id="' +
                            data[i]
                            .id +
                            '" data-cnam = " ' + data[i].name + ' " >Edit</a></td>' +
                            '<td><a href="javascript:void(0);" class="del"   data-bs-toggle="modal" data-bs-target="#exampleModalCenter"   data-id="' +
                            data[i].id +
                            '" >Delete</a></td>' +
                            '<td id="cname" ><div class="form-check form-switch"><input class="form-check-input stacha"   data-id="' +
                            data[i].id + '" data-sta=" ' + data[i].status +
                            ' "   type="checkbox" id="flexSwitchCheckDefault" checked ></div></td></tr>';
                    } else {
                        html += '<tr><td>' + (i + 1) + '</td>' +
                            '<td>' + data[i].id + '</td>' +
                            '<td id="cname" >' + data[i].name + '</td>' +
                            '<td><a href="javascript:void(0);"  class="edit" data-bs-toggle="modal" data-bs-target="#editModalCenter"   data-id="' +
                            data[i]
                            .id +
                            '" data-cnam = " ' + data[i].name + ' " >Edit</a></td>' +
                            '<td><a href="javascript:void(0);" class="del" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"  data-id="' +
                            data[i].id +
                            '" >Delete</a></td>' +
                            '<td id="cname" ><div class="form-check form-switch"><input class="form-check-input stacha"   data-id="' +
                            data[i].id + '" data-sta=" ' + data[i].status +
                            ' "   type="checkbox" id="flexSwitchCheckDefault"></div></td></tr>';
                    }
                }
                $('#cha-tab').html(html);
            }
        });
    }
    getdata();
    // Delete work
    $('#cha-tab').on('click', '.del', function() {
        let id = $(this).attr('data-id');
        $('#cid').val(id);
        $('#data-del').on('click', function() {
            var del_id = $('#cid').val();
            $.ajax({
                // ajax start //
                type: "POST",
                cache: false,
                url: "<?php echo base_url('ad/operation/Delete'); ?>",
                data: {
                    deletid: del_id
                },
                success: function(res) {
                        $('.msfgbox').fadeIn();
                        $('.msfgbox').fadeOut(3000);
                        $('.msfgbox').addClass('alert-danger');
                        $(".msfgbox").text(' Data is Deleted ');
                    getdata();
                }
            });
        });
    });
    // Edit 
    $('#cha-tab').on('click', '.edit', function() {
        let id = $(this).attr('data-id');
        let cname = $(this).attr('data-cnam');
        $('#eid').val(id);
        $('#ename').val(cname);
        $('#data-edit').on('click', function() {
            var edit_id = $('#eid').val();
            var edit_name = $('#ename').val();
            $.ajax({
                // ajax start //
                type: "POST",
                cache: false,
                url: "<?php echo base_url('ad/operation/EditData'); ?>",
                data: {
                    cname: edit_name,
                    eid: edit_id,
                },
                success: function(res) {
                        $('.msfgbox').fadeIn();
                        $('.msfgbox').fadeOut(4000);
                        $('.msfgbox').addClass('alert-success');
                        $(".msfgbox").text('You Data is Edit ');
                    getdata();
                }
            });
        });
    });
    // Status Change 
    $('#cha-tab').on('click', '.stacha', function() {
        let id = $(this).attr('data-id');
        let sid = $(this).attr('data-sta');
        if (sid == 1) { sid = 0;} else {sid = 1; }
        $.ajax({
            // ajax start //
            type: "POST",
            cache: false,
            url: "<?php echo base_url('ad/operation/StatusChange'); ?>",
            data: {
                cid: id,
                sid: sid,
            },
            success: function(res){
                        $('.msfgbox').fadeIn();
                        $('.msfgbox').fadeOut(4000);
                        $('.msfgbox').addClass('alert-success');
                        $(".msfgbox").text('Status Chage');
                getdata();
            }
        });
     });

});
</script>
</body>

</html>