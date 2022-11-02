<?php

class Usuario{

    public function validarLogin($email,$senha){
        global $conn;

        $sqlaluno = "SELECT * FROM  alunos where email_inst = :email and senha = :senha";
        $sqlaluno = $conn->prepare($sqlaluno);
        $sqlaluno->bindValue("email", $email);
        $sqlaluno->bindValue("senha", $senha);
        $sqlaluno->execute();

        if($sqlaluno->rowCount() > 0){
            $dado = $sqlaluno->fetch();

            $_SESSION['idUser'] = $dado['IDaluno'];

            return true;
        }
        else{
            return false;
        }

    }

    /*Função parte empresa*/
    public function validarLoginEmpresa($email,$senha){
        global $conn;

        $sqlaluno = "SELECT * FROM  empresas where email_corporativo = :email and senha = :senha";
        $sqlaluno = $conn->prepare($sqlaluno);
        $sqlaluno->bindValue("email", $email);
        $sqlaluno->bindValue("senha", $senha);
        $sqlaluno->execute();

        if($sqlaluno->rowCount() > 0){
            $dado = $sqlaluno->fetch();

            $_SESSION['idempresa'] = $dado['IDempresa'];

            return true;
            
        }
        else{
            return false;
            header("Location: ../html/login.php");
        }

    }

    public function logged($id){
        global $conn;

        $array = array();

        $sqlaluno = "SELECT nome FROM alunos WHERE IDaluno = :idusuario";
        $sqlaluno = $conn->prepare($sqlaluno);
        $sqlaluno->bindValue("idusuario", $id);
        $sqlaluno->execute();
        

        if($sqlaluno->rowCount() > 0){
            $array = $sqlaluno->fetch();
        }

        return $array;
    }
}

