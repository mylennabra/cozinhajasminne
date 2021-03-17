<?php
include '../conexao/Conexao.php';

class Cadastro extends Conexao
{

    public function cadastraClienteBancoDeDados($cliente, $telefone, $bairro, $rua, $quadra, $lote, $complemento)
    {

        $pdo = parent::get_instace();
        $sql = "INSERT INTO tb_clientes(cliente,telefone,bairro,rua,quadra,lote,complemento) VALUES (:cliente,:telefone,:bairro,:rua,:quadra,:lote,:complemento)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":cliente", $cliente);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":bairro", $bairro);
        $sql->bindValue(":rua", $rua);
        $sql->bindValue(":quadra", $quadra);
        $sql->bindValue(":lote", $lote);
        $sql->bindValue(":complemento", $complemento);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            header("Location: ../buscar.php?ok");
        } else {
            header("Location: ../cadastrar.html?erro");
        }

    }

}