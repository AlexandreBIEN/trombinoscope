<?php
$title = 'Connexion';
require_once __DIR__ . '/inc/header.php';
    
?>

<main class="container container-width">
    <div class="text-center">
        <h2>Bienvenue !</h2>
        <img src="./assets/svg/lamanusocialmedia_rvb.png" alt="logo la manu" class="logo-index">
    </div>
    <form method="POST" action="./accueil.php">
        <div class="form-group">
            <label for="id">Identidiant :</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="ex : Alexandre">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">Connexion</button>
        </div>
    </form>    
</main>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>