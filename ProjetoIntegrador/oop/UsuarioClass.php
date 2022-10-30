<?php

class Usuario{

    public function validarLogin($email,$senha, $email_empresa){
        global $conn;

        $sqlaluno = "SELECT * FROM  alunos where email_inst = :email and senha = :senha";
        $sqlaluno = $conn->prepare($sqlaluno);
        $sqlaluno->bindValue("email", $email);
        $sqlaluno->bindValue("senha", $senha);
        $sqlaluno->execute();

        $sqlempresa = "SELECT * FROM  empresas where email_corporativo = :email_empresa and senha = :senha";
        $sqlempresa = $conn->prepare($sqlempresa);
        $sqlempresa->bindValue("email_empresa", $email_empresa);
        $sqlempresa->bindValue("senha", $senha);
        $sqlempresa->execute();



        if($sqlaluno->rowCount() > 0){
            header("Location: ../html/home_aluno.php");
        }
        else if($sqlempresa->rowCount()>0){
            header("Location: ../html/home_empresa.php");
        }
        else{
            header("Location: ../html/login.php");
        }

        

    }
}