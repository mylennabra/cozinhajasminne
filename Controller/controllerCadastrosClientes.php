<?php
include '../Model/Cadastro.php';

$cadastro = new Cadastro();

$cliente     = $_POST['cliente'];
$telefone    = $_POST['telefone'];
$bairro      = $_POST['bairro'];
$rua         = $_POST['rua'];
$quadra      = $_POST['quadra'];
$lote        = $_POST['lote'];
$complemento = $_POST['complemento'];

$cadastro->cadastraClienteBancoDeDados($cliente,$telefone,$bairro,$rua,$quadra,$lote,$complemento);
