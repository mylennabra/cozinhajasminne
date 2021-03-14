<?php

include '../Model/Login.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$Login = new Login();
$Login ->validaLogin($usuario,$senha);