<?PHP

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // définir le mode exception d'erreur PDO 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "INSERT INTO `comments` ( `nom_prenom`, `commentaire`, `note`)
VALUES( '$_POST[nom_prenom]','$_POST[commentaire]','$_POST[note]')
";
  // utiliser la fonction exec() car aucun résultat n'est renvoyé
  $conn->exec($sql);
  echo "Nouveaux enregistrement ajoutés avec sucees<br> <a href='avis.php'>Retour au formulaire</a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>