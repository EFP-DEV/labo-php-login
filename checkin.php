<?php
session_start();

if($_POST['username'] === 'admin' && $_POST['password'] === 'admin'){
    // aller sur la page du dashboard
    $_SESSION['is_logged'] = $_POST['username'];
    header('Location: dashboard.php');
}
else{
    // retour formulaire login avec message d'erreur
    header('Location: login.php?error=1');
}
