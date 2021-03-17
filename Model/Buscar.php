<?php

include 'conexao/conexao.php';

class Buscar extends Conexao
{
    public $campoBusca;

    public function mostraResultadorConsutaCliente()
    {

        if (!$this->campoBusca) {
            $this->mensagemDeNaoEncontrado($this->campoBusca);
        } else {
            if (isset($this->campoBusca)) {
                if ($this->campoBusca === '0' && $this->campoBusca === "0") {
                    $this->mensagemDeNaoEncontrado($this->campoBusca);
                    exit();
                }
            }

            $pdobancodedados = parent::get_instace();
            $sql_consuta_banco_de_dados = "SELECT *  FROM  tb_clientes WHERE  cliente like '%" . $this->campoBusca . "%'  or  telefone like '%" . $this->campoBusca . "%'  or  id like '%" . $this->campoBusca . "%'  ";
            $sql_consuta_banco_de_dados = $pdobancodedados->prepare($sql_consuta_banco_de_dados);
            $sql_consuta_banco_de_dados->execute();
            $rsulta = $sql_consuta_banco_de_dados->fetchAll();
            if ($sql_consuta_banco_de_dados->rowCount() === 0) {
                $this->mensagemDeNaoEncontrado($this->campoBusca);
            }
            
            foreach ($rsulta as $value) {
                echo 'Id' . " : " . $value['id'] . "\n" . "\n";
                echo 'Nome' . " : " . $value['cliente'] . "\n";
                echo 'Telefone' . " : " . $value['telefone'] . "\n";
                echo 'Bairro' . " : " . $value['bairro'] . "\n";
                echo 'Rua' . " : " . $value['rua'] . "\n";
                echo 'Quadra' . " : " . $value['quadra'] . "\n";
                echo 'Lote' . " : " . $value['lote'] . "\n";
                echo 'Complemento' . " : " . $value['complemento'] . "\n" . "</br>". "</br>"."<hr>";
            }
        }

    }

    public function mensagemDeNaoEncontrado($param)
    {
        echo "Sem Resultados encontrados  para -> " . $param;
    }

}