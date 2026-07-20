<?php
//CARREGAR TODAS AS CLASSES DO PROJETO
spl_autoload_register(function ($classe) {
    $arquivo = __DIR__ . '/' .
               str_replace('\\', DIRECTORY_SEPARATOR, $classe)
               . '.php';

    if (file_exists($arquivo)) {
        require_once $arquivo;
    } else {
        echo "Classe não encontrada: $arquivo <br>";
    }
});

use Model\Database;
use Model\AutorModel;
use Controller\AutorController;

$classe = $_GET['classe'];
$acao = $_GET['acao'];

switch ($classe) {
    case "autor":
        $controller = new AutorController();
        break; 
    case "editora":
        //  $controller = new EditoraController();
        break;
    case "livro":
        //  $controller = new LivroController();
        break;
    default:
        echo "Welcome, Guest!";  
        break;
}


switch ($acao) {
    case "listar":
        $controller->listar();
        break; 
    case "cadastrar":
        //se a acao do form vir como cadastrar pegue os dados via GET
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $pais = $_POST['pais'];
        $result = $controller->cadastrar(
            [
                "nome" => $nome,
                "email" => $email,
                "fone" => $fone,
                "nacionalidade" => $pais
            ]
        );
        if($result){
            echo '<script> alert("Autor atualizado com sucesso!!!") </script>';
        }else{
            echo '<script> alert("Erro ao atualizar o autor!!!") </script>';
        }
        break;
    
    case "buscar":
            $id = $_GET['id'];
            $controller->buscarAutor($id);
        break;

    case "editar":
        //se a acao do form vir como editar pegue os dados via POST
        $id = $_POST['id_autor']; //dados dos inputs do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $pais = $_POST['pais'];
        $dados = [
                "nome" => $nome,
                "email" => $email,
                "fone" => $fone,
                "nacionalidade" => $pais
            ];
        $result = $controller->editar($id,$dados);
        if($result){
            echo '<script> alert("Autor atualizado com sucesso!!!") </script>';
        }else{
            echo '<script> alert("Erro ao atualizar o autor!!!") </script>';
        }
        break;
    default:
        http_response_code(404);
        echo "Ação inválida!";
        break;
}
?>