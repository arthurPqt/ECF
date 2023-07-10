<?php
    session_start();
    require_once 'config.php'; // On inclut la connexion à la base de données
    if (isset($_GET['id']) AND !empty($_GET['id'])){
        $getid = $_GET['id'];
        $recupEmploye = $conn->prepare('SELECT * FROM users WHERE id = ?');
        $recupEmploye->execute(array($getid));
        if ($recupEmploye->rowCount() > 0){
            $bannirEmploye = $conn->prepare('DELETE FROM users WHERE id = ?');
            $bannirEmploye->execute(array($getid));

            header('Location: admin membre.php');
        }else{
            echo "Aucun employé n'a été trouver";
        }
    }else{
        echo "L'indentifiant n'a pas été obtenu";
    }
       
?>