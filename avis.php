<?php
    session_start();
        if(isset($_SESSION['users']))
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>avis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="header row text-center bg-color">
        <img src="logo.png" alt="logo" class="col-md-4">
        <h1 class="col-md-6 fa fa-align-center" >Garage V.Parrot</h1>
            <!--bouton connexion-->
            <button class="col-md-1 mt-5 btn btn-primary" data-bs-toggle="modal" 
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
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
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
                        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right margin-top-1">connexion</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                </div>
            </div>
        </div>

    </div>
    <main>
        <!--navbar-->
        <nav class="nav bg-light justify-content-center">
            <a href="acceuil.php" class="nav-link text-dark">Nos service</a>
            <a href="vehicule.php" class="nav-link text-dark">nos véhicules</a>
        </nav>
        <article>
           
        <form action="insert.php" method="post">
                <div class="col-md-12 col-sm-12">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <label for="commentaire">Laissez nous un commentaire !</label>
                            <p class="card text">
                                <div class="mb-3">
                                   <label for="nom_prenom" class="h4">Entrez votre nom et prénom:</label>
                                    <input type="text" name="nom_prenom" autocomplete="off"  class="form-control" placeholder="Entrez votre nom et prénom" required>
                                </div>
                                <div>
                                  <label for="commentaire" class="h4 ">Commentaire</label>
                                  <textarea name="commentaire" class="form-control" rows="5" placeholder="Entrez votre commentaire !" required></textarea>
                                  <div class="help-block with-errors"></div>
                                </div>
                                <div class="mb-3">
                                <label for="note" class="h4">Comment nous noteriez vous sur 5 ?</label>
                                    <input type="number" name="note" autocomplete="off" class="form-control" placeholder="Entrez votre note" required>
                                </div>
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#commentModal" type="submit" name="valider">envoyer</button>
                             </div>   
                        </div>
                    </div>
                </div>
                
            </form>

        </article>
        <article>
            <div class="col-md-12 col-sm-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header ">
                        <h2>Avis Clients</h2>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <h4 class="col-md-6">exemple d'un avis client</h4>
                            <p>Note : 4 étoiles</p> 
                            <p class="col-md-12">L'ambiance du garage était super ! on s'y sens en sécurité
                                 et face a des professionnel du domaine, je n'est rien a redire</p>
                        </div>
                    </div>
           
            
        </div>
    </div>
        </article>
    </main>
    <aside>
        

    </aside>
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
            <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
            data-bs-target="#contactModal">formulaire de contact</button>
            <!--modale du bouton-->
      <div class="modal fade" id="contactModal">

          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" aria-labelledby="se connecter">
                          formulaire de contact
                      </h5>
                      <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
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
                              <button type="submit" id="contactForm-submit" class="btn btn-success btn-lg pull-right ">Envoyer</button>
                              <div id="msgContactSubmit" class="h3 text-center hidden"></div>
                              <div class="clearfix"></div>
                          </div>
                          
                          
                         
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" data-bs-dismiss="modal">close</button>
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