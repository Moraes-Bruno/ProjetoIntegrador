<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'portal_de_vagas');


    $conn = new PDO("mysql:host=localhost;dbname=".BASE, USER, PASS);