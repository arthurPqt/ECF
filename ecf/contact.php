<?PHP

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // définir le mode exception d'erreur PDO 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "INSERT INTO `contact` ( `nom_prenom`, `mail`, `numero`, `message`)
VALUES( '$_POST[nom_prenom]','$_POST[mail]','$_POST[numero]','$_POST[message]')
";
  // utiliser la fonction exec() car aucun résultat n'est renvoyé
  $conn->exec($sql);
  echo "Nouveaux enregistrement ajoutés avec sucéés<br> <a href='avis.php'>Retour au formulaire</a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>