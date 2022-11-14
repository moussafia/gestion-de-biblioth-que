<?php 
include('database.php');
include('signUp.php');
if(isset($_POST['Enregistrer'])) saveDataAdmin();
function saveDataAdmin(){
    GLOBAL $conn;
    $nameuser=$_POST['username'];
    $dateNaissance=$_POST['datenaissance'];
    $email=$_POST['uemail'];
    $gender=$_POST['sexe'];
    $passW=$_POST['password'];
    $req="INSERT INTO `admin` (`id`, `nom_complet`, `date_naissance`, `email`, `sexe`, `password`) VALUES (NULL, '$nameuser', '$dateNaissance', '$email', '$gender', '$passW')";
    $query_run=mysqli_query($conn,$req);

}
?>