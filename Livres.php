<?php
include('script.php');
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>gestion-de-bibliothèque</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg text-center" style="background-color:#242A3F;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets\img\cover\Colorful_Stack_of_Books_Library_or_Book_Store_Logo_1.png" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav  me-auto mb-4 mb-lg-0 ms-md-3 gap-5">
            <li class="nav-item">
              <a class="nav-link" href="#">livres  <i class="bi bi-book"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Statistique  <i class="bi bi-graph-up"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Sortir  <i class="bi bi-box-arrow-right"></i></a>
            </li>
          </ul>
          <div class="float-right">
            <button class="btn text-white border-white"><i class="bi bi-person-circle text-white">  <strong><?php echo $_SESSION['name']; ?></strong></i></button>
          </div>
      </div>
    </div>
  </nav>
  <main>
    <div class="container-fluid">
      <div class="mb-1"><p class="text-center text-danger shadow bg-white rounded m-2" style="font-size:40px;"><strong>Mes livres</strong></p></div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <button type ="button"  class="btn btn btn-outline-secondary shadow border-0 m-2" data-bs-toggle="modal" data-bs-target="#afficherDonner"  >
                <div class="d-flex justify-content-around flex-wrap gap-3 overflow-hidden my-3">
                    <img src="test.png" style="object-fit: scale-down; height: 333px;" class="img-thumbnail">
                </div>
                <div><strong class="text-black"> Lorem ipsum dolor sit amet ...</strong></div>
                <div><u style="color:#1907e4;">Auteur:</u>    <span class="text-black">auteur name</span></div>
                <div><u style="color:#1907e4;">Genre:</u>   <span class="text-black">genre name</span></div>
                <div><u style="color:#1907e4;">#Ajouter par:</u>   <i class="text-black">admin</i></div>
                <div><u style="color:#1907e4;"> Description:</u>    <i class="text-black">Lorem ipsum dolor sit amet consectetur...</i></div>
                <div><span class="text-black text-center fs-4" style="border:#1907e4 solid 2px ;border-radius: 5px;">$300</span></div>
            </button>
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
<form>
  <div class="modal fade" id="afficherdonner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi deserunt laudantium illum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-around flex-wrap gap-3 overflow-hidden my-3 modal-header">
            <img src="test.png" style="object-fit: scale-down; height: 333px;" class="img-thumbnail">
          </div>
          <div class="modal-header"><u style="color:#1907e4;">Auteur:</u>    <span class="text-black">auteur name</span></div>
          <div class="modal-header"><u style="color:#1907e4;">Genre:</u>   <span class="text-black">genre name</span></div>
          <div class="modal-header"><u style="color:#1907e4;">#Ajouter par:</u>   <i class="text-black">admin</i></div>
          <div class="modal-header"><u style="color:#1907e4;"> Description:</u><i class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum excepturi eius esse ipsum quis nemo! Molestiae sint aspernatur placeat sed dolorem consectetur necessitatibus neque tempora fugiat odio? Laudantium, exercitationem debitis.</i></div>
          <div class="modal-header"><u style="color:#1907e4;">Price:  </u><span class="text-black fs-4" style="border:#1907e4 solid 2px ;border-radius: 5px;">$300</span></div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
  </html>