<?php
$title = 'Admin';
require_once __DIR__ . '/inc/header.php';
    
?>

<!-- Création compte utilisateur -->

<h1>Création d'un compte :</h1>

<form method="POST" action="./controllers/add-user-controller.php">
    <div class="form-group">
        <label for="id">Identidiant :</label>
        <input type="text" class="form-control" id="id" name="id" placeholder="ex : Alexandre">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>


<!-- Création classe -->

<h1>Ajout d'une classe :</h1>

<form method="POST" action="./controllers/add-class-controller.php">
    <div class="form-group">
        <label for="classname">Nom de la nouvelle classe :</label>
        <input type="text" class="form-control" id="classname" name="classname" placeholder="ex : Bachelor 1">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>