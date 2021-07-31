$(document).ready(function(){
// alert('function js run');
// Add box
var size = $('#size').html();
var color  = $('#color').html();
$('#addfiled').on('click',function(){
  // alert('fun');
 var html = '';
//  var selectsize  =  $('#selectsize').val();
//  console.log(selectsize); 
 html +='<div class="row mt-3" id="inputFormRow">';
 html +='<div class="col"><select class="form-control" id="sizeselect" id="selectsize" name="selectsize[]" >'+size+'</select></div>';
 html +='<div class="col"> <select class="form-control" id="input-select" name="color[]">'+color+'</select></div>';
 html +='<div class="col"> <input id="productname" name="productmrp[]" type="text" class="form-control" required></div>';
 html +='<div class="col"> <input id="productname" name="sellingprice[]" type="text" class="form-control" required></div>';
 html +='<div class="col"> <input id="productname" name="qunty[]" type="text" class="form-control" required></div>';
 html +='<div class="col"> <select class="form-control" id="input-select" name="setstatus[]"> <option value="1">Public </option> <option value="0">Draf </option></select></div>';
 html +='<div class="col"> <button type="button" class="btn btn-danger" id="removeRow" >-</button></div>';
 html +='</div>'; 
 $('#setbox').append(html); 
});
// Remove Box
$(document).on('click', '#removeRow', function () {
  $(this).closest('#inputFormRow').remove();
});

//  alert('del function ruin');
$(document).on('click','#deletebtn',function(){
 var delid = $(this).attr('data-del');
//  console.log(delid);
$('#data-delid').val(delid);
});





});