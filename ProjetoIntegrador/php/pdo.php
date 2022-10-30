<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'vagas');

    global $conn;


    $conn = new PDO("mysql:host=localhost;dbname=".BASE, USER, PASS);