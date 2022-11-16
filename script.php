<?php 
session_start();
include('database.php');
if(isset($_POST['Enregistrer'])) saveDataAdmin();
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
?>