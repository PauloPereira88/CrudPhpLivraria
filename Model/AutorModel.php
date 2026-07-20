<?php

namespace Model; //pasta onde a classe se encontra

//nessa classe faremos o CRUD
class AutorModel extends Database
{

    public static function all() 
    {
        //busca todos os autores no banco de dados
        $db = self::getConn();
        // print_r($db);
        // print_r($db); // testando o retorno do método getConn();
        $stmt = $db->query("SELECT * FROM autor");
        $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        // echo '<br>';
        // print_r($dados);
        return $dados;
    }

    public static function find($id)
    {
        $db = self::getConn();
        $stmt = $db->prepare("SELECT * FROM autor WHERE id_autor= :id");
        $stmt->execute( ['id' => $id ] );
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }   

    public static function create($dados)//array DADOS como parâmetro....
    {
        $db = self::getConn();
        $stmt = $db->prepare("INSERT INTO autor (nome, email,fone,nacionalidade) VALUES (:nome, :email, :fone, :nacionalidade) ");
        $stmt->execute(
            [
                'nome' => $dados['nome'],
                'email' => $dados['email'],
                'fone' => $dados['fone'],
                'nacionalidade' => $dados['nacionalidade']
            ]
        );
        return true;
    }

    public static function update($id, $dados){

        $db = self::getConn();
        $stmt = $db->prepare("UPDATE autor SET nome =:nome, email =:email, fone= :fone, nacionalidade= :nacionalidade
                WHERE id_autor =:id_autor");
        $res = $stmt->execute(
              [
                'nome' => $dados['nome'],
                'email' => $dados['email'],
                'fone' => $dados['fone'],
                'nacionalidade' => $dados['nacionalidade'],
                'id_autor' => $id
            ]
        );

        return $res;
    }


    public static function delete($id_autor)
    {
        $db = self::getConn();
        $stmt = $db->prepare("DELETE FROM autor WHERE id_autor= :id_autor");
        return $stmt->execute( ['id_autor' => $id_autor] );
    }
}
