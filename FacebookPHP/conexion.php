<?php
    $host = "localhost";
    $database = "id19208882_cuentas";
    $user = "id19208882_facebook";
    $pass = "8KT~<7<j}xHpt[Q";
    
    try {
        $conexion = new PDO("mysql:host=$host; dbname=$database;" , $user, $pass);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
