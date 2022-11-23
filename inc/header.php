<?php session_start(); 

// Si l'utilisateur n'est pas connecter on le renvoi sur la page de connexion avec un message d'erreur
if($_SESSION['user_logged_in'] == NULL){
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Trombinoscope - <?= $title ?></title>
</head>
<body>
<header class="bg-header">
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="./index.php"><img class="navbar-brand" src="./assets/svg/LaManuUltraCompact_RVB_white.svg" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="./assets/svg/menu-burger-open.svg" alt="menu">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="item-link" href="./accueil.php">Accueil  <img class="icon-menu" src="./assets/svg/home.svg" alt="icon accueil"></a>
              </li>
              <li class="nav-item">
                <a class="item-link" href="#">Thème  <img class="icon-menu" src="./assets/svg/theme.svg" alt="icon accueil"></a>
              </li>
              <li class="nav-item">
                <a class="item-link" href="./add-student.php">Ajouter un étudiant  <img class="icon-menu" src="./assets/svg/plus.svg" alt="icon accueil"></a>
              </li>
              <li class="nav-item">
                <a class="item-link" href="./controllers/disconect-controller.php">Se déconnecter  <img class="icon-menu" src="./assets/svg/disconnect.svg" alt="icon accueil"></a>
              </li>
            </ul>
        </div>
    </nav>
</header>