<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password 
$database = "myno"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
