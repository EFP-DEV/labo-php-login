<?php

// Start session to access existing data
session_start();

// Clear all session variables
$_SESSION = [];

// Destroy session on server
session_destroy();

// Redirect to login page (logout complete)
header('Location: login.php');
die; // Stop execution to prevent any further output after redirect