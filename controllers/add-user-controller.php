<?php
require_once __DIR__ . '/../function.php';

if($_GET != null) {
    register_user($_GET['login'], $_GET['password']);

    header('Location: ../admin.php');
}