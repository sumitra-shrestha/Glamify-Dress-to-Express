<?php
$servername = 'mysql:host=localhost;dbname=glamify';
$username = 'root';
$password = '';

try {
    $con = new PDO($servername, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

