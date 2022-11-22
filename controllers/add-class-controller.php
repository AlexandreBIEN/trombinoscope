<?php
require_once __DIR__ . '/../function.php';

if(isset($_POST)) {
    add_class($_POST['classname']);
    header('Location: ../accueil.php');
}