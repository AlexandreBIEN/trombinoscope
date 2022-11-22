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

/***************************************************************************
Enregistrement d'une classe : requête paramétrée
utilisation de la méthode prépare avec des paramètres nommés.
************************************************************************** */
function add_class($class_name){
    $db = db_connect();

    $sql = <<<EOD
    INSERT INTO `classes` (`class_name`) VALUES ( :class_name)
    EOD;
    $classStmt = $db->prepare($sql);
    $classStmt->bindValue(':class_name', $class_name);

    $classStmt->execute();

    return true;
}

/***************************************************************************
Récupère les étudiants inscrit dans la base de donnée
************************************************************************** */
function get_students() {
    $db = db_connect();

    $sql = <<<EOD
    SELECT 
        `student_id`,
        `last_name`, 
        `first_name`,
        `class_id`,
        `img_name`
    FROM 
        `students`
    EOD;

    $studentsStmt = $db->query($sql);
    $students = $studentsStmt->fetchAll(PDO::FETCH_ASSOC);
    return $students;
}

/***************************************************************************
Récupère les étudiants inscrit dans la base de donnée dans une certaine classe
************************************************************************** */
function get_students_by_class($class_id) {
    $db = db_connect();

    $sql = <<<EOD
    SELECT 
        `student_id`,
        `last_name`, 
        `first_name`,
        `class_id`,
        `img_name`
    FROM 
        `students`
    WHERE
        `class_id` = :class_id
    EOD;

    $studentsbyclassStmt = $db->prepare($sql);
    $studentsbyclassStmt->bindValue(':class_id', $class_id);

    $studentsbyclassStmt->execute();

    $students = $studentsbyclassStmt->fetchAll(PDO::FETCH_ASSOC);
    return $students;
}

/***************************************************************************
Récupère les classes inscrit dans la base de donnée
************************************************************************** */
function get_classes() {
    $db = db_connect();

    $sql = <<<EOD
    SELECT 
        `class_id`,
        `class_name`
    FROM 
        `classes`
    EOD;

    $classesStmt = $db->query($sql);
    $classes = $classesStmt->fetchAll(PDO::FETCH_ASSOC);
    return $classes;
}