<?php
session_start(); // Démarrage de la session
require_once 'config.php'; // On inclut la connexion à la base de données

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // Patch XSS
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $email = strtolower($email); // email transformé en minuscule

    // On regarde si l'utilisateur est inscrit dans la table utilisateurs
    $check = $conn->prepare('SELECT nom, prenom, email, password, token, poste FROM users WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    // Si > à 0 alors l'utilisateur existe
    if ($row > 0) {
        // Si le mail est bon niveau format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Si le mot de passe est le bon
            if (password_verify($password, $data['password'])) {
                //si l'utilisateur est un admin on le redirige sur les pages admin
                if ($data['poste'] === 'administrateur') {
                    $_SESSION['admin'] = $data['token'];
                    header('Location: admin_acceuil.php');
                    exit();
                    //sil l'utilisateur est un employé on le redirige sur les pages employé
                } elseif ($data['poste'] === 'employée') {
                    $_SESSION['employe'] = $data['token'];
                    header('Location: admin_vehicule.php');
                    exit();
                } else {
                    header('Location: acceuil.php?login_err=unknown');
                    exit();
                }
            } else {
                header('Location: acceuil.php?login_err=password');
                exit();
            }
        } else {
            header('Location: acceuil.php?login_err=email');
            exit();
        }
    } else {
        header('Location: acceuil.php?login_err=not_found');
        exit();
    }
} else {
    header('Location: acceuil.php');
    exit();
}
?>