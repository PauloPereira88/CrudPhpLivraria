<?php

namespace Model; //pasta onde a classe se encontra


// CLASSE QUE SE CONECTA AO BANCO E RETORNA A CONEXAO
class Database
{
    private static $conn = null; //variável de conexao com o banco

    public static function getConn()
    {
        if(self::$conn === null)
        {
            $config = require __DIR__.'/../config/configs.php'; //busca as informações de configs
            $db = $config['database'];
            try{
                
                $datasource = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8mb4";
                //variável self::conn recebe a conexão com o banco de dados
                self::$conn = new \PDO($datasource,$db['user'],$db['password'] ,
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
                // return ["Conectado com sucesso"];
            }
            catch (\PDOException $err){
                error_log($err->getMessage());
                throw new \Exception("Erro ao conectar ao banco de dados");
            }
        }

        return self::$conn; // RETORNAR A CONEXÃO COM O BANCO
    }
}
