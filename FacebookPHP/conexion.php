<?php
    $host = "localhost";
    $database = "id19655967_registros";
    $user = "id19655967_rex";
    $pass = "xmuYy+lT~P~SnO9b";
    
    try {
        $conexion = new PDO("mysql:host=$host; dbname=$database;" , $user, $pass);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
