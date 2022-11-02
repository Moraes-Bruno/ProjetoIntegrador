<?php

session_start();

unset($_SESSION['idempresa']);

header("Location: ../html/loginjuridica.php");

?>