const formSignUp=document.forms['SignUPform'];
function signUP_valid(){
    var unom=document.SignUPform.username;
    var umail=document.SignUPform.uemail;
    var pass=document.SignUPform.password;
    var female=document.SignUPform.msexe;
    var male=document.SignUPform.fsexe;
    var datenaissance=ocument.SignUPform.datenaissance;
    if(usernameValid(unom))
    {
        if(userDateNvalid(datenaissance)){
            if(userEmailValid(umail)){
                if(userGenderValid(female,male)){
                    if(userPassewordValid(pass)){

                    }
                }
            }
        }
    }
return false;
}
usernameValid(unom){
    var letter=/^[A-Za-z]+$/;
    if(unom.value.match(letter)){
        return true;
    }
    else{
        alert('Username must have alphabet characters only');
    }
}
