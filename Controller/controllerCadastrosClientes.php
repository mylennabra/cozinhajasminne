<?php
include '../Model/Cadastro.php';



$cliente     = $_POST['cliente'];
$telefone    = $_POST['telefone'];
$bairro      = $_POST['bairro'];
$rua         = $_POST['rua'];
$quadra      = $_POST['quadra'];
$lote        = $_POST['lote'];
$complemento = $_POST['complemento'];
$cadastro = new Cadastro();
$cadastro->cadastraClienteBancoDeDados($cliente,$telefone,$bairro,$rua,$quadra,$lote,$complemento);
