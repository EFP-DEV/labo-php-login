<?php

// Start session to store login state
session_start();

include 'database.php';

// ⚠️ UNSAFE QUERY (for demonstration only)
// User input is directly concatenated → SQL injection possible
$sql = 'SELECT * FROM operator 
        WHERE active=1 
        AND username = "'.$_POST['username'].'" 
        AND password="'.$_POST['password'].'"';

// Debug: show the generated SQL
// var_dump($sql);
// die;

// Execute raw query (no protection)
$stmt = $pdo->query($sql);
$user = $stmt->fetch();

// If a row is returned → login accepted (even if hacked)
if ($user !== false) {

    $_SESSION['is_logged'] = $_POST['username'];

    header('Location: dashboard.php');
    die; // Stop execution after redirect

} else {

    header('Location: login.php?error=1');
    die; // Stop execution after redirect
}