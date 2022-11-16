function signUP_valid(){
    var unom=document.inscription.username;
    var umail=document.inscription.uemail;
    var pass=document.inscription.password;
    var datenaissance=document.inscription.datenaissance;
    if(usernameValid(unom))
    {
        if(userDateNvalid(datenaissance)){
            if(userEmailValid(umail)){
                if(userPassewordValid(pass)){
                    return true;}else return false;
              }else return false;
          }else return false;
    }else return false;
    }
function usernameValid(unom){
    var letter =/^([A-Za-z]{3,16})?([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})$/;
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
    var mail=/^([A-Za-z\d\.-_]+)@([A-Za-z\d]+)\.([A-Za-z]{2,8})(\.[A-Za-z]{2,8})?$/;
    if(umail.value.match(mail)){
        return true;
    }else{
        alert('email is not valid');
        return false;
    }
}
function userPassewordValid(pass){
    var mdp=pass.value.length;
    if(mdp==0 || mdp>12 || mdp<3){
        alert('password is not valid ,password should>2 and <13');
        return false;
    }
    return true;
}
