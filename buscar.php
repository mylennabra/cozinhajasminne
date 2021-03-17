<!DOCTYPE html>

<meta charset="utf-8">
<link rel="stylesheet" href="estilo/estilo.css">
<script type="text/javascript" src="js/animation.js"></script>

<head>
    <title class="titulo">
        Banco de dados cozinha
    </title>
</head>
<body class="body">
<section class="conteudo-login">
    <!-- fORMULARIO QUE VAI ENVIA AS INFORMAÇOES DE USUARIO E SENHA PRA PAGINA PHP -->
    <form method="GET" action="">
        <div id="conteudo-pag">
            <div class="login">
                <div>
                    <img src="estilo/logojasminne.png" alt="logo da loja" class="logojasminne">
                </div>
                <div class="textologin">
                    <p class="texto">CLIENTE:</p>
                </div>
                <div class="caixa-de-entrada">
                    <input class="caixa-de-entrada" type="text" required="Infome a palvara" name="busca"
                           placeholder="Buscar por : Cliente , telefone ">
                </div>
                <div class="botoes">
                    <!--  "<a> esta com o link para redirecionar para a pagina cadastra , ao clicar"-->
                    <a class="enviar" href="cadastrar.html">Cadastrar</a>
                    <button class="enviar" type="submit">Buscar</button>
                </div>
                <div>
                </div>
    </form>
    <br>
    <br>
    <br>

    <div class="resutadoConsuta">
        <?php
        if (@$_GET['busca']) {
            @include_once 'Model/Buscar.php';
            @$cadastro = new Buscar();
            @$cadastro->campoBusca = $_GET['busca'];
            $cadastro->mostraResultadorConsutaCliente();
        }
        ?></div>

</section>
</div>
</body>

</html>