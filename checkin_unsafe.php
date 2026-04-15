<?php
session_start();

include 'database.php';

// nous navons pas encore vu les prepared queries
// NE JAMAIS integrer des donnnees exterieurs dans un query
// Dans la page login, connecter vous avec: 
// 'bozoleclown" OR 1=1; -- ' (sans les apostrophes, avec espace final)
$sql = 'SELECT * FROM operator WHERE active=1 AND username = "'.$_POST['username'].'" AND password="'.$_POST['password'].'"';

// si vous voulez comprendre comment cela fonctionne, decommenter les deux lignes suivantes.
// var_dump($sql);
// die;

$stmt = $pdo->query($sql);
$user = $stmt->fetch();

if($user !== false){
    $_SESSION['is_logged'] = $_POST['username'];
    header('Location: dashboard.php');
}
else{
    header('Location: login.php?error=1');
}
