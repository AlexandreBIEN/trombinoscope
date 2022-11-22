<?php
$title = 'Connexion';
require_once __DIR__ . '/inc/header.php';
    
?>

<div class="container w-25">
    <h1>Bienvenue !</h1>
    <img src="./assets/svg/lamanusocialmedia_rvb.png" alt="logo la manu">
    <form method="POST" action="./accueil.php">
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
</div>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>