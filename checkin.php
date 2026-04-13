<?php
session_start();

include 'database.php';

// nous navons pas encore vu les prepared queries
// NE JAMAIS integrer des donnnees exterieurs dans un query
$sql = 'SELECT password FROM operator WHERE active=1 AND username = "'.$_POST['username'].'"';
$stmt = $pdo->query($sql);
$user = $stmt->fetch();

if($user === false){
    // retour formulaire login avec message d'erreur
    header('Location: login.php?error=NoUser');
}
elseif($user['password'] === $_POST['password']){
    $_SESSION['is_logged'] = $_POST['username'];
    header('Location: dashboard.php');
}
else{
    header('Location: login.php?error=passwordWrong');
}


var_dump($sql);
var_dump($user);
die;

if($_POST['username'] === 'admin' && $_POST['password'] === 'admin'){
    // aller sur la page du dashboard

}
else{

}
