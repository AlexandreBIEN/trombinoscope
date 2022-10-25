<?php
require_once __DIR__ . '/db.php';

/***************************************************************************
Enregistrement d'un étudiant : requête paramétrée
utilisation de la méthode prépare avec des paramètres nommés.
************************************************************************** */
function add_student($user_first_name, $user_last_name, $user_class_id, $image_student){
    $db = db_connect();

    $sql = <<<EOD
    INSERT INTO `students` (`last_name`, `first_name`, `class_id`, `img_name`) 
    VALUES ( :user_last_name, :user_first_name, :class_id, :image_name)
    EOD;
    $studentInfoStmt = $db->prepare($sql);
    $studentInfoStmt->bindValue(':user_last_name', $user_last_name);
    $studentInfoStmt->bindValue(':user_first_name', $user_first_name);
    $studentInfoStmt->bindValue(':class_id', $user_class_id);
    $studentInfoStmt->bindValue(':image_name', $image_student);

    $studentInfoStmt->execute();

    return true;
}