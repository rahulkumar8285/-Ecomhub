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

function  Singupvalid(){   
    var name = document.forms['Singup']['fullname'].value;
    var mobile = document.forms['Singup']['mobile'].value;
    var email = document.forms['Singup']['Email'].value;
    var password = document.forms['Singup']['password'].value;
    var addresss = document.forms['Singup']['addresss'].value;
    var city = document.forms['Singup']['city'].value;
    var state = document.forms['Singup']['state'].value;

     var password = document.forms['Singup']['password'].value;
    if(name=="" || mobile=="" || email=="" || password==""||addresss==""||city==""||state==""){
           alert('all filed si reeww');
           return false;
    }else{
        if(ValidateEmail(email)){
            alert(doc[1]);
            return false;
        }
        else{
            alert('all filed si reeww');
            return false;
        }
    }

   
}


function ValidateEmail(email) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
  {
    return (true)
  }
    return (false)
}


