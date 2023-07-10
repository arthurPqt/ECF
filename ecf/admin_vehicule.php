<?php
session_start();
require_once 'config.php'; // On inclut la connexion à la base de données
    if (!$_SESSION['employe']){
        header('Location:acceuil.php');
    }
    

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <title>avis</title>
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
        <h1 class="col-md-6 col-sm-6 fa fa-align-center" >Garage V.Parrot</h1>
            <!--bouton connexion-->
            <?php  if (isset($_SESSION["employe"]) === true) {
    // L'utilisateur est connecté, afficher le bouton de déconnexion
    echo "<form action=\"deco.php\" method=\"post\"  class=\"button col-md-2 mt-5 btn btn-primary\">
            <button type=\"submit\" class=\" button col-md-3 mt-5 btn btn-primary\">Déconnexion</button>
          </form>";
}?>
    </div>
    <main>
        <!--navbar-->
        <nav class="nav bg-light justify-content-center">
            
            <a href="admin_avis.php" class="nav-link text-dark">Les avis de nos clients</a>
             
        </nav>
        <!--grille responsive-->
        <div class="container py-5 bg-light">

            <div class="row">
            <div class="col-md-4 col-sm-6">
                    <form action="ajout_vehicule.php" method="post" class="card mb-4 shadow-sm" enctype="multipart/form-data">
                  <label for="image"class="h4">image</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        <div class="card-body">
                            <p class="card text">
                            
                            <label for="modele" class="h4">modèle</label>
                            <input type="text" class="form-control" name="modele" placeholder="modèle du véhicule" required> <br>
                            <label for="année" class="h4">année de fabrication</label>
                            <input type="text" class="form-control" name="année" placeholder="année de fabrication" required> <br>
                            <label for="kilométrage" class="h4">kilométrage</label>
                            <input type="int" class="form-control" name="kilométrage" placeholder="nombre de kilometre du véhicule" required> <br>
                            <label for="carburant" class="h4">type de carburant</label>
                            <input type="text" class="form-control" name="carburant" placeholder="carburant" required> <br>
                            <label for="prix" class="h4">prix de vente</label>
                            <input type="int" class="form-control" name="prix" placeholder="prix" required>
                            </p>
                            <div class="btn-group">
                            <button type="submit" id="form-submit" class="button btn btn-success btn-lg pull-right margin-top-1">enregistrer</button>
                          
                            </div>
                    
                        </div>

                    </form>
            </div>

            
                  
                <div class="col-md-4 col-sm-6">
   <?php             // Requête pour récupérer toutes les informations des véhicules

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si un véhicule a été sélectionné pour la suppression
    if (!empty($_POST['vehicule_id'])) {
      $vehicule_id = $_POST['vehicule_id'];

      // Supprimer le véhicule de la base de données
      $stmt = $conn->prepare("DELETE FROM vehicules WHERE id = :id");
      $stmt->bindParam(':id', $vehicule_id);
      $stmt->execute();

      echo "Le véhicule a été supprimé avec succès.";
    }
    // Vérifier si des véhicules ont été sélectionnés pour la validation
    if (!empty($_POST['vehicule_ids'])) {
      $vehicule_ids = $_POST['vehicule_ids'];

      // Valider les véhicules sélectionnés
      foreach ($vehicule_ids as $vehicule_id) {
        $stmt = $conn->prepare("UPDATE vehicules SET online = 1 WHERE id = :id");
        $stmt->bindParam(':id', $vehicule_id);
        $stmt->execute();
      }

      echo "Les véhicules sélectionnés ont été validés et sont maintenant visibles par tous.";
    }
  }

  // Requête pour récupérer tous les véhicules
  $stmt = $conn->prepare("SELECT * FROM vehicules");
  $stmt->execute();

  // Vérifier s'il y a des véhicules à afficher
  if ($stmt->rowCount() > 0) {
    echo '<form method="POST" action="">';
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
      echo '<div class="card-footer">';

      // Bouton d'approbation
      echo '<form method="POST" action="">';
      echo '<input type="hidden" name="vehicule_ids[]" value="' . $vehicule['id'] . '">';
      echo '<button type="submit" class="button btn btn-primary">Approuver</button>';
      echo '</form>';

      // Bouton de suppression
      echo '<form method="POST" action="">';
      echo '<input type="hidden" name="vehicule_id" value="' . $vehicule['id'] . '">';
      echo '<button type="submit" class="button btn btn-danger">Supprimer</button>';
      echo '</form>';

      echo '</div>';
      echo '</div>';
    }
    echo '</form>';
  } else {
    echo "Il n'y a pas de véhicules à afficher.";
  }


$conn = null;
?>
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
                              <button type="submit" id="contactForm-submit" class="button btn btn-success btn-lg pull-right ">Envoyer</button>
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