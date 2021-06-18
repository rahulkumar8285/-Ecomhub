alert('file link ');

function LoginValid(){
    var email = document.forms['Login']['email'].value;
    var password = document.forms['Login']['password'].value;
    if(email=="" ||password==""){
        alert('not run');
        return false;
    }else{
        if(ValidateEmail(email)){
              return true;
        }
        else{
            alert('Email Not Vaid');
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
    alert("You have entered an invalid email address!")
    return (false)
}


