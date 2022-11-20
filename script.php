<?php 
include('database.php');
session_start();
if(isset($_POST['Enregistrer']))    saveDataAdmin();
if(isset($_POST['Entrer']))    SignIn();
if(isset($_POST['save']))        saveBook();
if(isset($_POST['delete']))      deleteBOOK();
if(isset($_POST['deleteAll']))    deleteAll();
if(isset($_POST['Update']))      updateBOOK();
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
        $_SESSION['message']="email deja existe";
        echo $_SESSION['message'];
        unset($_SESSION['message']);
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
    if(checkEmailExist($uemail,$passW)==true){
        sessionAdmin($uemail);
        header('location: dashboard.php');
    }else{ 
        $_SESSION['messa']="email ou mot de passe n'est pas correct";
    }
}
function checkEmailExist($email,$pass){
    Global $conn;
    $req="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
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
    $req="SELECT * FROM admin WHERE email='$uemail'";
    $result=mysqli_query($conn, $req);
    $row=mysqli_fetch_assoc($result);
    $_SESSION['iduser']=$row['id'];
    $_SESSION['name']=$row['nom_complet'];
    $_SESSION['daN']=$row['date_naissance'];
    $_SESSION['uema']=$row['email'];
    $_SESSION['gend']=$row['sexe'];
    $_SESSION['mdp']=$row['password'];
}
function saveBook(){
    GLOBAL $conn;
    $photo=$_FILES['picture']['name'];
    $tmp_photo=$_FILES['picture']['tmp_name'];
    $phto_size=$_FILES['picture']['size'];
    $title=$_POST['title'];
    $auteu=$_POST['auteur'];
    $genr=$_POST['genre'];
    $prix=$_POST['prix'];
    $description=$_POST['Description'];
    $idus=$_SESSION['iduser'];
    if($_FILES['picture']['size']>1500000000){
        $message="file du taille grande";
        header('location: MLIVRES.php?error=$message');
    }else{
        $img_ext=pathinfo($photo, PATHINFO_EXTENSION);
        $new_img_name=uniqid("IMG-",true).'.'.$img_ext;
        $img_new_path='IMGupload/'.$new_img_name;
        move_uploaded_file($tmp_photo,$img_new_path);
        GLOBAL $conn;
        $req="INSERT INTO `livre` (`title`, `n_auteur`, `genre`,
         `description`, `code`, `price`, `photo_book`) 
         VALUES ('$title', '$auteu', '$genr', '$description',$idus, '$prix', '$new_img_name')";
        mysqli_query($conn, $req);
        header('location: MLIVRES.php');
    }
}
function displayMyBook(){
    GLOBAL $conn;
    $idus=$_SESSION['iduser'];
    $req="SELECT * FROM livre JOIN genre_livre ON livre.genre=genre_livre.id JOIN admin ON livre.code=admin.id WHERE livre.code=$idus ";
    $result=mysqli_query($conn, $req);
    while($row=mysqli_fetch_assoc($result)){?>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <button type ="button"  id="<?=$row['idLivre']?>" onclick="RemplirForm(id)" class="btn btn btn-outline-secondary shadow border-0 m-2"       titleForm="<?=$row['title'] ?>"     
        AuteurForm="<?=$row['n_auteur'] ?>"     GenreForm="<?=$row['genre'] ?>"      DescriptionForm="<?=$row['description'] ?>"     pictureForm="<?=$row['photo_book'] ?>"
        priceForm="<?=$row['price'] ?>"        data-bs-toggle="modal" data-bs-target="#crudForm">
                            <div class="d-flex justify-content-around flex-wrap gap-3 overflow-hidden my-3">
                                <img src="IMGupload\<?=$row['photo_book']?>" style="object-fit: scale-down; height: 333px;" class="img-thumbnail vw-100 ">
                            </div>
                            <div><strong class="text-black"> <?php echo displayCutString($row['title']);?></strong></div>
                            <div><u style="color:#1907e4;"><strong>Auteur:</strong></u>    <span class="text-black"><?php echo displayCutString($row['n_auteur']); ?></span></div>
                            <div><u style="color:#1907e4;"><strong>Genre:</strong></u>   <span class="text-black"><?php echo displayCutString($row['nom_genre']); ?></span></div>
                            <div><u style="color:#1907e4;"><strong>#Ajouter par:</strong></u>   <i class="text-black"><?php echo displayCutString($row['nom_complet']); ?></i></div>
                            <div><u style="color:#1907e4;"> <strong>Description:</strong></u>    <i class="text-black"><?php echo displayCutString($row['description']); ?></i></div>
                            <div><span class="text-black text-center fs-4" style="border:#1907e4 solid 2px ;border-radius: 5px;"><?php echo $row['price']; ?>$</span></div>
        </button>
    </div>
<?php }
}
function displayCutString($string){
    $newString;
    if(strlen($string)>30){
        $string_cut=substr($string,0,30);
        $stringEndEspace=strrpos($string_cut,' ');
        $newString=$stringEndEspace?substr($string,0,$stringEndEspace):substr($string_cut,0);
        $newString.='...';
        return $newString;
    }else{
        return $string;
    }   
}
function updateBOOK(){
    GLOBAL $conn;
    $photo=$_FILES['picture']['name'];
    $tmp_pict=$_FILES['picture']['tmp_name'];
    $title=$_POST['title'];
    $auteu=$_POST['auteur'];
    $genr=$_POST['genre'];
    $prix=$_POST['prix'];
    $description=$_POST['Description'];
    $idHide=$_POST['idBook'];
    if($_FILES['picture']['size']>1500000){
        $mess="picture est de taille grand";
        header('location: MLIVRES.php?error=$mess');
    }else{
        if(empty($photo)){
            
        }
        $img_extention=pathinfo($photo,PATHINFO_EXTENSION);
        $new_img_name=uniqid('IMG-',TRUE).'.'.$img_extention;
        $new_img_path='IMGupload/'.$new_img_name;
        move_uploaded_file($tmp_pict,$new_img_path);
        $req="UPDATE `livre` SET `title`='$title',`n_auteur`='$auteu',`genre`='$genr',
        `description`='$description',`price`='$prix',`photo_book`='$new_img_name' WHERE `idLivre`=$idHide";
        mysqli_query($conn, $req);
        header('location: MLIVRES.php');
    }
}
function deleteBOOK(){
    GLOBAL $conn;
    $idHide=$_POST['idBook'];
    $req="DELETE FROM `livre` WHERE `idLivre`=$idHide";
    mysqli_query($conn,$req);
    header('location: MLIVRES.php');
}
function deleteAll(){
    GLOBAL $conn;
    $req="DELETE FROM `livre`";
    mysqli_query($conn,$req);
    header('location: MLIVRES.php');
}
?>