<?php

// Start session to store login state
session_start();

include 'database.php';

// Select hashed password for active user
$sql = 'SELECT password FROM operator WHERE active=1 AND username = ?';

// Prepared statement → prevents SQL injection
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['username']]);

// Fetch user (false if not found)
$user = $stmt->fetch();

// Verify password against stored hash
if ($user !== false && password_verify($_POST['password'], $user['password'])) {

    // Store login state in session
    $_SESSION['is_logged'] = $_POST['username'];

    // Redirect to protected area
    header('Location: dashboard.php');
    die; // Stop execution after redirect

} else {

    // Failed login → redirect with error flag
    header('Location: login.php?error=1');
    die; // Stop execution after redirect
}