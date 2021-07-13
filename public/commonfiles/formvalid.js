alert('file link ');
function LoginValid(){
    var email = document.forms['Login']['email'].value;
    var password = document.forms['Login']['password'].value;
    if(email=="" ||password==""){
        emerror = document.forms['Login']['email'];
        pserror = document.forms['Login']['password'];
        emerror.className += " is-invalid";
        pserror.className += " is-invalid";  
        return false;
    }else{
        if(ValidateEmail(email)){
              return true;
        }
        else{
            emerror.className += " is-invalid";
            return false; 
        }
    }

}

     
      var filename;
      var filestatus;

function showname () {

      var  name = document.getElementById('doc'); 
      filename = document.getElementById('filename');
     alert(name.files.length);
     if(name.files.length == 4){
        filename.innerText = "";
     for (var i = 0; i <= name.files.length - 1; i++)
     {
        filename.innerText+= "\n"+name.files.item(i).name;         
        filestatus = true;
    }
     }else{
         name.form.reset();
         filename.innerText= "Select Only 4 Documents !";
         filestatus = false;
         return false;
     }
  }


 function VendorSingup(){
    // alert('hello');
    var errormsg = document.getElementById('errormsg');
    var fullname = document.forms['Vendorsingup']['Full_Name'].value;
    var email = document.forms['Vendorsingup']['Email'].value;
    var mobile = document.forms['Vendorsingup']['Mobile'].value;
    var password = document.forms['Vendorsingup']['password'].value;
    var profile = document.forms['Vendorsingup']['venprofile'].value;
    var documnet = document.forms['Vendorsingup']['doc'].value;
    if(fullname ==" " && email==" " && mobile ==" " && password == " " ){
        return false;
        alert('all Fild is Requrid');
    }else{
         if(ValidateEmail(email)){
            if(filestatus == true){
                    if(mobile.length == 10 ){
                       if(profile){
                          return true;
                       }else{
                        document.getElementById('venprofile').classList.add('is-invalid'); 
                        return false; 
                       }
                    }else{
                        errormsg.style.display='block';
                        errormsg.innerText="Pls Enter valid Mobile number ";
                        return false;
                    }
            }
            else{
                document.getElementById('doc').classList.add('is-invalid'); 
                return false;
            }
         }else{
            errormsg.style.display='block';
            errormsg.innerText="Pls Enter valid Email Address !";
            return false;
         } 
    }
    return false;
  }

function ValidateEmail(email) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
  {
    return (true)
  }
    return (false)
}


// Vendor Valid Function 

function VeAddProduct(){
    alert('function is rtun');
    var proname = document.forms['prodectadd']['productname'].value;
    var brandname = document.forms['prodectadd']['brandname'].value;
    var shortdis = document.forms['prodectadd']['shortdis'].value;
    var longdic = document.forms['prodectadd']['longdic'].value;
    var prodectspc = document.forms['prodectadd']['prodectspc'].value;
    if(proname !==" " && brandname!=="" && longdic!==" " && prodectspc!==" " && shortdis!== " "){
        // alert('form run');
        return true;
    }else{
        document.getElementById('error').style.display='block';
        return false;
    }

}

// Create Size and Color Box //



function createsize(){
//    alert('create function working file');
var size = document.getElementById('size').value.toUpperCase();
console.log(size);  
// alert(size);
var findsize = null;
var sizearr = ['S','M','XXL','XS','L','XL','XLL','1X','2X','3X'];
for(i=0;i<sizearr.length;i++){
    if(size == sizearr[i]){
        findsize = sizearr[i];
        break;
    }
}

if(size!=="" && findsize!== null){
    //  create input size and color box
   
    }else{
    document.getElementById('size').style.border='2px solid red';
 }
}


