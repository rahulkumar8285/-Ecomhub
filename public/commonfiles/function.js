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
 html +='<div class="col"> <input id="productname" name="productmrp[]" type="text" class="form-control"></div>';
 html +='<div class="col"> <input id="productname" name="sellingprice[]" type="text" class="form-control"></div>';
 html +='<div class="col"> <input id="productname" name="qunty[]" type="text" class="form-control"></div>';
 html +='<div class="col"> <select class="form-control" id="input-select" name="setstatus[]"> <option value="1">Public </option> <option value="0">Draf </option></select></div>';
 html +='<div class="col"> <button type="button" class="btn btn-danger" id="removeRow" >-</button></div>';
 html +='</div>'; 
 $('#setbox').append(html); 
});
// Remove Box
$(document).on('click', '#removeRow', function () {
  $(this).closest('#inputFormRow').remove();
});

// add img box
var imgcolor = '';
$(document).on('click','#multimge',function(){
  imgcolor =  $('#imgcolor').val();
  //  alert(data);
  });
//

$(document).on('click','#addimg',function(){
  var html = '';
  html +=' <div class="row mt-3" id="inputimgremove" >';
  html +='<div class="col"><select class="form-control" id="imgcolor" name="imgcolor[]" >'+color+'</select></div>';
  // Profile img
  html +='<div class="col-3 mr-2">  <input type="file" class="custom-file-input" id="mainimg"  name="mainimg[]" />';
  html +=' <label class="custom-file-label" for="customFile">Profile Image</label></div>';
  // multi images
  html +='<div class="col-5">  <input type="file" class="custom-file-input" id="multimge" name="multimge['+imgcolor+'][]" multiple />';
  html +='<label class="custom-file-label" for="customFile">Product Multi Images</label></div>';
  html +='<div class="col-1"> <button type="button" class="btn btn-danger" id="removeRow" >-</button></div>';
  html +='</div>';

  $('#imgbox').append(html); 
});
$(document).on('click', '#removeRow', function () {
  $(this).closest('#inputimgremove').remove();
});

});