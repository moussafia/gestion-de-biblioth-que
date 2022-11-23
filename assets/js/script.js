var save=document.getElementById('save');
var update=document.getElementById('Update');
var delet=document.getElementById('delete');

//sign in valid
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
// user name valid
function usernameValid(unom){
    var letter =/^([A-Za-z]{3,16})?([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})$/;
    if(unom.value.match(letter)){
        return true;
    }else{
        alert('name is not valid');
        return false;
    }
}
// date de naissance valid
function userDateNvalid(datenaissance){
    if(datenaissance.value!=""){
        return true;
    } 
    else{
        alert('birday date is not valid');
        return false;
    }
}
//user email valid 
function userEmailValid(umail){
    var mail=/^([A-Za-z\d\.-_]+)@([A-Za-z\d]+)\.([A-Za-z]{2,8})(\.[A-Za-z]{2,8})?$/;
    if(umail.value.match(mail)){
        return true;
    }else{
        alert('email is not valid');
        return false;
    }
}
//user password valid
function userPassewordValid(pass){
    var mdp=pass.value.length;
    if(mdp==0 || mdp>12 || mdp<3){
        alert('password is not valid ,password should>2 and <13');
        return false;
    }
    return true;
}
// hide button in add book and reset form
function clickBtnAddBook(){
    save.style.display='inline';
    delet.style.display='none';
    update.style.display='none';
    document.getElementById('nameOperation').innerHTML='Ajouter un livre';
    document.crudForm.reset();
}
// remplir form
function RemplirForm(idForm){
    save.style.display="none";
    delet.style.display="inline";
    update.style.display="inline";
    document.getElementById('nameOperation').innerHTML="mise a jour ou suprimer les livre";
    document.crudForm.auteur.value=document.getElementById(idForm).getAttribute("AuteurForm");
    document.crudForm.genre.value=document.getElementById(idForm).getAttribute("GenreForm");
    document.crudForm.prix.value=document.getElementById(idForm).getAttribute("priceForm");
    document.crudForm.Description.value=document.getElementById(idForm).getAttribute("DescriptionForm");
    document.crudForm.title.value=document.getElementById(idForm).getAttribute("titleForm");
    document.crudForm.idBook.value=idForm;
}