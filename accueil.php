<?php
$title = 'Accueil';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/function.php';    

// Récupération des classes
$classes = get_classes();

// Récupération des étudiants, filtré ou non
if(isset($_GET['class_id'])){
    $students = get_students_by_class($_GET['class_id']);
}
else {
    $students = get_students();
}

?>

<div class="container">
    <!-- Formulaire de filtre par classe -->
    <form method="GET" action="#">
        <label for="class_id">Par classe :</label>
        <select class="form-control" name="class_id">
        <?php foreach ($classes as $class) : ?>
            <option value="<?= $class['class_id']; ?>"><?= $class['class_name']; ?></option>
        <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary">Chercher</button>
    </form>
    <!-- retirer le filtre -->
    <form action="#">
        <button type="submit" class="btn btn-primary">Toutes les classes</button>
    </form>

    <!-- Liste des étudiants -->
    <?php foreach ($students as $student) : ?>

        <img src="./assets/img/<?= $student['img_name']?>" alt="">
        <p><?= $student['first_name'] ?></p>

    <?php endforeach; ?>
</div>


<?php
require_once __DIR__ . '/inc/footer.php';
    
?>