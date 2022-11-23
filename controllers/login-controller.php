<?php
require_once __DIR__ . '/../function.php';

// Si la fontion trouve un utilisateur avec ces informations on le connecte
    if((user_connexion($_GET['login'], $_GET['password'])) && isset($_GET) && $_GET['login'] != '' && $_GET['password'] != '') {
        // On démarre une session pour stocké les informations de l'utilisateur connecté
        session_start();
        $_SESSION['user_logged_in'] = $_GET['login'];
        
        header('Location: ../accueil.php');
    } // Sinon on le renvoi sur la page de connexion
    else {
        // On met la valeur de session à NULL
        session_start();
        $_SESSION['user_logged_in'] = NULL;
        header('Location: ../index.php?error=error1');
    }