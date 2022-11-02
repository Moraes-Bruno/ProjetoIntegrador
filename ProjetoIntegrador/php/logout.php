<?php

session_start();

unset($_SESSION['idUser']);

header("Location: ../html/login.php");

?>