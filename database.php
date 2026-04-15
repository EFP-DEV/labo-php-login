<?php

// Database connection settings
$host = 'localhost';
$db   = 'loginsystem';
$user = 'loginsystem';
$pass = 'FhZvm6J@mdXtZ2HX';
$charset = 'utf8mb4';

// DSN = connection string for PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// PDO configuration
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // throw errors as exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // results as associative arrays
    PDO::ATTR_EMULATE_PREPARES => false, // use real prepared statements
];

// Create PDO connection
$pdo = new PDO($dsn, $user, $pass, $options);