function signUP_valid(){
    var unom=document.SignUPform.username;
    var umail=document.SignUPform.uemail;
    var pass=document.SignUPform.password;
    var datenaissance=document.SignUPform.datenaissance;
    if(usernameValid(unom))
    {
        if(userDateNvalid(datenaissance)){
            if(userEmailValid(umail)){
                if(userPassewordValid(pass)){
                    }
              }
          }
    }
    return false;
    }
function usernameValid(unom){
    var letter =/(^[A-Za-z]{3,16})?([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})$/;
    if(unom.value.match(letter)){
        return true;
    }else{
        
        alert('name is not valid');
        return false;
    }
}
function userDateNvalid(datenaissance){
    if(datenaissance.value!=""){
        return true;
    } 
    else{
        alert('birday date is not valid');
        return false;
    }
}
function userEmailValid(umail){
    var mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(umail.value.match(mail)){
        return true;
    }else{
        alert('email is not valid');
        umail.focus();
        return false;
    }
}
function userPassewordValid(pass){
    var mdp=pass.value.length;
    if(mdp==0 || mdp>12 || mdp<3){
        alert('password is not valid');
        return false;
    }
    return true;
}
