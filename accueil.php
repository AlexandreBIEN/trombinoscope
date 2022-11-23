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

<main class="container">
    <!-- Formulaire de filtre par classe -->
    <div class=" container container-width">
        <form method="GET" action="#">
            <label for="class_id">Par classe :</label>
            <select class="form-control" name="class_id">
            <?php foreach ($classes as $class) : ?>
                <option value="<?= $class['class_id']; ?>"><?= $class['class_name']; ?></option>
            <?php endforeach; ?>
            </select>
            <div class="text-center py-2">
                <button type="submit" class="btn btn-secondary">Chercher</button>
            </div>
        </form>
        <!-- retirer le filtre -->
        <form action="/accueil.php" class="text-center ">
            <button type="submit" class="btn btn-secondary">Toutes les classes</button>
        </form>    
    </div>
    
    <div class="container d-flex">
        <div class="row">
        <!-- Liste des étudiants -->
        <?php foreach ($students as $student) : ?>
            <div class="col">
                <div class="card text-center mb-4">
                    <img src="./assets/img/<?= $student['img_name']?>.png" alt="" class="img-student">
                    <p><?= $student['first_name'] ?></p>
                    <p><?= $student['last_name'] ?></p>
                </div>
            </div>
            
        <?php endforeach; ?>
        </div>
    </div>
    
    </main>


<?php
require_once __DIR__ . '/inc/footer.php';
    
?>