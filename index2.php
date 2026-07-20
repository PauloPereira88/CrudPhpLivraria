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

$controller = new AutorController();

$controller->listar();