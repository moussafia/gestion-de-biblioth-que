<?php 
include('database.php');
session_start();
if(isset($_POST['Enregistrer']))    saveDataAdmin();
if(isset($_POST['Entrer']))    SignIn();
function saveDataAdmin(){
    GLOBAL $conn;
    $nameuser=$_POST['username'];
    $dateNaissance=$_POST['datenaissance'];
    $uemail=$_POST['uemail'];
    $gender=$_POST['sexe'];
    $passW=$_POST['password'];
    if(checkEmailUnique($uemail)){
        $req="INSERT INTO `admin` (`nom_complet`, `date_naissance`, `email`, `sexe`, `password`) 
        VALUES ('$nameuser', '$dateNaissance', '$uemail', '$gender', '$passW')";
        $query_run=mysqli_query($conn, $req);
        header('location: signIn.php');
    }else{
    }
        
}
function checkEmailUnique($email){
    Global $conn;
    $req="SELECT * FROM admin WHERE email='$email'";
    $result=mysqli_query($conn, $req);
    $count=mysqli_num_rows($result);
    if($count>0){
        return false;
    }else{
        return true;
    }
}
function SignIn(){
    GLOBAL $conn;
    $uemail=$_POST['Sinuemail'];
    $passW=$_POST['inpassword'];
    if(checkEmailExist($uemail)==true && checkPasswordExist($passW)==true){
        sessionAdmin($uemail);
        header('location: dashboard.php');
    }else{ 
    }
}
function checkEmailExist($email){
    Global $conn;
    $req="SELECT * FROM admin WHERE email='$email'";
    $result=mysqli_query($conn, $req);
    $count=mysqli_num_rows($result);
    if($count>0){
        return true;
    }else{
        return false;
    }
}
function checkPasswordExist($pass){
    Global $conn;
    $req="SELECT * FROM admin WHERE password='$pass'";
    $result=mysqli_query($conn, $req);
    $count=mysqli_num_rows($result);
    if($count>0){
        return true;
    }else{
        return false;
    }
}
function sessionAdmin($uemail){
    Global $conn;
    $req="SELECT *,genre  FROM admin,genre WHERE email='$uemail' AND genre.id=admin.sexe";
    $result=mysqli_query($conn, $req);
    $row=mysqli_fetch_assoc($result);
    $_SESSION['name']=$row['nom_complet'];
    $_SESSION['daN']=$row['date_naissance'];
    $_SESSION['uema']=$row['email'];
    $_SESSION['gend']=$row['nom_complet'];
    $_SESSION['mdp']=$row['genre'];
}
?>