<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>vehicule</title>
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
                        <form role="form" id="connexion form" data-toggle="validator" class="shake">
                            <div class="row">
                                
                                <div class="form-group col-sm-6">
                                    <label for="email" class="h4">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="password" class="h4">Mot de passe</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
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
            <a href="avis.php" class="nav-link text-dark">Les avis de nos clients</a>
        </nav>
        <!--grille responsive-->
        <div class="container py-5 bg-light">

            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="picasso.jpg" alt="picasso" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Citroën Xsara Picasso <br>
                                année : 2008 <br>
                                Kilométrage : 56 984 km <br>
                                type de carburant : diesel <br>
                                Prix : 7 900 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="picassoContactModal">
                    
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
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="focus.jpg" alt="focus" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Ford Focus <br>
                                année : 2013 <br>
                                Kilométrage : 131 437 km <br>
                                type de carburant : essence <br>
                                Prix : 9490 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="focusContactModal">
                    
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
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="twingo.jpg" alt="twingo" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Renault Twingo <br>
                                année : 2018 <br>
                                Kilométrage : 18 420 km <br>
                                type de carburant : essence <br>
                                Prix : 10 850 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="twingoContactModal">
                    
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
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="clio.jpg" alt="clio" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Renault Clio <br>
                                année : 2017 <br>
                                Kilométrage : 13 686 km <br>
                                type de carburant : essence <br>
                                Prix : 15 450 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="clioContactModal">
                    
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
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="fiesta.jpg" alt="fiesta" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Ford Fiesta <br>
                                année : 2016 <br>
                                Kilométrage : 101 137 km <br>
                                type de carburant : diesel <br>
                                Prix : 7850 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="fiestaContactModal">
                    
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
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="megane.jpg" alt="megane" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Renault megane <br>
                                année : 2012 <br>
                                Kilométrage : 66 788 km <br>
                                type de carburant : diesel <br>
                                Prix : 9 500 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="meganeContactModal">
                    
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
                        </div>

                    </div>

                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="fabia.jpg" alt="fabia" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Skoda Fabia <br>
                                année : 2011 <br>
                                Kilométrage : 45 256 km <br>
                                type de carburant : essence <br>
                                Prix : 8 190 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="fabiaContactModal">
                    
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
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="corsa.jpg" alt="corsa" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Opel Corsa <br>
                                année : 2004 <br>
                                Kilométrage : 278 392 km <br>
                                type de carburant : diesel <br>
                                Prix : 2 500 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="corsaContactModal">
                    
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
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="polo.jpg" alt="polo" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Volkswagen Polo <br>
                                année : 2016 <br>
                                Kilométrage : 35 428 km <br>
                                type de carburant : essence <br>
                                Prix : 13 500 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="poloContactModal">
                    
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
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-4 shadow-sm">
                        <img src="208.jpg" alt="208" class="w-100">
                        <div class="card-body">
                            <p class="card text">
                                Modèle : Peugeot 208 <br>
                                année : 2015 <br>
                                Kilométrage : 86 724 km <br>
                                type de carburant : diesel <br>
                                Prix : 8 950 €
                            </p>
                            <div class="btn-group">
                                <button class="display-block mt-5 btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#contactModal">formulaire de contact</button>
                                <!--modale du bouton-->
                          <div class="modal fade" id="208contactModal">
                    
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
                        </div>

                    </div>
                </div>
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