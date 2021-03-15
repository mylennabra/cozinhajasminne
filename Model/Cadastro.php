<?php
include '../conexao/Conexao.php';

class Cadastro
{

    public function cadastraClienteBancoDeDados($cliente, $telefone, $bairro, $rua, $quadra, $lote, $complemento)
    {

        $pdo = parent::get_instace();
        $sql = "INSERT INTO tb_clientes (cliente, telefone ,bairro, rua,quadra , lote  , complemento ) VALUE ($cliente,$telefone,$bairro,$rua,
        $quadra,$lote,$complemento)";

    }

}