<?php
require_once __DIR__ . '/../function.php';

if(isset($_POST)) {
    
    if(isset($_FILES['image_student']) && $_FILES['image_student']['error'] == 0){
        // On créer un nouveau nom pour l'image en utilisant la fonction uniqid
        $uniqId = uniqid();
        $tmp = $_FILES['image_student']['tmp_name'];
        $filename = $_FILES['image_student']['name'];
        // droit min sur le dossier img 733 (rwx-wx-wx)
        $dest = '../assets/img/';
        // à faire lorsque que "tous" les risquesont été évalués
        if(move_uploaded_file($tmp, $dest . $filename)){
            echo 'téléchargement réussi';
            // On renome l'image
            rename("../assets/img/" . $_FILES['image_student']['name'], "../assets/img/" . $uniqId . ".png"); 
        }
        else {
            echo 'échec du téléchargement';
        }
    }
    
    // On enregistre les infos dans la base de donnée
    add_student($_POST['firstname'], $_POST['lastname'], $_POST['class'], $uniqId);
    header('Location: ../accueil.php');
}