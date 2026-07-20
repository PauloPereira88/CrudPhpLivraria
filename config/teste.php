<?php

echo __DIR__; //DIRETÓRIO

echo '<br>';

echo __FILE__; //ARQUIVO
echo '<br>';
print_r($_SERVER["REQUEST_METHOD"]);

// $_POST , $_GET
echo '<br>';
print_r($_SERVER["REQUEST_URI"]);