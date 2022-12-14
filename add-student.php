<?php
$title = 'Ajout d\'un étudiant';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/function.php';

// Récupération des classes
$classes = get_classes();
    
?>
<main class="container container-width">
    <form method="POST" action="./controllers/add-student-controller.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="last_name">Nom :</label>
            <input required type="text" class="form-control" id="last_name" name="lastname" placeholder="ex : Doe">
        </div>
        <div class="form-group">
            <label for="first_name">Prénom :</label>
            <input required type="text" class="form-control" id="first_name" name="firstname" placeholder="ex : John">
        </div>
        <label for="class">Classe :</label>
        <select required class="form-control" name="class">
            <!-- Liste des classes -->
        <?php foreach ($classes as $class) : ?>
            <option value="<?= $class['class_id']; ?>"><?= $class['class_name']; ?></option>
        <?php endforeach; ?>
        </select>

        <div class="form-group">
            <label for="image_student">Photo de l'étudiant :</label>
            <input required type="file" accept=".jpg, .jpeg, .png" class="form-control-file" id="image_student" name="image_student">
        </div>
        <div class="text-center py-2">
            <button type="submit" class="btn btn-secondary">Envoyer</button>
        </div>
    </form>

    <form action="./admin.php" class="text-center">
        <button type="submit" class="btn btn-secondary">Création de compte / classe</button>
    </form>    
</main>


<?php
require_once __DIR__ . '/inc/footer.php';
    
?>