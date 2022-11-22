<?php
$title = 'Admin';
require_once __DIR__ . '/inc/header.php';
    
?>
<main class="container container-width">
    <!-- Création compte utilisateur -->

    <p class="section-title text-center">Création d'un compte :</p>

    <form method="POST" action="./controllers/add-user-controller.php">
        <div class="form-group">
            <label for="id">Identidiant :</label>
            <input required type="text" class="form-control" id="id" name="id" placeholder="ex : Alexandre">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input required type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">Créer le compte</button>
        </div>
    </form>


    <!-- Création classe -->

    <p class="section-title mt-5 text-center">Ajout d'une classe :</p>

    <form method="POST" action="./controllers/add-class-controller.php">
        <div class="form-group">
            <label for="classname">Nom de la nouvelle classe :</label>
            <input required type="text" class="form-control" id="classname" name="classname" placeholder="ex : Bachelor 1">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">Ajouter la classe</button>
        </div>
    </form>
</main>
<?php
require_once __DIR__ . '/inc/footer.php';
    
?>