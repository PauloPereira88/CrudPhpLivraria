<?php

namespace Controller; //pasta onde a classe se encontra

use Model\AutorModel;

class AutorController{

    public function listar(){
        $dados = AutorModel::all();
        AutorController::carregarViewAutor($dados);
        
    }

    public static function carregarViewAutor($dados){
        require __DIR__ .'/../Views/listar-autor.php';
    }

    public static function buscarAutor($id){
        // validar se veio o ID para depois chamar o banco
        if($id < 50){
            echo 'chegou um id menor que 50 <br>';
            print_r($id);
        }
        $dados = AutorModel::find($id);
        AutorController::carregarViewEditarAutor($dados);
    }

    public static function carregarViewEditarAutor($dados){
        require __DIR__ .'/../Views/editar-autor.php';
    }

    public function cadastrar($dados){
        //validar se usuário já existe
        //return "Error";
        $cadastro = AutorModel::create($dados);
        return $cadastro;
    }

    public function editar($id, $dados){
        //validar se usuário já existe
        //return "Error";
        $editar = AutorModel::update($id, $dados);
        if($editar){
            $this->redirecionarListarAutores();
        }
    }

    private function redirecionarListarAutores(){
        header('Location: index.php?classe=autor&acao=listar');
    }
}
?>