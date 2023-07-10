<?PHP

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // définir le mode exception d'erreur PDO 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e)
{
   die('Erreur'.$e->getMessage());
}