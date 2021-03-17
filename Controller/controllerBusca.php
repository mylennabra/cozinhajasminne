<?php

include '../Model/Buscar.php';

$cadastro = new Buscar();

$cadastro->campoBusca = $_POST['busca'];

$cadastro->mostraResultadorConsutaCliente();

