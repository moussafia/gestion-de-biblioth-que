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
    <title>gestion-de-bibliothèque</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#242A3F;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="assets\img\cover\Colorful_Stack_of_Books_Library_or_Book_Store_Logo_1.png" height="70"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-md-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Offres</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  categorie
                </a>
                <ul class="dropdown-menu bg-black">
                  <li><a class="dropdown-item" href="#">Scientifique</a></li>
                  <li><a class="dropdown-item" href="#">Literature</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Autre</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">A propos nous</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-success text-white border-white m-1" type="submit"><a href="signUp.php">S'inscrire</a></button>
              <button class="btn btn-outline-success text-white border-white m-1" type="submit"><a href="signIn.php">Se connecter</a></button>
            </form>
          </div>
        </div>
      </nav>
      <main>
        <div class="container-fluid ps-0">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <img src="./assets/img/cover/bib.jpg" class="w-100">
            </div>
            <div class="col-lg-6 col-md-12 text-center p-5">
              <h5>Achat, vente et échange de livres au Maroc</h5>
              <p>Découvrez les bonnes affaires du moment et publiez gratuitement votre annonce.</p>
              <button type="button" class="btn btn-outline-secondary text-black border-black btn-lg">Decouvrir avec nous ici</button>
            </div>
          </div>
        </div>
      </main>
<footer class="bg-dark text-center text-white">
  <div class="container p-4">
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-facebook"></i></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-google"></i></a>
      
        <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-linkedin"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-github"></i></a>
    </section>
    <!-- Section: Social media -->
    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lire, c’est boire et manger. L’esprit qui ne lit pas maigrit comme le corps qui ne mange pas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="text-uppercase">Produit</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Statut</a>
            </li>
            <li>
              <a href="#!" class="text-white">Telecharger</a>
            </li>
            <li>
              <a href="#!" class="text-white">Acheter</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="text-uppercase">Entreprise</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">A propos</a>
            </li>
            <li>
              <a href="#!" class="text-white">Emplois</a>
            </li>
            <li>
              <a href="#!" class="text-white">Stage</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="text-uppercase">Chartes</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Condtions</a>
            </li>
            <li>
              <a href="#!" class="text-white">Confidialité</a>
            </li>
            <li>
              <a href="#!" class="text-white">Licences</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Ressources</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Université</a>
            </li>
            <li>
              <a href="#!" class="text-white">Assistance</a>
            </li>
            <li>
              <a href="#!" class="text-white">Blog</a>
            </li>
            <li>
              <a href="#!" class="text-white">Developpeur</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="http://localhost/gestion-de-biblioth-que/">gestion-de-bibliothèque.com</a>
  </div>
</footer>
<!-- ================== BEGIN core-js ================== -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
        <!-- ================== END core-js ================== -->            
</body>
</html>
<?php } ?>