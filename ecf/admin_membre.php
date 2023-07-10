<?php
    session_start();
    require_once 'config.php'; // On inclut la connexion à la base de données
    if (!$_SESSION['admin']){
        header('Location:acceuil.php');
    }
       
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <title>acceuil</title>
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
            <?php  if (isset($_SESSION["admin"]) === true) {
    // L'utilisateur est connecté, afficher le bouton de déconnexion
    echo "<form action=\"deco.php\" method=\"post\"  class=\"button col-md-2 mt-5 btn btn-primary\">
            <button type=\"submit\" class=\" button col-md-3 mt-5 btn btn-primary\">Déconnexion</button>
          </form>";
}?> <!--création compte employés-->
    <a href="inscription.php" class="button lien btn btn-info">créer un compte employés</a>

    </div>
        <!--navbar-->
        <nav class="nav bg-light justify-content-center">
            
            
            <a href="admin_acceuil.php" class="nav-link text-dark">Page d'acceuil</a>
        </nav>

        <!--home commentaire-->
        <div class="container p-4">
          <article class="col-md-12">
            <h2>Nos employés :</h2>
                <?php
                    $recupEmploye = $conn->query('SELECT * FROM users');
                    while($employe = $recupEmploye->fetch()){
                        ?>
                        <p><?= $employe['nom']; ?> <a href="bannir.php?id=<?= $employe['id']; ?>" style="color:red;
                        text-decoration: none;">Bannir l'employé</a></p>
                        <?php
                    }
                ?>
            </article>
        </div>
        
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