$(document).ready(function(){
// alert('function js run');
// Add box
$('#addfiled').on('click',function(){
  // alert('fun');
 var html = '';
 html +='<div class="row mt-3" id="inputFormRow">';
 html +='<div class="col"><select class="form-control" id="input-select"> <option value="volvo">Volvo</option><option value="volvo">Volvo</option> </select></div>';
 html +='<div class="col"> <select class="form-control" id="input-select"></select></div>';
 html +='<div class="col"> <input id="productname" name="productname" type="text" class="form-control"></div>';
 html +='<div class="col"> <input id="productname" name="productname" type="text" class="form-control"></div>';
 html +='<div class="col"> <input id="productname" name="productname" type="text" class="form-control"></div>';
 html +='<div class="col"> <select class="form-control" id="input-select"></select></div>';
 html +='<div class="col"> <button type="button" class="btn btn-danger" id="removeRow" >-</button></div>';
 html +='</div>'; 
 $('#setbox').append(html); 
});
// Remove Box
$(document).on('click', '#removeRow', function () {
  $(this).closest('#inputFormRow').remove();
});










});