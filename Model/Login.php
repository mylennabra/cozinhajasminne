<?php
include '../conexao/Conexao.php';

class Login extends Conexao
{

    public function validaLogin($usuario, $senha)
    {

        $pdo = parent::get_instace();
        $sql = "SELECT * FROM tb_login WHERE usuario = :usuario and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":usuario", $usuario);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
            if ($sql->rowCount() > 0){

                header("Location: ../buscar.php");
            }else{
                header("Location: ../index.php?errada");
            }

    }
}