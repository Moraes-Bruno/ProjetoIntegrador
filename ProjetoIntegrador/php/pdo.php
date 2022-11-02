<?php

session_start();

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'vagas');

    global $conn;

    try {
        $conn = new PDO("mysql:host=localhost;dbname=".BASE, USER, PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
        exit;
    }

?>