<?php

// Start session to access login state
session_start();

// If user not logged → redirect to login
if (empty($_SESSION['is_logged'])) {
    header('Location: login.php');
    die; // Stop execution to prevent access to protected content
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

    <a href="logout.php">Se deconnecter</a>
</body>
</html>