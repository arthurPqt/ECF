<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // définir le mode exception d'erreur PDO 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // Chemin de destination pour stocker l'image
  $destination = 'image/';

  // Récupérer les informations sur le fichier téléchargé
  $file = $_FILES['image'];

  // Vérifier s'il n'y a pas d'erreur lors du téléchargement
  if ($file['error'] === UPLOAD_ERR_OK) {
    // Obtenir le chemin temporaire du fichier téléchargé
    $tmpFilePath = $file['tmp_name'];

    // Générer un nom de fichier unique pour éviter les conflits
    $fileName = uniqid() . '_' . $file['name'];

    // Construire le chemin de destination complet
    $destinationPath = $destination . $fileName;

    // Déplacer le fichier téléchargé vers le dossier de destination
    if (move_uploaded_file($tmpFilePath, $destinationPath)) {
      // Le fichier a été téléchargé avec succès

      // Maintenant, vous pouvez enregistrer le chemin du fichier dans la base de données
      $modele = htmlspecialchars($_POST['modele']);
      $annee = htmlspecialchars($_POST['année']);
      $kilometrage = htmlspecialchars($_POST['kilométrage']);
      $carburant = htmlspecialchars($_POST['carburant']);
      $prix = htmlspecialchars($_POST['prix']);
      
      $sql = "INSERT INTO `vehicules` (`modele`, `année`, `kilométrage`, `carburant`, `prix`, `image`) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      
      $stmt->bindParam(1, $modele);
      $stmt->bindParam(2, $annee);
      $stmt->bindParam(3, $kilometrage);
      $stmt->bindParam(4, $carburant);
      $stmt->bindParam(5, $prix);
      $stmt->bindParam(6, $destinationPath);
      
      $stmt->execute();
      
      echo "Nouveaux enregistrement ajoutés avec succès<br> <a href='admin_vehicule.php'>Retour au formulaire</a>";
    } else {
      // Une erreur s'est produite lors du déplacement du fichier
      echo "Une erreur s'est produite lors du téléchargement du fichier.";
    }
  } else {
    // Une erreur s'est produite lors du téléchargement de l'image
    echo "Une erreur s'est produite lors du téléchargement de l'image : " . $file['error'];
  }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
