<?php
$host = 'localhost';
$db   = 'loginsystem';
$user = 'loginsystem';
$pass = 'FhZvm6J@mdXtZ2HX';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];


$pdo = new PDO($dsn, $user, $pass, $options);