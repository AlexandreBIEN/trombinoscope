<?php
require_once __DIR__ . '/../function.php';

if(isset($_GET)) {
    
    if(isset($_FILES['image_student']) && $_FILES['image_student']['error'] == 0){
        rename("/img/" . $_FILES['image_student']['name'], "/img/" . uniqid());
        $tmp = $_FILES['image_student']['tmp_name'];
        $filename = $_FILES['image_student']['name'];
        // droit min sur le dossier img 733 (rwx-wx-wx)
        $dest = '/img/';
        // à faire lorsque que "tous" les risquesont été évalués
        if(move_uploaded_file($tmp, $dest . $filename))
            echo 'téléchargement réussi';   
        else {
            echo 'marche pas :c';
        }
    }
    
    add_student($_GET['firstname'], $_GET['lastname'], $_GET['class'], $_GET['image_student']);
    // header('Location: ../add-student.php');
}