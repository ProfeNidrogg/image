<?php
// db_connect.php

try {
    $pdo = new PDO('mysql:host=localhost:3307;dbname=galeria_db', 'root', 'admin');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
