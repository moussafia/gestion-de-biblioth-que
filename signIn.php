<?php
include('script.php');
if(isset($_SESSION['name'])){
  header('location: dashboard.php');
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- css style -->
    <link rel="stylesheet" href="assets\css\style.css">
    <title>sign In</title>
</head>
<body class="vh-100" style="background-color: #242A3F;">

        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="row justify-content-center">
                            <div class="col-md-11 col-lg-6 col-xl-6 order-2 order-lg-1">
                                <div>
                                    <p class="text-center h1 fw-bold mb-5 mx-md-4 mt-4">Se connecter</p>
                                </div>
                                <form name="signInform" method="POST" class="ps-4">
                                    <div class="d-flex">
                                        <div class="align-items-center mb-4 pe-2">
                                            <i class="bi bi-envelope-fill fs-3"></i>
                                        </div>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" placeholder="Votre Email" class="form-control" name="Sinuemail" required>
                                        </div>
                                    </div>  
                                    <div class="d-flex">
                                        <div class="align-items-center mb-4 pe-2">
                                            <i class="bi bi-key-fill fs-2"></i>
                                        </div>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" placeholder="Mot de passe" class="form-control" name="inpassword" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-1 mb-lg-1">
                                        <button type="submit" class="btn btn-primary btn-lg fw-bolder" name="Entrer" id="Entrer">Entrer</button>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <a href="signUp.php" style="text-decoration:none;">S'inscrire</a>
                                </div>
                                </form>
                                <?php if(isset($_SESSION['messa'])){?>
                                <div class="alert alert-danger" role="alert">
                                  <?php   
                                  echo $_SESSION['messa'];
                                  unset($_SESSION['messa']);?>
                                </div>
                                    <?php }?>
                            </div>
                            <div class="col-md-11 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-2">
                                <img src="./assets/img/cover/bib.jpg" class="w-100 h-100" style="border-radius:25px ;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ================== BEGIN core-js ================== -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
        <!-- script.js here -->
        <script src="assets\js\script.js"></script>
        <!-- ================== END core-js ================== -->            
</body>
</html>
<?php } ?>