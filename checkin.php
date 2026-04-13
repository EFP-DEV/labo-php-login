<?php

var_dump($_POST);

if($_POST['username'] === 'admin' && $_POST['password'] === 'admin'){
    // aller sur la page du dashboard
    header('Location: dashboard.html');
}
else{
    // retour formulaire login avec message d'erreur
    header('Location: login.html?error=1');
}
