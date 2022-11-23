<?php

session_start();
        

// On met la valeur de session à NULL
$_SESSION['user_logged_in'] = NULL;

header('Location: ../index.php');