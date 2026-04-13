<?php
session_start();

include 'database.php';

// nous navons pas encore vu les prepared queries
// NE JAMAIS integrer des donnnees exterieurs dans un query
$sql = 'SELECT password FROM operator WHERE active=1 AND username = "'.$_POST['username'].'"';
$stmt = $pdo->query($sql);
$user = $stmt->fetch();

if($user !== false && password_verify($_POST['password'], $user['password'])){
    $_SESSION['is_logged'] = $_POST['username'];
    header('Location: dashboard.php');
}
else{
    header('Location: login.php?error=1');
}
