<?php


// Conexão Criando com o banco de dados local da minha maquina
class Conexao
{
    public static $instace;

    public static function get_instace()
    {

        if (!isset(self::$instace)) {
            self::$instace = new PDO("mysql:dbname=cozinhajasminne;host=localhost", "root", "");
        }
        if (self::$instace) {

            return self::$instace;

        } else {
            echo "Não conectado";
        }
    }

}


