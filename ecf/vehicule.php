<?php
    session_start();
    require_once 'config.php'; // On inclut la connexion à la base de données
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>vehicule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100&family=Rajdhani:wght@500&display=swap" rel="stylesheet">
<link href="style.css" rel="stylesheet">

</head>
<body>
    <div class="header row text-center bg-color">
        <img src="logo.png" alt="logo" class="col-md-4">
        <h1 class="col-md-6 fa fa-align-center" >Garage V.Parrot</h1>
       
            <!--bouton connexion-->
        <button class=" button col-md-1 mt-5 btn btn-primary" data-bs-toggle="modal" 
        data-bs-target="#connectionModal"> se connecter</button>
    </div>
        <!--modale du bouton-->
        <div class="modal fade" id="connectionModal">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" aria-labelledby="se connecter">
                            connexion
                        </h5>
                        <button class=" button btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body" aria-describedby="content">
                    <form action="connexion.php" method="post" data-toggle="validator" class="shake">
                        <div class="row">
                            
                            <div class="form-group col-sm-6">
                                <label for="email" class="h4">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="password" class="h4">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" id="form-submit" class=" button btn btn-success btn-lg pull-right margin-top-1">connexion</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button class=" button btn btn-secondary" data-bs-dismiss="modal">close</button>
                    </div>
                </div>
            </div>

        </div>
    <main>
        <!--navbar-->
        <nav class="nav bg-light justify-content-center">
            <a href="acceuil.php" class="nav-link text-dark">Nos service</a>
            <a href="avis.php" class="nav-link text-dark">Les avis de nos clients</a>
        </nav>
        <!--flitre style navbar-->
      <?php  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire de filtrage
    $anneeMin = $_POST['annee_min'];
    $anneeMax = $_POST['annee_max'];
    $kilometrageMax = $_POST['kilometrage_max'];
    $prixMax = $_POST['prix_max'];

    // Requête pour récupérer les véhicules filtrés
    $sql = "SELECT * FROM vehicules WHERE année BETWEEN :annee_min AND :annee_max AND kilométrage <= :kilometrage_max AND prix <= :prix_max";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':annee_min', $anneeMin);
    $stmt->bindParam(':annee_max', $anneeMax);
    $stmt->bindParam(':kilometrage_max', $kilometrageMax);
    $stmt->bindParam(':prix_max', $prixMax);
    $stmt->execute();
  } else {
    // Requête pour récupérer tous les véhicules
    $stmt = $conn->prepare("SELECT * FROM vehicules");
    $stmt->execute();
  }

  // Vérifier s'il y a des véhicules à afficher
  if ($stmt->rowCount() > 0) {
 

    echo '<div class="filters  justify-content-center">
            <form method="POST" action="" class="form-inline-flex">
              <div class="form-group mr-2 justify-content-center">
                <label for="annee_min" class="mr-2">Année Min:</label>
                <input type="text" class="form-control" name="annee_min">
              </div>
              <div class="form-group mr-2">
                <label for="annee_max" class="mr-2">Année Max:</label>
                <input type="text" class="form-control" name="annee_max">
              </div>
              <div class="form-group mr-2">
                <label for="kilometrage_max" class="mr-2">Kilométrage Max:</label>
                <input type="text" class="form-control" name="kilometrage_max">
              </div>
              <div class="form-group mr-2">
                <label for="prix_max" class="mr-2">Prix Max:</label>
                <input type="text" class="form-control" name="prix_max">
              </div>
              <button type="submit" class=" button btn btn-primary">Filtrer</button>
            </form>
          </div>';?>
        <!--grille responsive-->
        <div class="container py-5 bg-light">

            <div class="row">     
                <div class="col-md-4 col-sm-6">
               <?php // Vérifier si le formulaire de filtrage est soumis
  

    echo '<div class="card-group">';
    while ($vehicule = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<div class="card mb-4 shadow-sm">';
      echo '<img src="' . $vehicule['image'] . '" alt="image_vehicule" class="w-100">';
      echo '<div class="card-body">';
      echo '<p class="card text">';
      echo 'Modèle : ' . $vehicule['modele'] . '<br>';
      echo 'Année : ' . $vehicule['année'] . '<br>';
      echo 'Kilométrage : ' . $vehicule['kilométrage'] . ' km<br>';
      echo 'Type de carburant : ' . $vehicule['carburant'] . '<br>';
      echo 'Prix : ' . $vehicule['prix'] . ' €';
      echo '</p>';
      echo '</div>';
      echo'<div class="card-footer">';
      echo'<button class=" button display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
              data-bs-target="#contactModal">formulaire de contact</button>';
      echo '</div>';
      echo '</div>';
    }
    echo '</div>';
  } else {
    echo "Il n'y a pas de véhicules à afficher.";
  }

$conn = null;
?>
                          
                          
                         
                      
                 </div>

        </div>
    </main>
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Nos horaire</h5>
              <ul>
                <li>
                    lundi-vendredi : 8h30 - 17h 
                </li>
                <li>
                    samedi-dimanche : 9h30 - 14h30
                </li>
              </ul>
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Nous contacter</h5>
      
              <p>
                06.**.**.**.**
              </p>
              <button class="button display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
              data-bs-target="#contactModal">formulaire de contact</button>
              <!--modale du bouton-->
        <div class="modal fade" id="contactModal">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" aria-labelledby="se connecter">
                            formulaire de contact
                        </h5>
                        <button class="button btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body" aria-describedby="content">
                    <form  action="contact.php" method="post" data-toggle="validator" class="shake">
                          <div class="row">
                              
                              <div class="row">
                                  <div class="form-group">
                                  <label for="nom_prenom">Entrez votre nom et prénom:</label>
                                     <input name="nom_prenom" autocomplete="off" class="form-control" placeholder="Entrez votre nom et prénom" required>
                                      <div class="help-block with-errors"></div>
                                  </div>
                                  <div class="form-group">
                                  <label for="mail">Entrez votre adresse mail:</label>
                                     <input name="mail" autocomplete="off" class="form-control" placeholder="Entrez votre adresse mail" required>
                                      <div class="help-block with-errors"></div>
                                  </div>
                                  <div class="form-group">
                                      <label for="numero" class="h4">Numéro de téléphone</label>
                                      <input type="float" name="numero" class="form-control" placeholder="Enter numero de téléphone" required>
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="message" class="h4 ">Message</label>
                                  <textarea name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                                  <div class="help-block with-errors"></div>
                              </div>
                              <button type="submit" id="contactForm-submit" class=" button btn btn-success btn-lg pull-right ">Envoyer</button>
                              <div id="msgContactSubmit" class="h3 text-center hidden"></div>
                              <div class="clearfix"></div>
                          </div>
                          
                          
                         
                      </form>
                    </div>
                    <div class="modal-footer">
                        <button class="button btn btn-secondary" data-bs-dismiss="modal">close</button>
                    </div>
                </div>
            </div>

        </div>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <p class="text-dark">Ecf studi</p>
        </div>
        <!-- Copyright -->
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>