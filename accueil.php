<?php
$title = 'Accueil';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/function.php';    

if(isset($_GET['class_id'])){
    $students = get_students_by_class($_GET['class_id']);
}
else {
    $students = get_students();
}

?>

<form method="GET" action="#">
    <label for="class_id"></label>
    <select class="form-control" name="class_id">
    
        <option value="1">Bachelor 1</option>

    </select>
    <button type="submit" class="btn btn-primary">Chercher</button>
</form>

<?php foreach ($students as $student) : ?>

    <img src="./assets/img/<?= $student['img_name']?>" alt="">
    <p><?= $student['first_name'] ?></p>

<?php endforeach; ?>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>