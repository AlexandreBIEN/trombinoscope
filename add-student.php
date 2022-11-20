<?php
$title = 'Ajout d\'un étudiant';
require_once __DIR__ . '/inc/header.php';
    
?>

<form method="POST" action="./controllers/add-student-controller.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="last_name">Nom :</label>
        <input type="text" class="form-control" id="last_name" name="lastname" placeholder="ex : Doe">
    </div>
    <div class="form-group">
        <label for="first_name">Prénom :</label>
        <input type="text" class="form-control" id="first_name" name="firstname" placeholder="ex : John">
    </div>
    <select class="form-control" name="class">
        <option value="1">Bachelor 1</option>
        <option value="2">Bachelor 2</option>
        <option value="3">Bachelor 3</option>
    </select>

    <div class="form-group">
        <label for="image_student">Photo de l'étudiant :</label>
        <input type="file" class="form-control-file" id="image_student" name="image_student">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>


<?php
require_once __DIR__ . '/inc/footer.php';
    
?>