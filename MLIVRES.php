<?php
include('script.php');
if(!isset($_SESSION['name'])){
    header('location: index.php');
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
        <title>Mes livre</title>
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
                    <a class="nav-link" href="Livres.php">livres  <i class="bi bi-book"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="statistique.php">Statistique  <i class="bi bi-graph-up"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="sortir.php">Sortir  <i class="bi bi-box-arrow-right"></i></a>
                    </li>
                </ul>
                <div class="float-right">
                    <button class="btn text-white border-white"><i class="bi bi-person-circle text-white">  <strong><?php echo $_SESSION['name']; ?></strong></i></button>
                </div>
            </div>
            </div>
        </nav>
        <main class="vh-100">
            <div class="container-fluid">
            <div class="row shadow bg-white rounded">
                <div class="col-lg-6">
                    <p class="text-danger" style="font-size:40px;"><strong>Mes livres</strong></p>
                </div>
                <div class="col-lg-6 mt-2 d-flex justify-content-lg-end">
                    <form method="POST" class="d-inline">
                        <button class="btn text-white bg-danger" id="deleteALL" type="submit"  name="deleteAll">
                            Suprimer tous
                        </button>
                        <button class="btn text-white bg-success" id="addBtn" type="button" onclick="clickBtnAddBook()" data-bs-toggle="modal" data-bs-target="#crudForm" >
                            + Ajouter un livre
                        </button>
                    </form>
                </div>
            </div>
                <div class="row">
                    <?php displayMyBook(); ?>
                </div>
            </div>
            </div>
        </main>
        <footer class="bg-dark text-center text-white" style="margin-top: 5%">
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
            Lire, c???est boire et manger. L???esprit qui ne lit pas maigrit comme le corps qui ne mange pas.
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
                <a href="#!" class="text-white">Confidialit??</a>
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
                <a href="#!" class="text-white">Universit??</a>
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
        ?? 2020 Copyright:
        <a class="text-white" href="http://localhost/gestion-de-biblioth-que/">gestion-de-biblioth??que.com</a>
        </div>
        </footer> 
        <form name="crudForm" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="crudForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="nameOperation"></h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="idBook" name="idBook">
                        <label for="picture">Picture</label><br>
                        <input type="file" id="picture" name="picture" accept="image/png, image/jpeg,, image/jpg"><br><br>
                        <label for="title">Titre</label><br>
                        <input class="form-control" type="text" name="title" aria-label="default input example" id="title" required><br>
                        <label for="auteur">Auteur</label><br>
		                <input class="form-control" type="text" name="auteur" aria-label="default input example" id="auteur" required><br>
                        <div>
                            <label for="priority" name="genre">Genre</label><br>
                            <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                              <option value="1">litt??raires</option>
                              <option value="2">Scientifique</option>
                              <option value="3">Autre</option>
                            </select><br>
                        </div>
                        <label for="prix">Prix</label><br>
                        <input class="form-control" type="number" name="prix" aria-label="default input example" id="prix" required><br>
                        <div class="mb-3">
                            <label for="Description" class="col-form-label">Description:</label>
                            <textarea class="form-control" name="Description" id="Description" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
                        <button type="submit" class="btn btn-primary" id="save" name="save">Enregistrer</button>
                        <button type="submit" class="btn btn-success"  id="Update" name="Update">Mise a jour</button>
                        <button type="submit" class="btn btn-danger" id="delete" name="delete">Suprimer</button>
                      </div>
                  </div>
                </div>
              </div>
        </form>
        <!-- ================== BEGIN core-js ================== -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
        <!-- script.js here -->
        <script src="assets\js\script.js"></script>
        <!-- ================== END core-js ================== -->
    </body>
</html>
<?php } ?>