<?php
session_start();

if(empty($_SESSION['is_logged'])){
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Bonjour <?= $_SESSION['is_logged']?></p>
    
    <p>VISA CVC: 489</p>
</body>
</html>