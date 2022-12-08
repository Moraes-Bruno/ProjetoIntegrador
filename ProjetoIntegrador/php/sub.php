<?php

require '../php/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
    
    $idaluno=$_SESSION['idUser'];
    $idvaga = $_GET["id"];

    $sql="INSERT INTO aluno_vaga(id_vaga,id_aluno) VALUES (?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->execute([$idvaga,$idaluno]);
    
    
    header("Location: ../html/vagas_descricao.php");
  

  
}